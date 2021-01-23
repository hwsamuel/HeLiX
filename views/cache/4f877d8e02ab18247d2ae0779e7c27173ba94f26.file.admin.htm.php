<?php /* Smarty version Smarty-3.1.8, created on 2021-01-22 19:25:19
         compiled from "./views\admin.htm" */ ?>
<?php /*%%SmartyHeaderCode:745319623600b188f739318-26999224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f877d8e02ab18247d2ae0779e7c27173ba94f26' => 
    array (
      0 => './views\\admin.htm',
      1 => 1383945450,
      2 => 'file',
    ),
    '47bf0703c051ab669a9bd01b460c7459a50e9ce6' => 
    array (
      0 => './views\\template.htm',
      1 => 1611339877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745319623600b188f739318-26999224',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_600b188f769222_07523082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600b188f769222_07523082')) {function content_600b188f769222_07523082($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HeLiX &bull; Admin</title>
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
        <a class="brand" href="index.php">HeLiX &bull; Health Informatics Ethics Repository</a>
        <div class="nav-collapse collapse pull-right">
          <ul class="nav nav-pills">
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogs.php">Catalogs</a></li>
            <li><a href="orgs.php">Organizations</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container"> 
    <div>
      
<br />
<h1>Admin</h1>
<p><a href="?logout">Log out</a></p>
<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>

<form action="admin.php" enctype="multipart/form-data" method="post">
<div class="row">
  <div class="span3">Choose HTML file to index:</div>
  <div class="span3"><input name="path" type="file" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Title:</div>
  <div class="span3"><input type="text" name="title" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Type <small>(Code/Specification)</small>:</div>
  <div class="span3"><input type="text" name="type" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Organization:</div>
  <div class="span3"><input type="text" name="organization" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Website:</div>
  <div class="span3"><input type="text" name="url" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Tags <small>(separate by comma)</small>:</div>
  <div class="span3"><input type="text" name="tag" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Year published:</div>
  <div class="span3"><input type="text" name="publication_year" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span3">Source:</div>
  <div class="span3"><input type="text" name="source" /></div>
  <div class="span6"></div>
</div>

<div class="row">
  <div class="span6"><input type="submit" value="Upload File" /></div>
  <div class="span6"></div>
</div>
</form>

    </div>
    <hr>

    <footer>
      <p>&copy; 2014 Hamman Samuel. This website contains content indexed from other sources, and the relevant copyrights are retained by the respective authors/publishers. The services provided herein are meant for academically-motivated, not-for-profit research.</p>
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