	{section name=i loop=$grid_items}
		{if $grid_items[i].type_sh=='Продажа квартир'}
		{$a=1}
		{else if $grid_items[i].type_sh=='Аренда квартир'}
		{$a=2}
		{/if}
	{/section}
<div>
{if $a==1}
Продажа
     {include file="map-sell.tpl"}          
{/if}
{if $a==2}
Аренда
	{include file="map-arenda.tpl"}
{/if}
</div>