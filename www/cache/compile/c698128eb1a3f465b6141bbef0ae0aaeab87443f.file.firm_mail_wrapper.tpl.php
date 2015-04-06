<?php /* Smarty version Smarty-3.0.8, created on 2015-03-29 22:40:48
         compiled from "Z:/home/sever-arenda/www/apps/system/template/firm_mail_wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3066255180ef09d3c93-35884601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c698128eb1a3f465b6141bbef0ae0aaeab87443f' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/system/template/firm_mail_wrapper.tpl',
      1 => 1424158306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3066255180ef09d3c93-35884601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="mail-body">
<?php echo $_smarty_tpl->getVariable('letter_content')->value;?>

</div>

<style>
.mail-body {
border: 1px solid #dddddd;
background-color: #fff;
width: 600px;
margin: 0 auto;
padding: 10px 20px;
}
</style>
