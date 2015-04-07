<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 15:47:51
         compiled from "Z:/home/anseverv2/www/apps/admin/admin/template/realty_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2029855238ba7d877d2-19845891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b2d81a98204503e5be7864622fd72cd58edcbf' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/admin/admin/template/realty_grid.tpl',
      1 => 1427881106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029855238ba7d877d2-19845891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script type="text/javascript">
$(document).ready(function(){

	$('.go_up').click(function(){
		var id=$(this).attr('alt');
		var tr=$(this).parents('tr').eq(0);
		$.getJSON(estate_folder+'/js/ajax.php?action=go_up&id='+id,{},function(data){
			if(data.response.body!=''){
				tr.find('td').eq(1).html(data.response.body);
				tr.parents('table').eq(0).find('tr.row3').eq(0).before(tr);
			}
		});
	});


	$('#search_toggle').click(function(){
		$('#search_form_block').toggle();
        $('#srch_date_from').datepicker({dateFormat:'yy-mm-dd'});
        $('#srch_date_to').datepicker({dateFormat:'yy-mm-dd'});
		
	});
	
	$('#reset').click(function(){
		$(this).parents('form').eq(0).find('input[type=text]').each(function(){
			this.value='';
		});
		$(this).parents('form').eq(0).find('input[type=checkbox]').each(function(){
			this.checked=false;
		});
		$(this).parents('form').submit();
	});
	
	
	$('#grid_control_panel select[name=cp_optype]').change(function(){
		var operation=$(this).val();
		if(operation!=''){
			$.ajax({
				url: estate_folder+'/js/ajax.php',
				data: {action: 'get_form_element',element:operation},
				dataType: 'html',
				success: function(html){
					$('#grid_control_panel_content').html(html);
					$('#grid_control_panel button#run').show();
				}
			});
		}
	});
	
	$('#grid_control_panel button#run').click(function(){
		var cp=$('#grid_control_panel');
		var action=$(this).attr('alt');
		var operation=cp.find('select[name=cp_optype]').val();
		
		if(operation!=''){
			var field=null;
			if(cp.find('#grid_control_panel_content select').length!=0){
				var field=cp.find('#grid_control_panel_content select');
			}else if(cp.find('#grid_control_panel_content input').length!=0){
				var field=cp.find('#grid_control_panel_content input');
				if(field.attr('type')=='checkbox' && field.is(':checked')){
					field.val('1');
				}
			}
			if(field!==null){
				var cat_id=field.val();
			}
			var checked=[];
			$('.grid_check_one:checked').each(function(){
				checked.push(this.value);
			});
			if(checked.length>0){
				window.location.replace(estate_folder+'/admin/index.php?action='+action+'&do=change_param&new_param_value='+cat_id+'&param_name='+operation+'&ids='+checked.join(','));
			}
		}
		return false;
	});
	
	$('.batch_update').click(function(){
		var ids=[];
		var action=$(this).attr('alt');
		$(this).parents('table').eq(0).find('input.grid_check_one:checked').each(function(){
			ids.push($(this).val());
		});
		window.location.replace(estate_folder+'/admin/index.php?action='+action+'&do=batch_update&batch_ids='+ids.join(','));
	});
	
	$('.duplicate').click(function(e){
		e.preventDefault();
		var ids=[];
		var action=$(this).attr('alt');
		$(this).parents('table').eq(0).find('input.grid_check_one:checked').each(function(){
			ids.push($(this).val());
		});
		if(ids.length>0){
			if(confirm("Дублировать с картинками?")){
				window.location.replace(estate_folder+'/admin/index.php?action='+action+'&do=duplicate&duplicate_images=1&ids='+ids.join(','));
			}else{
				window.location.replace(estate_folder+'/admin/index.php?action='+action+'&do=duplicate&ids='+ids.join(','));
			}
		}
	});
	
	$('.userinfo_tooltipe_block').bind({
		 mouseenter: function(e) {
			var ex=$(this);
			var id=ex.attr('data-user-id');
			var d='info '+id;
			if(id!=0){
				$.ajax({
					/*cache: false,*/
					url: estate_folder+'/js/ajax.php',
					data: {action: 'get_user_info', user_id: id},
					type: 'post',
					dataType: 'html',
					success: function(html){
						ex.popover({content: html}).popover('show');	
					}
				});
			}
		},
		mouseleave: function(e) {
			var ex=$(this);
			ex.popover('hide');
		}
	});
	
	$(document).on('click', '.item-on', function(e){
		e.preventDefault();
		var _this=$(this);
		var id=_this.attr('alt');
		
		$.ajax({
			url: estate_folder+'/js/ajax.php',
			data: {action: 'set_realty_status', status: 1, id: id},
			type: 'post',
			dataType: 'text',
			success: function(text){
				if(text=='OK'){
					_this.removeClass('item-on').removeClass('btn-danger').addClass('item-off').addClass('btn-success');
					_this.parents('.item').eq(0).removeClass('notactive');
				}
			}
		});
	});
	
	$(document).on('click', '.item-off', function(e){
		e.preventDefault();
		var _this=$(this);
		var id=_this.attr('alt');
		
		$.ajax({
			url: estate_folder+'/js/ajax.php',
			data: {action: 'set_realty_status', status: 0, id: id},
			type: 'post',
			dataType: 'text',
			success: function(text){
				if(text=='OK'){
					_this.removeClass('item-off').removeClass('btn-success').addClass('item-on').addClass('btn-danger');
					_this.parents('.item').eq(0).addClass('notactive');
				}
			}
		});
	});
	$('[data-rel=tooltip]').tooltip();
	
});
	
