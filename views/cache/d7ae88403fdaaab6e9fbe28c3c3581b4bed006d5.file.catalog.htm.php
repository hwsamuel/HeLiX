<?php /* Smarty version Smarty-3.1.8, created on 2014-08-02 21:10:24
         compiled from "./views/catalog.htm" */ ?>
<?php /*%%SmartyHeaderCode:116913292352839265176947-81308060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ae88403fdaaab6e9fbe28c3c3581b4bed006d5' => 
    array (
      0 => './views/catalog.htm',
      1 => 1384246427,
      2 => 'file',
    ),
    'dbe4fe2cec8fc1a78bec46f26f1e1e3eb1f3427d' => 
    array (
      0 => './views/template.htm',
      1 => 1407027166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116913292352839265176947-81308060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5283926524c8b6_84684251',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283926524c8b6_84684251')) {function content_5283926524c8b6_84684251($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/compsci/webdocs/hwsamuel/web_docs/cardea/helix/libs/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HIER &bull; Catalog : <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An index of relevant codes of ethics and open standards relevant to health informatics ethics">
  <meta name="author" content="Hamman Samuel">

  <!-- Le styles -->
  <link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="libs/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="libs/bootstrap/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="libs/bootstrap/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="libs/bootstrap/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="libs/bootstrap/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="libs/bootstrap/ico/apple-touch-icon-57-precomposed.png">
  
  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      height: 20px;
    }
    .nav,
    .navbar-text {
      padding: 10px;
    }
    .navbar-form {
      padding-top: 10px;
    }
    .navbar-text a {
      padding-left: 10px;
    }
    .highlight {
      color: #F00;
    }
    #infobar {
      background: #EEE;
      padding: 25px;
    }
    .brand {
			margin-top: 10px;
    }
    div.scrollable {
			border: 1px solid #CCC; 
			padding: 4px; 
			width: 100%; 
			height: 150px; 
			overflow: auto;
    }
    .label-warning {
			color: #FFF;
    }
  </style>
  
  
  
  <script src="libs/bootstrap/js/jquery.js"></script>
  <script src="libs/bootstrap/js/bootstrap-modal.js"></script>
  
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="index.php">HIER &bull; Health Informatics Ethics Repository</a>
        <div class="nav-collapse collapse pull-right">
          <ul class="nav nav-pills">
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogs.php">Catalogs</a></li>
            <li><a href="orgs.php">Organizations</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contribute.php">Contribute</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container"> 
    <div>
      
<script>
	var i = 0;
	function next() {
		$("#keyword"+i).css("background-color", "orange");
		$("#keyword"+i).css("color", "white");
		if (i < <?php echo $_smarty_tpl->tpl_vars['matches']->value;?>
) i = i + 1;
		else i = 1;
		$("#keyword"+i).css("background-color", "yellow");
		$("#keyword"+i).css("color", "red");
		scroll(i);
	}
	function prev() {
		$("#keyword"+i).css("background-color", "orange");
		$("#keyword"+i).css("color", "white");
		if (i > 1) i = i - 1;
		else i = <?php echo $_smarty_tpl->tpl_vars['matches']->value;?>
;
		$("#keyword"+i).css("background-color", "yellow");
		$("#keyword"+i).css("color", "red");
		scroll(i);
	}
	function scroll(i) {
		var position = $("#keyword"+i).offset();
		setTimeout('window.scrollTo('+position.left+','+(position.top-100)+')',1);
	}

	function gotop() {
		i = 1;
		setTimeout('window.scrollTo(0,0)',1);
	}
</script>

<style>
	#searchnav {
		position: fixed;
		left: 60%;
		top: 100px;
		width: 320px;
		height: 70px;
		padding: 5px;
		background: #EEE;
		border: 1px solid #CCC;
		text-align: center;
	}
	#summary {
		text-align: left;
	}
</style>

<br />
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <a href="#" class="label" onclick="$('#info').toggle();">&#x25BC;</a></h3>
<div class="row">
	<div class="span12" id="info">

	<b>Organization</b>: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['org']->value;?>
</a><br />
	<b>Publication Year</b>: <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
<br />
	<b>Type</b>: <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<br />
	<b>Source</b>: <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">URL</a><br />
	<b>Date Indexed</b>: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_indexed']->value);?>

	</div>
</div>

<div class="row">
  <div class="span12">
    <form class="navbar-form" action="catalog.php">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
      <input class="span6" type="text" name="q" id="q" placeholder="Search within this catalog">
      <button type="submit" class="btn">Search</button>
    </form>
	</div>
</div>

<br />
<div class="row">
	<div class="span3" id="searchnav" style="<?php if (!isset($_REQUEST['q'])){?>display:none<?php }?>">
		<div id="summary">
		Search keywords: <a onclick="next();" href="#" class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['q']->value;?>
</a><br />
		<?php echo $_smarty_tpl->tpl_vars['matches']->value;?>
 result(s) found
		</div>
		
		<a href="#" onclick="prev();">&lt; Previous</a> |
		<a href="#" onclick="next();">Next &gt;</a>
	</div>
	
  <div class="span9">
    <?php echo $_smarty_tpl->tpl_vars['contents']->value;?>

  </div>
</div>

    </div>
    <hr>

    <footer>
      <p>&copy; 2014 Hamman W. Samuel. This website contains content indexed from other sources, and the relevant copyrights are retained by the respective authors/publishers. The services provided herein are meant for academically-motivated, not-for-profit research.</p>
    </footer>

  </div> <!-- /container -->

  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="libs/bootstrap/js/bootstrap-transition.js"></script>
  <script src="libs/bootstrap/js/bootstrap-alert.js"></script>
  <script src="libs/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="libs/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="libs/bootstrap/js/bootstrap-tab.js"></script>
  <script src="libs/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="libs/bootstrap/js/bootstrap-popover.js"></script>
  <script src="libs/bootstrap/js/bootstrap-button.js"></script>
  <script src="libs/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="libs/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="libs/bootstrap/js/bootstrap-typeahead.js"></script>
</body>
</html>
<?php }} ?>