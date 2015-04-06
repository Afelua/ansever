<div id="content">
            {include file="top_fixed_menu.tpl.html"}
    

		<div class="maincontent">

			{if $geodata_on_home}

			<img src="/img/slider2.jpg">

			<div class="special"> 
			<table width="100%">
			<tr>
				<td>
				<img src="/img/check.png" style="float:left;">
				</td>
				<td width="80%">
				
				<div class="hotspecial">
				
				<b>СРОЧНО!</b><br>
				Сдается 3 к.кв. м. Коменданский пр. Авиаконструкторов д.3 Общая пл. 106 метров. 35 000 руб./мес.

				</div>
				</td>
				<td width="20%">
				<span>
				<a href="" class="showall">ПОДРОБНЕЕ</a>
				</span>
				</td>


			</tr>
			</table>
			</div>
			<br><br>
			<table>
			<tr>
			<td width="254px">
			<span class="nameSpecial">Лучшие предложения.</span>
			</td>
			<td width="400px">
			<span class="nameBig">Аренда</span>
			</td>
			<td width="270px" style="text-align: center;">
			<span class="allview"><a href="">Смотреть все предложения </a></span>
			</td>
			</tr>
			</table>
				<div id="tabs-services-special">{$L_TABS_SPECIAL}</div>
                
            <div class="clear"></div>
            <br><br><br>
            <table>
			<tr>
			<td width="254px">
			<span class="nameSpecial">Лучшие предложения.</span>
			</td>
			<td width="400px">
			<span class="nameBig">Продажа</span>
			</td>
			<td width="270px" style="text-align: center;">
			<span class="allview"><a href="">Смотреть все предложения </a></span>
			</td>
			</tr>
			</table>
				<div id="tabs-services-special2">{$L_TABS_SPECIAL}</div>
						<table>
				<tr>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>									
				</tr>
				<tr>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>									
				</tr>

			</table>
		</div>
			{else}
			
				{if $main_file_tpl != ''}
				     <div class="clear"></div>
				    {include file="$main_file_tpl"}
				{else}
					{$main}
				{/if}

			{/if}
			<div class="clear"></div>
			<br><br>



<!-- 		<div id="rc">
		    {if $right_column != ''}
			     <div class="rcont">
			     {if $show_demo_banners == 1}
				<div id="right2">
				<p align="center">
	<a href="https://play.google.com/store/apps/details?id=ru.sitebill.mobilecms" target="_blank">Скачать мобильное приложение Sitebill</a> <a href="https://play.google.com/store/apps/details?id=ru.sitebill.mobilecms" target="_blank"><img height="43" src="http://www.sitebill.ru/storage/img/android.png" width="143" /></a></p>
				</div>
			     
			        
				<div id="right2">
				    <div class="vk">							
					<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?22"></script>
					
				
					<div id="vk_groups"></div>
					<script type="text/javascript">
					{literal}
					VK.Widgets.Group("vk_groups", {mode: 0, width: "229", height: "190"}, 25347835);
					{/literal}
					</script>
					<br> 
					</div>
				</div>
				{/if}
                    <div id="right2">                           
						<div id="news_column">
						{include file="news_list_column.tpl"}
						</div>
					{include file="right_special.tpl"}
					
                        <div id="news_column">
            {$apps_pages_column}
                        </div>
					
                    </div>
                    
                                
				</div>
			{/if}
			{if $is_account and $category_tree_account}
                 <div class="rcont">
                    <div id="right2">                           
                    
			     {$category_tree_account}
			     </div>
           		 </div>
			{/if}
		</div> -->
		<div class="clear"></div>
	</div>	
{include file="footer.tpl"}	
