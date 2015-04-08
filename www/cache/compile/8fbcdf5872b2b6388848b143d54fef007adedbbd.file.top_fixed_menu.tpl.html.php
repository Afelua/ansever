<?php /* Smarty version Smarty-3.0.8, created on 2015-04-08 17:06:46
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\top_fixed_menu.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:128955524efa684a665-39603160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fbcdf5872b2b6388848b143d54fef007adedbbd' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\top_fixed_menu.tpl.html',
      1 => 1428484001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128955524efa684a665-39603160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<table width="100%;">
			<tr>
			<td width="33%">
				<b>Наш офис:</b> <span class= "greenTitle" >м. Василеостровская </span><br>
				Санкт-Петербург, ВО 6-линия д.43 

			</td>

			<td width="34%" style="text-align: center;">
				<img src="/img/logo1.png">
			</td>

			<td width="33%" style="text-align: right;">
				Нужна помощь?<b> <br>
				Звоните: <a href="tel:+7 (812) 327-49-79">(812) 327-49-79</a> </b> <br>
				или <span style="text-decoration:underline">оставьте заявку</span>

			</td>
			</tr>
			</table>
			<br>
			<ul class="nav">
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('right_menu')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
				<li><a href="<?php echo $_smarty_tpl->getVariable('right_menu')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><?php echo $_smarty_tpl->getVariable('right_menu')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
				<?php endfor; endif; ?>
			</ul>


		</div>
	</div>
</div>