</script>

<style>
.user_info {
	width: 300px;
	overflow: hidden;
}

.user_info .user_info_media {
	float: left;
	margin: 5px;
}
.user_info img {
	width: 70px;
}
.user_info .user_info_data {
	width: 200px;
	float: right;
	margin: 5px;
}
.user_info_data_title {
	display: block;
	font-weight: bold;
	margin-bottom: 10px;
}
.notactive {
	color: red;
}
a.additionalsearchlink {
	color: black;
	font-size: 11px;
}
</style>


<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
    	<a class="brand" href="#">Найдено: <?php echo $_smarty_tpl->getVariable('_total_records')->value;?>
</a>
    	

		<div class="nav pull-right">
		
<?php if ($_smarty_tpl->getVariable('admin')->value!=''){?>
<div align="right"><a href="#search" id="search_toggle" class="btn btn-info"><i class="icon-white icon-search"></i> <?php echo $_smarty_tpl->getVariable('L_ADVSEARCH')->value;?>
</a></div>

<div id="search_form_block" <?php if ($_REQUEST['submit_search_form_block']==''){?>style="display:none;"<?php }?> class="spacer-top">
<form class="form-horizontal" action="?action=data" method="get">
	<div class="control-group">
		<label class="control-label"><?php echo $_smarty_tpl->getVariable('L_WORD')->value;?>
</label>
		<div class="controls">
			<input type="text" name="srch_word" value="<?php echo $_REQUEST['srch_word'];?>
" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"><?php echo $_smarty_tpl->getVariable('L_PHONE')->value;?>
</label>
		<div class="controls">
			<input type="text" name="srch_phone" value="<?php echo $_REQUEST['srch_phone'];?>
" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"><?php echo $_smarty_tpl->getVariable('L_ID')->value;?>
</label>
		<div class="controls">
			<input type="text" name="srch_id" value="<?php echo $_REQUEST['srch_id'];?>
" />
		</div>
	</div>
	<!-- 
	<div class="control-group">
		<label class="control-label">Только экспорт в ЦИАН</label>
		<div class="controls">
			<input type="checkbox" name="srch_export_cian" <?php if (isset($_REQUEST['srch_export_cian'])&&($_REQUEST['srch_export_cian']=='on'||$_REQUEST['srch_export_cian']=='1')){?> checked="checked"<?php }?> />
		</div>
	</div>
	  -->
	<?php if ($_smarty_tpl->getVariable('show_uniq_id')->value){?>
	<div class="control-group">
		<label class="control-label">UNIQ_ID</label>
		<div class="controls">
			<input type="text" name="uniq_id" value="<?php echo $_REQUEST['uniq_id'];?>
" />
		</div>
	</div>
	<?php }?>
	<div class="control-group">
		<label class="control-label"><?php echo $_smarty_tpl->getVariable('L_DATE')->value;?>
 <?php echo $_smarty_tpl->getVariable('L_FROM')->value;?>
</label>
		<div class="controls">
			<input type="text" name="srch_date_from" id="srch_date_from" value="<?php echo $_REQUEST['srch_date_from'];?>
" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"><?php echo $_smarty_tpl->getVariable('L_DATE')->value;?>
 <?php echo $_smarty_tpl->getVariable('L_TO')->value;?>
</label>
		<div class="controls">
			<input type="text" name="srch_date_to" id="srch_date_to" value="<?php echo $_REQUEST['srch_date_to'];?>
" />
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit_search_form_block" value="<?php echo $_smarty_tpl->getVariable('L_GO_FIND')->value;?>
" class="btn btn-primary" />
			<input type="button" id="reset" value="<?php echo $_smarty_tpl->getVariable('L_RESET')->value;?>
" class="btn btn-warning" /></td></tr>
		</div>
	</div>
	
</form>




</div>

</div>


<?php }?>
		
