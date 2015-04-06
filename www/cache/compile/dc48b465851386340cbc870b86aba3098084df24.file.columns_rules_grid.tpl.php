<?php /* Smarty version Smarty-3.0.8, created on 2015-03-14 16:31:28
         compiled from "Z:/home/sever-arenda/www/apps/table/admin/template/columns_rules_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56515503f1e080b3d3-99473168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc48b465851386340cbc870b86aba3098084df24' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/table/admin/template/columns_rules_grid.tpl',
      1 => 1424158306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56515503f1e080b3d3-99473168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style>
.disabled td {
color: rgb(201, 201, 201);
font-style: italic;
}
</style>
<script>
$(document).ready(function(){
	$('.edit_total').change(function(){
		var group_id=$(this).attr('alt');
		if($(this).is(':checked')){
			$('.rules_table input[type=checkbox].edit_'+group_id).prop('checked', true);
		}else{
			$('.rules_table input[type=checkbox].edit_'+group_id).prop('checked', false);
		}
	});
	
	$('.view_total').change(function(){
		var group_id=$(this).attr('alt');
		if($(this).is(':checked')){
			$('.rules_table input[type=checkbox].view_'+group_id).prop('checked', true);
		}else{
			$('.rules_table input[type=checkbox].view_'+group_id).prop('checked', false);
		}
	});
	$('.save_rules').click(function(){
		var rules=[];
		$('.rules_table .rule').each(function(){
			var _this=$(this);
			var column_id=_this.attr('data-columnsid');
			var group_id=$(this).attr('data-groupid');
			var rule_type=_this.attr('data-ruletype');
			var name=_this.attr('name');
			//console.log(group_id);
			
			if(_this.is(':checked')){
				//var value=1;
				rules.push(name+'=1');
			}else{
				//var value=0;
				rules.push(name+'=0');
			}
			
			
		});
		
		var params=rules.join('&')
		$.ajax({
			url: estate_folder+'/apps/table/js/ajax.php?action=save_group_rules',
			type: 'post',
			data: params
		});
	});
	
});
</script>

<table class="table rules_table">
<thead>
	<tr>
		<th>ID</th>
		<th>Название</th>
		<th>Системное</th>
		<th>Тип</th>
		<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
		<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</th>
		<?php }} ?>
	</tr>
	<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
		<th><input type="checkbox" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" class="edit_total" /> Edit</th>
		<th><input type="checkbox" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" class="view_total" /> View</th>
		<?php }} ?>
	</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('columns')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value){
?>
<tr<?php if ($_smarty_tpl->tpl_vars['column']->value['active']==0){?> class="disabled"<?php }?>>
	<td><?php echo $_smarty_tpl->tpl_vars['column']->value['columns_id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['column']->value['title'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['column']->value['name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['column']->value['type'];?>
</td>
	<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
	<td><input type="checkbox" data-groupid="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-columnsid="<?php echo $_smarty_tpl->tpl_vars['column']->value['columns_id'];?>
" data-ruletype="edit" class="edit_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
 rule" name="rule[edit][<?php echo $_smarty_tpl->tpl_vars['column']->value['columns_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
]" value=""<?php if (isset($_smarty_tpl->getVariable('rules',null,true,false)->value['edit'][$_smarty_tpl->tpl_vars['column']->value['columns_id']][$_smarty_tpl->tpl_vars['group']->value['group_id']])&&$_smarty_tpl->getVariable('rules')->value['edit'][$_smarty_tpl->tpl_vars['column']->value['columns_id']][$_smarty_tpl->tpl_vars['group']->value['group_id']]==1){?> checked="checked"<?php }?> /></td>
	<td><input type="checkbox" data-groupid="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-columnsid="<?php echo $_smarty_tpl->tpl_vars['column']->value['columns_id'];?>
" data-ruletype="view" class="view_<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
 rule" name="rule[view][<?php echo $_smarty_tpl->tpl_vars['column']->value['columns_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
]" value=""<?php if (isset($_smarty_tpl->getVariable('rules',null,true,false)->value['view'][$_smarty_tpl->tpl_vars['column']->value['columns_id']][$_smarty_tpl->tpl_vars['group']->value['group_id']])&&$_smarty_tpl->getVariable('rules')->value['view'][$_smarty_tpl->tpl_vars['column']->value['columns_id']][$_smarty_tpl->tpl_vars['group']->value['group_id']]==1){?> checked="checked"<?php }?> /></td>
	<?php }} ?>
	
</tr>
<?php }} ?>
</table>
<button class="save_rules">SAVE</button>