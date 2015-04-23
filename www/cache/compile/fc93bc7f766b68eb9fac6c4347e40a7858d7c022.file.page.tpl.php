<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 21:37:17
         compiled from "Z:/home/anseverv2/www/apps/admin/admin/template/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138745538f58d596a55-51987640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc93bc7f766b68eb9fac6c4347e40a7858d7c022' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/admin/admin/template/page.tpl',
      1 => 1424158272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138745538f58d596a55-51987640',
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