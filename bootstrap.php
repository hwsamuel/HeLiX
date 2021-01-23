<?php
// Session management
session_start();

set_time_limit(0);

// App settings
define('LOGGEDID', 'logged');
define('LOGGEDVAL', 'helix');
define('ADMINUSER', 'admin');
define('ADMINPWD', 'xilHel#5');
define('UPLOADDIR', 'uploads/');

// Database engine
require_once('libs/rb/rb.php');
class ORM extends RedBean_Facade {
	function init($freeze = true) {
    R::setup('sqlite:database/helix.sqlite');
		R::freeze($freeze);
	}
}

// Template engine
require_once('libs/smarty/Smarty.class.php');
class Template extends Smarty {
	public function init() {
		parent::__construct();
    $this->setTemplateDir('./views');
    $this->setCompileDir('./views/cache');
    $this->caching = 0;
    $this->auto_literal = true; 
    $this->left_delimiter = "{"; 
    $this->right_delimiter = "}";
	}
}

// Stemmer
require_once('libs/helix/NaiveStemmer.php');
class Stemmer extends NaiveStemmer {
	function __construct() {
		$rb = new ORM();
    $rb->init();
    $suffices = $rb->getCol("SELECT suffix FROM suffixes");
		$this->setSuffices($suffices);
	}
}

// Lemmatizer
require_once('libs/helix/NaiveLemmatizer.php');
class Lemmatizer extends NaiveLemmatizer {
	function __construct() {
		$rb = new ORM();
    $rb->init();
    $dictionary = $rb->getCol("SELECT word FROM dictionary");
    $this->setDictionary($dictionary);
	}
}

// Inverted indexer
require_once('libs/helix/InvertedIndexer.php');
class Indexer extends InvertedIndexer {
	function __construct() {
		$rb = new ORM();
    $rb->init();
		$this->setDB($rb);
	}
}

// Simple search
require_once('libs/helix/SimpleSearch.php');
class Search extends SimpleSearch {
	function __construct() {
		$stemmer = new Stemmer();
		$lemmatizer = new Lemmatizer();
		$fuzzy = new SimpleFuzzy("database/dictionary.txt");
	
		$this->setStemmer($stemmer);
		$this->setLemmatizer($lemmatizer);
		$this->setFuzzy($fuzzy);
	}
}

// Logger
require_once('libs/klogger/src/KLogger.php');
class Logger extends KLogger {
	static function Save($location, $query) {
		$log = KLogger::instance(dirname(__FILE__)."/logs/", KLogger::DEBUG);
		$log->logInfo("Location = $location :: Query = $query");
	}
}

// Simple session manager
class Session {
  private $session_name;
  private $session_value;
  
	public function init() {
		$this->session_name = LOGGEDID;
		$this->session_value = LOGGEDVAL;
	}
	
	public function isValidLogin($username, $pwd) {
    if ($username == ADMINUSER && $pwd == ADMINPWD) return true;
    else return false;
	}

	public function isLoggedIn() {
    if (isset($_SESSION[LOGGEDID])) {
      if ($_SESSION[LOGGEDID] == LOGGEDVAL) return true;
      else return false;
    } else {
      return false;
    }
	}

	public function logIn() {
    $_SESSION[LOGGEDID] = LOGGEDVAL;
	}

	public function logOut() {
    unset($_SESSION[LOGGEDID]);
	}
	
	public function redirectLogin() {
    return header('Location: login.php');
	}

	public function redirectAdmin() {
    return header('Location: admin.php');
	}
}
