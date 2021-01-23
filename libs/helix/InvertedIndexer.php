<?php

require_once('NaiveLemmatizer.php');
class InvertedIndexer {
	private $db;
	
	function __construct($db) {
		$this->db = $db;
	}
	
	function getDB() {
		return $this->db;
	}
	
	function setDB($db) {
		$this->db = $db;
	}
	
	/** 
	 * @param string path of document
	 * @param array data to import, needs to match 'document' table structure (title, source, organization, url, tag, type, publication_year, path)
	 */
  function addDocument($path, $data) {
    $document = $this->db->dispense('document');
    $document->import($data);
    $document->path = $path;
    $document->timestamp = date('Y-m-d');
    return $this->db->store($document);
  }
  
  /**
   * @param string path of document
   * @param int document id reference
   */
  function addIndex($text, $docid) {
    $text = strip_tags($text);
    
    $lemmatizer = new NaiveLemmatizer();
    $text = $lemmatizer->filterCommonWords($text);
    $items = preg_split('@[\W\r\n\s]+@', $text);
    foreach($items as $item) {
      $item = trim(strtolower($item));
      if ($item == '') continue;
      if (is_numeric($item)) continue;
      if (!preg_match('/^\pL+$/u', $item)) continue;
      
      $query = "SELECT id FROM inverted_index WHERE word = '$item'";
      $index = $this->db->getCell($query);
      
      if ($index == null) {
        $invertedIndex = $this->db->dispense('inverted_index');
        $invertedIndex->word = $item;
        $invertedIndex->document_ids = $docid;
        $this->db->store($invertedIndex);
      } else {
        $invertedIndex = $this->db->load('inverted_index', $index);
        $docs = $invertedIndex->document_ids;
        if (stristr($docs, strval($docid)) === false) {
          $invertedIndex->document_ids = "$docs,$docid";
          $this->db->store($invertedIndex);
        }
      }
    }
  }
}
