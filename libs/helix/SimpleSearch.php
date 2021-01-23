<?php
require_once('SimpleFuzzy.php');

class SimpleSearch {
	private $stemmer;
	private $lemmatizer;
	private $fuzzy;
	
	function getStemmer() {
		return $this->stemmer;
	}
	
	function getLemmatizer() {
		return $this->lemmatizer;
	}
	
	function setStemmer($stemmer) {
		$this->stemmer = $stemmer;
	}
	
	function setLemmatizer($lemmatizer) {
		$this->lemmatizer = $lemmatizer;
	}
	
	function getFuzzy() {
		return $this->fuzzy;
	}
	
	function setFuzzy($fuzzy) {
		$this->fuzzy = $fuzzy;
	}
	
	function search($corpus, $words, $fullwords = false) {
		if (trim($words) == '') return array("count" => 0, "corpus" => $corpus, "query" => $words);
		
		preg_match_all("~\w+~", $words, $found);
		if(!$found) return $corpus;
		
		$f = "";
		if ($fullwords) $f = "\\b";
		
		$re = "~$f(" . implode("|", $found[0]) . ")$f~i";
		$text = preg_replace_callback(
			 $re, 
			 function($matches) {
					static $i = 0;
					$i++;
					return "<span class='label-warning' name='keyword$i' id='keyword$i'>".$matches[0]."</span>";
			 }, 
			 $corpus,-1,$count
		);
		return array("count" => $count, "corpus" => $text, "query" => $words);
	}
	
	function getFuzzies($words) {
		$fizz = "";
		$words = explode(" ", $words);
			
		foreach($words as $word) {
			$closest = $this->fuzzy->getClosest($word);
			if ($closest != "") $fizz .= $closest." ";
		}
		return $fizz;
	}
	
	function expand($words) {
		// Sanitize
		if (trim($words) == '') return;
		$words = $this->lemmatizer->filterCommonWords($words);
		
		// Get variants
		$words .= " ".$this->getFuzzies($words);
		$stems = $this->stemmer->getStems($words);
		$lemmas = $this->lemmatizer->getLemmas($stems);
		$singPlu = $this->lemmatizer->getSingularPlural($words);
		
		$words = $words." ".$lemmas." ".$singPlu;
		return $words;
	}
}
