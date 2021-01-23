<?php /* Smarty version Smarty-3.1.8, created on 2013-11-13 07:53:34
         compiled from "./views/plaincatalog.htm" */ ?>
<?php /*%%SmartyHeaderCode:18304359565283926ecc76b7-53744103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ee4a15eaea830eb6b51e585227f412f1eed77c' => 
    array (
      0 => './views/plaincatalog.htm',
      1 => 1384352895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18304359565283926ecc76b7-53744103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'matches' => 0,
    'contents' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5283926ed36d99_22140817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283926ed36d99_22140817')) {function content_5283926ed36d99_22140817($_smarty_tpl) {?><html
<head>
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
  </style>
    
  <script src="libs/bootstrap/js/jquery.js"></script>
  <script src="libs/bootstrap/js/bootstrap-modal.js"></script>

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
			top: 20px;
			left: 75%;
			width: 150px;
			height: 70px;
			padding: 5px;
			background: #EEE;
			border: 1px solid #CCC;
			text-align: left;
		}
		#summary {
			text-align: left;
		}
	</style>
</head>

<body>
<div class="row">
	<div class="span1" id="searchnav" style="<?php if (!isset($_REQUEST['q'])){?>display:none<?php }?>">
		<div id="summary">
		<?php echo $_smarty_tpl->tpl_vars['matches']->value;?>
 result(s) found
		</div>
		
		<a href="#" onclick="prev();">&lt; Previous</a> |
		<a href="#" onclick="next();">Next &gt;</a>
	</div>
	
  <div class="span11">
    <?php echo $_smarty_tpl->tpl_vars['contents']->value;?>

  </div>
</div>

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
</html><?php }} ?>