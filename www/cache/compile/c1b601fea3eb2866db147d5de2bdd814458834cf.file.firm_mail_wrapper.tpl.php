<?php /* Smarty version Smarty-3.0.8, created on 2015-04-28 06:36:53
         compiled from "Z:/home/anseverv2/www/apps/system/template/firm_mail_wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20425553eba05ae5ea1-51474919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b601fea3eb2866db147d5de2bdd814458834cf' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/system/template/firm_mail_wrapper.tpl',
      1 => 1428342789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20425553eba05ae5ea1-51474919',
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