</div>
</div>
</div>



		
		
		

		
<table class="table table-hover" cellspacing="2" cellpadding="2">
	<tr  class="row_head">
		<td width="1%" class="row_title"><input type="checkbox" class="grid_check_all" /></td>
		<td width="1%" class="row_title"><?php echo $_smarty_tpl->getVariable('L_ID')->value;?>
</td>
		<?php if ($_smarty_tpl->getVariable('show_uniq_id')->value){?>
		<td width="1%" class="row_title">UNIQ_ID</td>
		<?php }?>
		
		<td width="1%" class="row_title"><?php echo $_smarty_tpl->getVariable('L_DATE')->value;?>
</td>
		<td width="70" class="row_title"><?php echo $_smarty_tpl->getVariable('L_TYPE')->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=type&asc=asc">&darr;</a>&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=type&asc=desc">&uarr;</a></td>
		<td width=13% class="row_title"><?php echo $_smarty_tpl->getVariable('L_CITY')->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=city&asc=asc">&darr;</a>&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=city&asc=desc">&uarr;</a></td>
		<td width=13% class="row_title"><?php echo $_smarty_tpl->getVariable('L_DISTRICT')->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=district&asc=asc">&darr;</a>&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=district&asc=desc">&uarr;</a></td>
		<td width=13% class="row_title"><?php echo $_smarty_tpl->getVariable('L_STREET')->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=street&asc=asc">&darr;</a>&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=street&asc=desc">&uarr;</a></td>
        <td width=13% class="row_title">Дом</td>
		<td class="row_title"><?php echo $_smarty_tpl->getVariable('L_PRICE')->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=price&asc=asc">&darr;</a>&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
&order=price&asc=desc">&uarr;</a></td>
		<?php if ($_smarty_tpl->getVariable('grid_items')->value[0]['company']!=''){?>
		<td class="row_title"><?php echo $_smarty_tpl->getVariable('L_COMPANY')->value;?>
</td>
		<?php }else{ ?>
        <td class="row_title"><?php echo $_smarty_tpl->getVariable('L_USER')->value;?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('admin')->value!=''){?>
		<td class="row_title"></td>
		<?php }?>
	</tr>
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

	<tr valign="top" class="item <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hot']){?>row3hot<?php }else{ ?>row3<?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']==0){?> notactive<?php }?>" <?php if ($_smarty_tpl->getVariable('admin')->value==''){?>	onClick="document.location='<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/realty<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html'" <?php }?>>
		<td>
			<input type="checkbox" class="grid_check_one" value="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" />
        	<?php if (isset($_smarty_tpl->getVariable('grid_items',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['geo_lat'])&&isset($_smarty_tpl->getVariable('grid_items',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['geo_lng'])&&$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['geo_lat']!=''&&$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['geo_lng']!=''){?><i class="icon-globe"></i><?php }?></td>
		</td>
		<td>
			<b><a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/realty<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html"><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</a></b> 
	        <?php if (isset($_smarty_tpl->getVariable('grid_items',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['img'])&&$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['img']!=''){?> 
	        <a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/realty<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html">
	        	<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['img'][0]['preview'];?>
" width="50" class="prv">
	        </a>
	        <?php }?>
		
		<?php if ($_smarty_tpl->getVariable('show_uniq_id')->value){?>
		<td><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['uniq_id'];?>
</td>
		<?php }?>
		
		<td><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</td>
		<td><b><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_sh'];?>
</b></td>
		<td>
			<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city_id']!=0){?>
        	<a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=data&city_id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city_id'];?>
" data-rel="tooltip" title="Показать все объявления для <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
"><i class="icon-white icon-filter"></i></a>
			<?php }?>
			<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>

		</td>
		<td>
			<span class="user-info">
			<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district_id']!=0){?>
        	<a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=data&district_id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district_id'];?>
" data-rel="tooltip" title="Показать все объявления для <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
"><i class="icon-white icon-filter"></i></a>
			<?php }?>
			<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
</span>
		</td>
		<td>
			<span class="user-info">
			<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street_id']!=0){?>
        	<a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=data&street_id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street_id'];?>
" data-rel="tooltip" title="Показать все объявления для <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
"><i class="icon-white icon-filter"></i></a>
			<?php }?>
			<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
</span>
		</td>
        <td><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number'];?>
