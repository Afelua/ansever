<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 02:36:32
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\standart_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146875537ea307a3ba3-03464783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c774932def8da723f8fc8394eab7fb390950f9' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\standart_search_form.tpl',
      1 => 1429727786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146875537ea307a3ba3-03464783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('street_list')->value!=''){?>
		<div class="search_cont">
			<?php if ($_smarty_tpl->getVariable('mysearch_on')->value==1){?>
				<?php if ($_smarty_tpl->getVariable('mysearch_save_form_file')->value!=''){?>
				<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('mysearch_save_form_file')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
				<?php }?>
			<?php }?>
			<div id="simple_search"<?php if (isset($_REQUEST['extended_search'])){?> style="display:none;"<?php }?>>
			<form method="get" action="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/index.php">
				<input type="hidden" name="extended_search" value="1" />
<table border="0" cellspacing="0" cellpadding="0" width="270">

<tr style="">
	<td colspan="4"><?php echo $_smarty_tpl->getVariable('structure_box')->value;?>
</td>
</tr>

<tr>
	<td height="5"></td>
</tr>

<tr>
<td style="width: 50%; vertical-align: top;">
<div>
 <a href="" class="spoiler_links search_list">Выбрать метро</a>
 <div class="spoiler_body">
<div class="select_box_td"><?php echo $_smarty_tpl->getVariable('metro_list')->value;?>
</div>
 </div>
</div>
</td>

<td style="width: 50%; vertical-align: top;">

<div>
 <a href="" class="spoiler_links search_list">Выбрать район</a>
 <div class="spoiler_body">
<div class="select_box_td"><?php echo $_smarty_tpl->getVariable('district_list')->value;?>
</div>
 </div>
</div>


</td>
</tr>

<tr>
	<td height="10"></td>
</tr>

<tr>
	<td colspan="2"> 
		<?php if (isset($_REQUEST['room_count'])&&is_array($_REQUEST['room_count'])){?>
			<input type="checkbox" name="room_count[]" value="1"<?php if (in_array(1,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 1 
			<input type="checkbox" name="room_count[]" value="2"<?php if (in_array(2,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 2 
			<input type="checkbox" name="room_count[]" value="3"<?php if (in_array(3,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 3 
			<input type="checkbox" name="room_count[]" value="4"<?php if (in_array(4,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 4+ 
		<?php }elseif(isset($_REQUEST['room_count'])){?>
			<input type="checkbox" name="room_count[]" value="1"<?php if ($_REQUEST['room_count']==1){?> checked="checked"<?php }?> /> 1 
			<input type="checkbox" name="room_count[]" value="2"<?php if ($_REQUEST['room_count']==2){?> checked="checked"<?php }?> /> 2 
			<input type="checkbox" name="room_count[]" value="3"<?php if ($_REQUEST['room_count']==3){?> checked="checked"<?php }?> /> 3 
			<input type="checkbox" name="room_count[]" value="4"<?php if ($_REQUEST['room_count']>3){?> checked="checked"<?php }?> /> 4+ 
		<?php }else{ ?>
			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="1" /> 1 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="2" /> 2 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="3" /> 3 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="4" /> 4+ комнат
			</span>
		<?php }?>
	</td>
</tr>

<tr>
	<td height="15"></td>
</tr>


<tr>
	<td colspan="2">
	<?php echo $_smarty_tpl->getVariable('L_PRICE')->value;?>
:&nbsp;<?php echo $_smarty_tpl->getVariable('L_FROM')->value;?>
&nbsp;
		<span class="select_box_td"><input type="text" class="price_from price_field" name="price_min" value="<?php if (isset($_smarty_tpl->getVariable('price_min',null,true,false)->value)){?><?php echo number_format($_smarty_tpl->getVariable('price_min')->value,0,'',' ');?>
<?php }else{ ?>0<?php }?>"/></span>
    &nbsp;<?php echo $_smarty_tpl->getVariable('L_TO')->value;?>
&nbsp;
	<span class="select_box_td"><input type="text" class="price_for price_field" name="price" value="<?php if (isset($_smarty_tpl->getVariable('price',null,true,false)->value)&&$_smarty_tpl->getVariable('price')->value!=0){?><?php echo number_format($_smarty_tpl->getVariable('price')->value,0,'',' ');?>
<?php }else{ ?><?php echo number_format($_smarty_tpl->getVariable('max_price')->value,0,'',' ');?>
<?php }?>"/></span>
	&nbsp; тыс. р.
	</td>
</tr>
<tr>
    <td class="slider_block" colspan="4"><div class="slider"></div></td>
</tr>
<tr>
	<td class="sch_button" colspan="2"><input type="submit" name="search" value="Подобрать"  class="btn btn-primary" /></td>
</tr>
<tr>
	<td colspan="2">
		<hr class="search_hr">
	</td>
</tr>

</table>
</form>
</div>



<div id="extended_search"<?php if (!isset($_REQUEST['extended_search'])){?> style="display:none;"<?php }?>>
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/index.php">
	<input type="hidden" name="extended_search" value="1" />
	<table border="0" cellspacing="0" cellpadding="0" width="500">
	<tbody>
	<tr>
    <td colspan="4" style="display:none"><?php echo $_smarty_tpl->getVariable('structure_box')->value;?>
</td>
	</tr>

	<tr>
	<td height="5"></td>
	</tr>

	<tr>
		<td style="width: 50%; vertical-align: top;">
			<div>
 			<a href="" class="spoiler_links search_list">Выбрать метро</a>
 			<div class="spoiler_body">
			<div class="select_box_td"><?php echo $_smarty_tpl->getVariable('metro_list')->value;?>
</div>
 			</div>
			</div>
		</td>

		<td style="width: 50%; vertical-align: top;">
			<div>
			<a href="" class="spoiler_links search_list">Выбрать район</a>
			<div class="spoiler_body">
			<div class="select_box_td"><?php echo $_smarty_tpl->getVariable('district_list')->value;?>
</div>
 			</div>
			</div>
		</td>
	</tr>

	<tr>
	<td height="10"></td>
	</tr>

	<tr>
	<td colspan="2"> 
		<?php if (isset($_REQUEST['room_count'])&&is_array($_REQUEST['room_count'])){?>
			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="1"<?php if (in_array(1,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 1 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="2"<?php if (in_array(2,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 2 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="3"<?php if (in_array(3,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 3 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="4"<?php if (in_array(4,$_REQUEST['room_count'])){?> checked="checked"<?php }?> /> 4+ 
			</span>


		<?php }elseif(isset($_REQUEST['room_count'])){?>
			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="1"<?php if ($_REQUEST['room_count']==1){?> checked="checked"<?php }?> /> 1 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="2"<?php if ($_REQUEST['room_count']==2){?> checked="checked"<?php }?> /> 2 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="3"<?php if ($_REQUEST['room_count']==3){?> checked="checked"<?php }?> /> 3 
			</span>,

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="4"<?php if ($_REQUEST['room_count']>3){?> checked="checked"<?php }?> /> 4+ 
			</span>
		<?php }else{ ?>
			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="1" /> 1 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="2" /> 2 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="3" /> 3 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="4" /> 4+ комнат
			</span>
		<?php }?>
	</td>
	</tr>

	<tr>
	<td height="15"></td>
</tr>


<tr>
	<td colspan="2">
	<?php echo $_smarty_tpl->getVariable('L_PRICE')->value;?>
:&nbsp;<?php echo $_smarty_tpl->getVariable('L_FROM')->value;?>
&nbsp;
		<span class="select_box_td"><input type="text" class="price_from price_field" name="price_min" value="<?php if (isset($_smarty_tpl->getVariable('price_min',null,true,false)->value)){?><?php echo number_format($_smarty_tpl->getVariable('price_min')->value,0,'',' ');?>
<?php }else{ ?>0<?php }?>"/></span>
    &nbsp;<?php echo $_smarty_tpl->getVariable('L_TO')->value;?>
&nbsp;
	<span class="select_box_td"><input type="text" class="price_for price_field" name="price" value="<?php if (isset($_smarty_tpl->getVariable('price',null,true,false)->value)&&$_smarty_tpl->getVariable('price')->value!=0){?><?php echo number_format($_smarty_tpl->getVariable('price')->value,0,'',' ');?>
<?php }else{ ?><?php echo number_format($_smarty_tpl->getVariable('max_price')->value,0,'',' ');?>
<?php }?>"/></span>
	&nbsp; тыс. р.
	</td>
</tr>
<tr>
    <td class="slider_block" colspan="4"><div class="slider"></div></td>
</tr>
<tr>
	<td class="sch_button" colspan="2"><input type="submit" name="search" value="Подобрать"  class="btn btn-primary" /></td>
</tr>
<tr>
	<td colspan="2">
		<hr class="search_hr">
	</td>
</tr>

</table>

</form>
</div>
</div>

<?php }?>
