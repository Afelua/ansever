<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:45:42
         compiled from "Z:/home/sever-arenda/www/apps/admin/admin/template/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98245501ece6908459-08954309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89821c9f2f3f5caa388b2eae61f922fc67689ef6' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/admin/admin/template/page.tpl',
      1 => 1424158272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98245501ece6908459-08954309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="0" width="99%">
	<tr>
		<td <?php if ($_smarty_tpl->getVariable('tree')->value!=''){?>colspan="2"<?php }?>><?php echo $_smarty_tpl->getVariable('tabs')->value;?>
</td>
	</tr>
	<tr>
		<?php if ($_smarty_tpl->getVariable('tree')->value!=''){?><td valign="top" width="200"><?php echo $_smarty_tpl->getVariable('tree')->value;?>
</td><?php }?>
		<td valign="top" style="vertial-align: top;"><?php echo $_smarty_tpl->getVariable('grid')->value;?>
</td>
	</tr>
</table>