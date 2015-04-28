{if $street_list ne ''}
		<div class="search_cont">
			{if $mysearch_on==1}
				{if $mysearch_save_form_file ne ''}
				{include file=$mysearch_save_form_file}
				{/if}
			{/if}
			<div id="simple_search"{if isset($smarty.request.extended_search)} style="display:none;"{/if}>
			<form method="get" action="{$estate_folder}/index.php">
				<input type="hidden" name="extended_search" value="1" />
<table border="0" cellspacing="0" cellpadding="0" width="270">

<!--tr style="">
	<td colspan="4">{$structure_box}</td>
</tr-->

<tr>
	<td height="5"></td>
</tr>

<tr>
<td style="width: 50%; vertical-align: top;">
<div>
 <a href="" class="spoiler_links search_list">Выбрать метро</a>
 <div class="spoiler_body">
<div class="select_box_td">{$metro_list}</div>
 </div>
</div>
</td>

<td style="width: 50%; vertical-align: top;">

<div>
 <a href="" class="spoiler_links search_list">Выбрать район</a>
 <div class="spoiler_body">
<div class="select_box_td">{$district_list}</div>
 </div>
</div>


</td>
</tr>

<tr>
	<td height="10"></td>
</tr>

<tr>
	<td colspan="2"> 
		{if isset($smarty.request.room_count) && is_array($smarty.request.room_count)}
			<input type="checkbox" name="room_count[]" value="1"{if in_array(1,$smarty.request.room_count)} checked="checked"{/if} /> 1 
			<input type="checkbox" name="room_count[]" value="2"{if in_array(2,$smarty.request.room_count)} checked="checked"{/if} /> 2 
			<input type="checkbox" name="room_count[]" value="3"{if in_array(3,$smarty.request.room_count)} checked="checked"{/if} /> 3 
			<input type="checkbox" name="room_count[]" value="4"{if in_array(4,$smarty.request.room_count)} checked="checked"{/if} /> 4+ 
		{else if isset($smarty.request.room_count)}
			<input type="checkbox" name="room_count[]" value="1"{if $smarty.request.room_count==1} checked="checked"{/if} /> 1 
			<input type="checkbox" name="room_count[]" value="2"{if $smarty.request.room_count==2} checked="checked"{/if} /> 2 
			<input type="checkbox" name="room_count[]" value="3"{if $smarty.request.room_count==3} checked="checked"{/if} /> 3 
			<input type="checkbox" name="room_count[]" value="4"{if $smarty.request.room_count>3} checked="checked"{/if} /> 4+ 
		{else}
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
		{/if}
	</td>
</tr>

<tr>
	<td height="15"></td>
</tr>


<tr>
	<td colspan="2">
	{$L_PRICE}:&nbsp;{$L_FROM}&nbsp;
		<span class="select_box_td"><input type="text" class="price_from price_field" name="price_min" value="{if isset($price_min)}{$price_min|number_format:0:'':' '}{else}0{/if}"/></span>
    &nbsp;{$L_TO}&nbsp;
	<span class="select_box_td"><input type="text" class="price_for price_field" name="price" value="{if isset($price) && $price!=0}{$price|number_format:0:'':' '}{else}{$max_price|number_format:0:'':' '}{/if}"/></span>
	&nbsp; р.
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



<div id="extended_search"{if !isset($smarty.request.extended_search)} style="display:none;"{/if}>
	<form method="get" action="{$estate_folder}/index.php">
	<input type="hidden" name="extended_search" value="1" />
	<table border="0" cellspacing="0" cellpadding="0" width="500">
	<tbody>
	<tr>
    <td colspan="4" style="display:none">{$structure_box}</td>
	</tr>

	<tr>
	<td height="5"></td>
	</tr>

	<tr>
		<td style="width: 50%; vertical-align: top;">
			<div>
 			<a href="" class="spoiler_links search_list">Выбрать метро</a>
 			<div class="spoiler_body">
			<div class="select_box_td">{$metro_list}</div>
 			</div>
			</div>
		</td>

		<td style="width: 50%; vertical-align: top;">
			<div>
			<a href="" class="spoiler_links search_list">Выбрать район</a>
			<div class="spoiler_body">
			<div class="select_box_td">{$district_list}</div>
 			</div>
			</div>
		</td>
	</tr>

	<tr>
	<td height="10"></td>
	</tr>

	<tr>
	<td colspan="2"> 
		{if isset($smarty.request.room_count) && is_array($smarty.request.room_count)}
			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="1"{if in_array(1,$smarty.request.room_count)} checked="checked"{/if} /> 1 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="2"{if in_array(2,$smarty.request.room_count)} checked="checked"{/if} /> 2 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="3"{if in_array(3,$smarty.request.room_count)} checked="checked"{/if} /> 3 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="4"{if in_array(4,$smarty.request.room_count)} checked="checked"{/if} /> 4+ 
			</span>


		{else if isset($smarty.request.room_count)}
			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="1"{if $smarty.request.room_count==1} checked="checked"{/if} /> 1 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="2"{if $smarty.request.room_count==2} checked="checked"{/if} /> 2 
			</span>

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="3"{if $smarty.request.room_count==3} checked="checked"{/if} /> 3 
			</span>,

			<span class="room_count">
			<input type="checkbox" name="room_count[]" value="4"{if $smarty.request.room_count>3} checked="checked"{/if} /> 4+ 
			</span>
		{else}
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
		{/if}
	</td>
	</tr>

	<tr>
	<td height="15"></td>
</tr>


<tr>
	<td colspan="2">
	{$L_PRICE}:&nbsp;{$L_FROM}&nbsp;
		<span class="select_box_td"><input type="text" class="price_from price_field" name="price_min" value="{if isset($price_min)}{$price_min|number_format:0:'':' '}{else}0{/if}"/></span>
    &nbsp;{$L_TO}&nbsp;
	<span class="select_box_td"><input type="text" class="price_for price_field" name="price" value="{if isset($price) && $price!=0}{$price|number_format:0:'':' '}{else}{$max_price|number_format:0:'':' '}{/if}"/></span>
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

{/if}
