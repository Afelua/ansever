<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:27
         compiled from "Z:/home/sever-arenda/www/apps/system/template/auth_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256465501e8273841c0-15587331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2424f89786a87f332460fe454ad9e3c14053884d' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/system/template/auth_page.tpl',
      1 => 1424158306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256465501e8273841c0-15587331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo @SITE_ENCODING;?>
">
	<link href="http://www.sitebill.ru/css/nano.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/bootstrap/css/bootstrap.min.css" media="screen">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/jqueryui/jquery-ui.js"></script>
    <!-- <script src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/js/jquery.js"></script> -->
	<script src="http://www.sitebill.ru/js/nanoapi.js"></script>
	<script src="http://www.sitebill.ru/js/nanoapi_beta.js"></script>
	<!--  <link rel=stylesheet type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/css/style.css"> -->
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/sitebillcore.js"></script>
	
	<style>
		#adminloginform {
			width: 350px;
		}
		.alert {
			display: none;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			var h=$('#adminloginform').height();
			var w=$('#adminloginform').width();
			var c=SitebillCore.getDialogPositionCoords(w, h);
			$('#adminloginform').css({'margin-top':c[1]+'px', 'margin-left':c[0]+'px'});
		});
	</script>
	
</head>
<body>
<div class="content">
<div class="row-fluid">
	<div id="adminloginform">
		<div class="well">
	        <legend><?php echo $_smarty_tpl->getVariable('L_AUTHORIZATION')->value;?>
<?php if ($_smarty_tpl->getVariable('ntext')->value!=''){?><br /><?php echo $_smarty_tpl->getVariable('ntext')->value;?>
<?php }?></legend>
	        <?php echo $_smarty_tpl->getVariable('formbody')->value;?>

	        <!-- <form method="POST" action="">
	        	<div class="alert alert-error">
	            	<a class="close" data-dismiss="alert" href="#">x</a>Incorrect Username or Password!
				</div>      
	            <input class="span12" placeholder="<?php echo $_smarty_tpl->getVariable('L_AUTH_LOGIN')->value;?>
" type="text" name="username">
	            <input class="span12" placeholder="<?php echo $_smarty_tpl->getVariable('L_AUTH_PASSWORD')->value;?>
" type="password" name="password"> 
	            <label class="checkbox">
	                <input type="checkbox" name="remember" value="1"> Remember Me
	            </label>
	            <button class="btn-info btn" type="submit"><?php echo $_smarty_tpl->getVariable('L_AUTH_ENTER')->value;?>
</button>      
	        </form>   -->  
		</div>
	</div>
</div>
</div>
</body>
</html>