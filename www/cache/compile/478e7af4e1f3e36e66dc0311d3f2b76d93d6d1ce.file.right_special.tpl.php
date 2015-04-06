<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:34
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\right_special.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157875501e82ea82d72-41535667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478e7af4e1f3e36e66dc0311d3f2b76d93d6d1ce' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\right_special.tpl',
      1 => 1424158314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157875501e82ea82d72-41535667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'Z:\home\sever-arenda\www\third\smarty\plugins\modifier.truncate.php';
?><div id="right_special">
<h3>VIP</h3>
<div class="clr"></div>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('special_items2')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<4){?>
<div id="item">
<a href="<?php echo $_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
"><?php echo $_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['path'];?>
</a><br>
<div id="item_img">
<?php if ($_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['img'][0]['preview']!=''){?>

<a href="<?php echo $_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
">
<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['img'][0]['preview'];?>
" border="0" />
</a>

<?php }else{ ?>

<a href="<?php echo $_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
">
<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/no_foto.png" border="0" />
</a>

<?php }?>
<span class="price"><?php echo number_format($_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'],0,","," ");?>
</span>
</div>
<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('special_items2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['text']),200);?>

</div>
<?php }?>
<?php endfor; endif; ?>
</div>
