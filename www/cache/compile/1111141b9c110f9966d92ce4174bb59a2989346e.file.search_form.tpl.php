<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 15:53:52
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1257155238d105cb592-94140331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1111141b9c110f9966d92ce4174bb59a2989346e' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\search_form.tpl',
      1 => 1424158314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257155238d105cb592-94140331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/js/autoNumeric-1.7.5.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/mycombobox_ac.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/<?php echo $_smarty_tpl->getVariable('current_theme_name')->value;?>
/js/search_form.js"></script>


<script>
var max_price=<?php if ($_smarty_tpl->getVariable('max_price')->value!=''){?><?php echo $_smarty_tpl->getVariable('max_price')->value;?>
<?php }else{ ?>0<?php }?>;
var price_from=Number(<?php if (isset($_smarty_tpl->getVariable('price_min',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('price_min')->value;?>
<?php }else{ ?>0<?php }?>);
var price_for=Number(<?php if ((isset($_smarty_tpl->getVariable('price',null,true,false)->value))&&($_smarty_tpl->getVariable('price')->value!='')){?><?php echo $_smarty_tpl->getVariable('price')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('max_price')->value;?>
<?php }?>);
</script>


<?php echo $_smarty_tpl->getVariable('ajax_functions')->value;?>


<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('scripts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
	<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php }} ?>


<?php if (isset($_smarty_tpl->getVariable('local_search_forms',null,true,false)->value)&&count($_smarty_tpl->getVariable('local_search_forms')->value)>0){?>
	<ul class="nav nav-tabs" id="search_forms_tabs">
	  <li><a href="#main_sf" data-toggle="tab">Все</a></li>
	  <?php  $_smarty_tpl->tpl_vars['ftdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['ftname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('local_search_forms')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ftdata']->key => $_smarty_tpl->tpl_vars['ftdata']->value){
 $_smarty_tpl->tpl_vars['ftname']->value = $_smarty_tpl->tpl_vars['ftdata']->key;
?>
	  <li<?php if ($_smarty_tpl->tpl_vars['ftdata']->value['active']==1){?> class="active"<?php }?>><a href="#<?php echo $_smarty_tpl->tpl_vars['ftdata']->value['id'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ftname']->value;?>
</a></li>
	  <?php }} ?>
	</ul>
<?php }else{ ?>

<?php }?>
	

<?php if (isset($_smarty_tpl->getVariable('local_search_forms',null,true,false)->value)&&count($_smarty_tpl->getVariable('local_search_forms')->value)>0){?>
<div class="tab-content">
	<div class="tab-pane" id="main_sf">
		<?php $_template = new Smarty_Internal_Template('standart_search_form.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>
	<?php  $_smarty_tpl->tpl_vars['ftdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['ftname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('local_search_forms')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ftdata']->key => $_smarty_tpl->tpl_vars['ftdata']->value){
 $_smarty_tpl->tpl_vars['ftname']->value = $_smarty_tpl->tpl_vars['ftdata']->key;
?>
	<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['ftdata']->value['active']==1){?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['ftdata']->value['id'];?>
">
		<?php echo $_smarty_tpl->tpl_vars['ftdata']->value['body'];?>

	</div>
	<?php }} ?>
</div>	
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template('standart_search_form.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>