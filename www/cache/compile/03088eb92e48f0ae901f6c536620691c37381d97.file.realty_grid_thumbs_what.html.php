<?php /* Smarty version Smarty-3.0.8, created on 2015-03-31 03:39:53
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\realty_grid_thumbs_what.html" */ ?>
<?php /*%%SmartyHeaderCode:38915519a689afe7c5-48138055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03088eb92e48f0ae901f6c536620691c37381d97' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\realty_grid_thumbs_what.html',
      1 => 1427744387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38915519a689afe7c5-48138055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('grid_items')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_sh']=='Продажа квартир'){?>
		<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, null);?>
		<?php }elseif($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_sh']=='Аренда квартир'){?>
		<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(2, null, null);?>
		<?php }?>
	<?php endfor; endif; ?>
<div>
<?php if ($_smarty_tpl->getVariable('a')->value==1){?>
<div class="questions_specialist">АРЕНДА</div>
<div class="min_price">Минимальные цены по районам</div>
<br>
<div class="flat">
<span>Кировский + Красносельский</span> районы:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>    
<br>
<div class="flat">
<span>Петродворцовый</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>  
<br>
<div class="flat">
<span>Центральный</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>     
<br>
<div class="flat">
<span>Петроградский + Василеостровский</span> районы:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Всеволожский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Приморский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div> 
<br>
<div class="flat">
<span>Выборгский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Калининский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div> 
<br>
<div class="flat">
<span>Красногвардейский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Невский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Колпинский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Пушкинский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>
<br>
<div class="flat">
<span>Московский</span> район:
	<ul>
		<li><a href="">Студия: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Однокомнатная: <span>3 500</span> тыс руб.</a> </li>
    	<li><a href="">Двухкомнатная: <span>3 500</span> тыс руб.</a> </li>
    </ul>
</div>                   
<?php }?>
<?php if ($_smarty_tpl->getVariable('a')->value==2){?>
Минимальные цены аренда
<?php }?>
</div>