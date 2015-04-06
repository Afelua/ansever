<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:57:47
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\wg_viewport_common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21645501efbb6c4065-08219003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc13437a8adb7021961948db497814a13c91c4a' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\wg_viewport_common.tpl',
      1 => 1424158314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21645501efbb6c4065-08219003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li><label><?php echo $_smarty_tpl->getVariable('wg_item')->value['title'];?>
</label><span><?php if (is_array($_smarty_tpl->getVariable('wg_item')->value['value'])){?><?php echo implode($_smarty_tpl->getVariable('wg_item')->value['value'],',');?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('wg_item')->value['value'];?>
<?php }?></span></li>