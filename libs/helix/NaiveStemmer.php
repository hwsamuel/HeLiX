<?php
/**
 * Naive stemmer based on suffices
 * Strips suffix from word and finds valid word variant with other suffices
 * English suffixes available from http://en.wiktionary.org/wiki/Appendix:English_suffixes
 *
 * Unit tests: NaiveStemmerTests.php
 *
 * @author Hamman Samuel
 */

class NaiveStemmer {
	private $suffices;
	
	function __construct($suffices = null) {
		if ($suffices != null) $this->suffices = $suffices;
	}
	
	/**
	 * @return array()
	 */
	function getSuffices() {
		return $this->suffices;
	}
	
	/**
	 * @param array, e.g. [0] => 'ate', [1] => 'cy'
	 */
	function setSuffices($suffices) {
		$this->suffices = $suffices;
	}
	
	/**
	 * @param string
	 * @return string (same as parameter if no stem found)
	 */
	function getStem($word) {
		$stem = null;
		$wordLength = strlen($word);
		
		foreach($this->suffices as $suffix) {
			$suffixLength = strlen($suffix);
			if ($suffixLength <= 1) continue;	// Suffix too short, would give too many variants
			$stemLength = $wordLength - $suffixLength;
			$trunk = substr($word, $stemLength);	// e.g. $word = 'private', $suffix = 'cy', $trunk = 'te'
			if ($stemLength < 3) continue; // Stem too short, would give too many variants
			if ($suffix == $trunk) {
				$stem = substr($word, 0, $stemLength);
				break;
			}
		}
		return $stem;
	}
	
	/**
	 * @param array, e.g. privacy code, e.g. privacy/code
	 * @return array, e.g. [0] => 'priv', [1] => 'cod'
	 */
	function getStems($words) {
		preg_match_all("~\w+~", $words, $matches);
		$ret = array();
		foreach($matches[0] as $match) {
			$word = $this->getStem($match);
			if ($word != "") $ret[count($ret)] = $word;
		}
		return $ret;
	}
}
