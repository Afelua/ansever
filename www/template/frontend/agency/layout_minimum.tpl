
	<div id="content">
       {include file="top_fixed_menu.tpl.html"}
	
		<div id="lc_faq">
		
			<div id="faq_page">
			
			
            {if $is_account}
            <div class="account">
 
                <div class="clear"></div>
            	{if $main_file_tpl != ''}
				     <div class="clear"></div>
				    {include file="$main_file_tpl"}
				{else}
					{$main}
				{/if}
            </div>
            {else}			
					
				{if $main_file_tpl != ''}
				     <div class="clear"></div>
				    {include file="$main_file_tpl"}
				{else}
					{$main}
				{/if}
			{/if}

			{if is_faq}

			<section class="tabs">

				<input id="tab_1" type="radio" name="tab" checked="checked" />
				<input id="tab_2" type="radio" name="tab" />
				<input id="tab_3" type="radio" name="tab" />
	
				<div id="tabs_faq_all_label">
					<label for="tab_1" id="tab_l1" class="menu_tabs">Статьи</label>
					<label for="tab_2" id="tab_l2" class="menu_tabs" style="width: 300px;">Часто задаваемые вопросы</label>
					<label for="tab_3" id="tab_l3" class="menu_tabs">Новости</label>
				</div>
				<div style="clear:both"></div>

				<div class="tabs_cont">
					<div id="tab_c1">

					<div class="title_faq_label">Юридические вопросы</div>

					<div class="temnyi">
					ПЕРЕУСТУПКА прав требования.

					По мнению многих аналитиков, сегодня интерес к квартирам в новостройках значительно превышает интерес к предложениям вторничного рынка, особенно в активно растущем Санкт-Петербурге: по данным Росстата за минувший 2013 год в нашем городе было построено более 2,5 млн. кв. м. жилья. Но купить квартиру в строящемся доме можно не только у Застройщика. Бывают случаи, когда ему просто нечего предложить. Но это отнюдь не означает, что нет никаких шансов обзавестись квадратными метрами в понравившемся вам доме. Ведь желанная квартира может продаваться по договору Цессии.

  						<div class="svetlyi"></div>
						</div>

						<br><br><br>

					<div class="temnyi">
					ПЕРЕУСТУПКА прав требования.

					По мнению многих аналитиков, сегодня интерес к квартирам в новостройках значительно превышает интерес к предложениям вторничного рынка, особенно в активно растущем Санкт-Петербурге: по данным Росстата за минувший 2013 год в нашем городе было построено более 2,5 млн. кв. м. жилья. Но купить квартиру в строящемся доме можно не только у Застройщика. Бывают случаи, когда ему просто нечего предложить. Но это отнюдь не означает, что нет никаких шансов обзавестись квадратными метрами в понравившемся вам доме. Ведь желанная квартира может продаваться по договору Цессии.

  					<div class="svetlyi"></div>
					</div>

					</div>
					<div id="tab_c2">Часто задаваемые вопросы</div>
					<div id="tab_c3">Новости</div>


				</div>
				<div id="right2">  
					<div id="center_right2">   
                    {if is_faq}
                    <div id="faq_specialist">Наши специалисты</div>
					<img src="/img/naglya.jpg">

					<div style="padding-top:25px;">
					<a href="tel:+7 911 926 01 75" class="phone_faq">
					+7 911 926 01 75
					</a>
					</div>
					<div class="faq_list">
						<ul style="margin-left: 13px;">
						<li>Специалист по первичной недвижимости</li>
						<li>Специалист по договорам цессии</li>
						<li>Юридические консультации</li>
						<li>Осуществление подбора квартиры и сопровождения сделки</li>
						</ul>

					</div>
					{/if}
					<hr>

						<div id="news_column" style="background: none repeat scroll 0% 0% rgb(255, 255, 255); margin-bottom: 10px;">
						{include file="news_list_column.tpl"}
						</div>
				

					</div>  
                    </div>

			</section>


			{/if}


			</div>
			
			
			
		</div>
		<div id="rc">
		    {if $right_column != ''}
			     <div class="rcont">
			     {if $show_demo_banners == 1}   
				<div id="right2">
				    <div class="vk">							
					<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?22"></script>
					
					<!-- VK Widget -->
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

                    
                                
				</div>
			{/if}
			{if $is_account and $category_tree_account}
                 <div class="rcont">
                    <div id="right2">                           
                    
			     {$category_tree_account}
			     </div>
           		 </div>
			{/if}
		</div>
	
		<div class="clear"></div>
		</div>	
	{include file="footer.tpl"}	
	</div>