<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:54:07
         compiled from "Z:/home/sever-arenda/www/apps/getrent/site/template/main.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:142365501eedf727512-16401512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b873a4c6d2eefc2fd628b260711239a7ae5b167' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/getrent/site/template/main.tpl.html',
      1 => 1424158292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142365501eedf727512-16401512',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script type="text/javascript">
$(document).ready(function(){
	var b=$("#getrent_submit");
	var form=b.parents('form').eq(0);
	form.submit(function(e){
		b.replaceWith("Отправка данных на сервер...");
		return true;
	})
});
</script>

<div><?php echo $_smarty_tpl->getVariable('description')->value;?>
</div>
<?php echo $_smarty_tpl->getVariable('main')->value;?>
