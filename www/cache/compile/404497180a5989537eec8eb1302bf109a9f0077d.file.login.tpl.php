<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:30
         compiled from "Z:/home/sever-arenda/www/apps/socialauth/site/template/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266735501e82a473133-17964000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404497180a5989537eec8eb1302bf109a9f0077d' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/socialauth/site/template/login.tpl',
      1 => 1399010480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266735501e82a473133-17964000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/socialauth/site/template/css/style.css">
<div class="socialauth-panel">
    <noindex>
    <?php if ($_smarty_tpl->getVariable('fb_login_enable')->value==1){?><a class="auth icon facebook popup" href=""></a><?php }?>
    <?php if ($_smarty_tpl->getVariable('vk_login_enable')->value==1){?><a class="auth icon vkontakte popup" href=""></a><?php }?>
    <?php if ($_smarty_tpl->getVariable('ok_login_enable')->value==1){?><a class="auth icon odnoklassniki popup" href=""></a><?php }?>
    <?php if ($_smarty_tpl->getVariable('tw_login_enable')->value==1){?><a class="auth icon twitter popup" href=""></a><?php }?>
    <?php if ($_smarty_tpl->getVariable('gl_login_enable')->value==1){?><a class="auth icon google popup" href=""></a><?php }?>
    </noindex>
</div>


<script>

$(document).ready(function(){
	$('.socialauth-panel a.auth').click(function(e){
		document.cookie = "back_url=" + window.location.href + ";expires=Mon, 01-Jan-2001 00:00:00 GMT";
		document.cookie = "back_url=" + window.location.href + ";path=/;expires=Mon, 01-Jan-2029 00:00:00 GMT";
		e.preventDefault();
	});
	$('.socialauth-panel a.vkontakte').click(function(e){
		e.preventDefault();
		window.location.replace(estate_folder+'/socialauth/login/vkontakte/');
	});
	$('.socialauth-panel a.facebook').click(function(e){
		e.preventDefault();
		window.location.replace(estate_folder+'/socialauth/login/facebook/');
	});
	$('.socialauth-panel a.odnoklassniki').click(function(e){
		e.preventDefault();
		window.location.replace(estate_folder+'/socialauth/login/odnoklassniki/');
	});
	$('.socialauth-panel a.google').click(function(e){
		e.preventDefault();
		window.location.replace(estate_folder+'/socialauth/login/google/');
	});
	$('.socialauth-panel a.twitter').click(function(e){
		e.preventDefault();
		window.location.replace(estate_folder+'/socialauth/login/twitter/');
	});
});
</script>
<style>

</style>