</td>
		<td nowrap><b><?php echo number_format($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'],0,'',' ');?>
</b></td>
		<td>
		<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['company']!=''){?>
		<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['company'];?>

		<?php }else{ ?>
		
        	<a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=data&user_id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
" data-rel="tooltip" title="Показать все объявления для <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user'];?>
"><i class="icon-white icon-filter"></i></a>
        	<a href="javascript:void(0);" rel="popover" class="userinfo_tooltipe_block" data-html="true" data-placement="left" data-user-id="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
"><span class="user-info"><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user'];?>
</span></a>
		<?php }?>
		</td>
		<?php if ($_smarty_tpl->getVariable('admin')->value!=''){?>
		<td nowrap>
		
		<div class="btn-group">
<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
Еще
<span class="caret"></span>
</a>
<ul class="dropdown-menu">
	<li><a href="#" alt="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" title="Активация" class="btn <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']==0){?>item-on btn-danger<?php }else{ ?>item-off btn-success<?php }?>"><i class="icon-white icon-off"></i> Активность</a></li>
	<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active']==1){?>
	<li><a title="На сайте" href="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
" target="_blank" class="btn btn-success"><i class="icon-white icon-forward"></i> На сайте</a></li>
	<?php }?>
	<?php if (isset($_smarty_tpl->getVariable('show_contacts_enable',null,true,false)->value)&&$_smarty_tpl->getVariable('show_contacts_enable')->value){?>
			
			<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['show_contact']==0){?>
				<li><img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/contact_delete_16x16.gif" alt="<?php echo $_smarty_tpl->getVariable('L_CONTACTS_ARE_HIDE')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('L_CONTACTS_ARE_HIDE')->value;?>
" border="0" width="16" height="16" /></li>
			<?php }else{ ?>
				<li><img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/contact-new.png" alt="<?php echo $_smarty_tpl->getVariable('L_CONTACTS_ARE_SHOWED')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('L_CONTACTS_ARE_SHOWED')->value;?>
" border="0" width="16" height="16" /></li>
			<?php }?>
		
		<?php }?>
		<?php if (isset($_smarty_tpl->getVariable('sms_enable',null,true,false)->value)&&$_smarty_tpl->getVariable('sms_enable')->value){?>
		<li><a class="btn btn-success" onclick="return confirm('{$L_MESSAGE_REALLY_WANT_SMS}');" href="<?php echo $_smarty_tpl->getVariable('estate_folder_control')->value;?>
?do=structure&subdo=sms&id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/sms16x16.png" alt="<?php echo $_smarty_tpl->getVariable('L_SENDSMS_LC')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('L_SENDSMS_LC')->value;?>
" border="0" width="16" height="16" /> SMS</a></li>
		<?php }?>
		<?php if (isset($_smarty_tpl->getVariable('show_up_icon',null,true,false)->value)&&$_smarty_tpl->getVariable('show_up_icon')->value){?>
		
		<a class="btn btn-warning go_up" alt="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" href="#grow_up"><i class="icon-white icon-circle-arrow-up"></i></a>
		<?php }?>
</ul>
</div>
<div class="btn-group">
 <a title="Редактировать" href="<?php echo $_smarty_tpl->getVariable('estate_folder_control')->value;?>
?do=edit&id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" class="btn btn-info"><i class="icon-white icon-pencil"></i></a></li>
			<a title="Удалить" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('L_MESSAGE_REALLY_WANT_DELETE')->value;?>
');" href="<?php echo $_smarty_tpl->getVariable('estate_folder_control')->value;?>
?<?php if ($_smarty_tpl->getVariable('topic_id')->value!=''){?>topic_id=<?php echo $_smarty_tpl->getVariable('topic_id')->value;?>
&<?php }?>do=delete&id=<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" class="btn btn-danger"><i class="icon-white icon-remove"></i></a></li>
		
</div>
			
		
		</td>
		<?php }?>
	</tr>
	<?php endfor; endif; ?>
	<tr>
		<td colspan="14">
			<button alt="data" class="delete_checked btn btn-danger"><i class="icon-white icon-remove"></i> <?php echo $_smarty_tpl->getVariable('L_DELETE_CHECKED')->value;?>
</button> 
			<button alt="data" class="batch_update btn btn-inverse"><i class="icon-white icon-th"></i> Пакетная обработка</button> 
			<button alt="data" class="duplicate btn btn-inverse"><i class="icon-white icon-th"></i> Дублировать</button>
		</td>
	</tr>
	<?php if ($_smarty_tpl->getVariable('pager')->value!=''){?>
	<tr>
		<td colspan="14" class="pager"><div align="center"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div></td>
	</tr>
	<?php }?>
</table>