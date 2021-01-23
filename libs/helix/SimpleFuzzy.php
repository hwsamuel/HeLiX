<?php
class SimpleFuzzy {
	/**
	 * @param string $input Word that may be misspelled
	 * @param array $words Dictionary of words
	 * @return If misspelt then correction, else blank
	*/ 
	
	private $dictionary;
	
	function __construct($dictPath) {
		$all = file_get_contents($dictPath);
		$this->dictionary = explode("\n", $all);
	}
	
	function getDictionary() {
		return $this->dictionary;
	}
	
	function setDictionary($dictionary) {
		$this->dictionary = $dictionary;
	}
	
	function getClosest($input) {
		$shortest = -1;
		$closest = "";
		
		foreach ($this->dictionary as $word) {
			if (substr($word, 0, 1) != substr($input, 0, 1)) continue;
			
			$lev = levenshtein(strtolower($input), strtolower($word), 2, 1, 4);

			if ($lev == 0) {
				$closest = $word;
				$shortest = 0;
				break;
			}

			if ($lev <= $shortest || $shortest < 0) {
				$closest  = $word;
				$shortest = $lev;
			}
		}
		
		similar_text($input, $closest, $percent);
		//$percent = 1 - levenshtein($input, $closest) / max(strlen($input), strlen($closest));
		
		if ($shortest == 0 || $percent < 60) {
			return "";
		} else {
			return $closest;
		}
	}
}