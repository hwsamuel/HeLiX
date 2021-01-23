<?php /* Smarty version Smarty-3.1.8, created on 2014-08-02 18:56:57
         compiled from "./views/orgs.htm" */ ?>
<?php /*%%SmartyHeaderCode:121309462052839283c9a3f2-37930465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052e8c068ba390aeb31b8365fd86c1015f5bc8d7' => 
    array (
      0 => './views/orgs.htm',
      1 => 1407027415,
      2 => 'file',
    ),
    'dbe4fe2cec8fc1a78bec46f26f1e1e3eb1f3427d' => 
    array (
      0 => './views/template.htm',
      1 => 1407027166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121309462052839283c9a3f2-37930465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52839283d1c309_77511926',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52839283d1c309_77511926')) {function content_52839283d1c309_77511926($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HIER &bull; Organizations</title>
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
      
<br />
<h3>Organizations</h3>
<div class="row">
  <div class="span12">
  <p>There are various national and international organizations affiliated with medical/health informatics. Below is a listing of the organizations whose materials that have been indexed in HIER. </p>
	
	<ul>
	<?php  $_smarty_tpl->tpl_vars['org'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['org']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['org']->key => $_smarty_tpl->tpl_vars['org']->value){
$_smarty_tpl->tpl_vars['org']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['org']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['org']->value['organization'];?>
</a></li>
	<?php } ?>
	</ul>
	
	<p>The International Medical Informatics Association (IMIA) also maintains a list of its member organizations worldwide: <a target="_blank" href="http://www.imia-medinfo.org/new2/node/13">IMIA Members Listing</a></p>
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