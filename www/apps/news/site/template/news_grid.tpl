<link rel="stylesheet" href="{$estate_folder}/apps/news/site/template/css/style.css">
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
					<br>
						<div id="news" class="archive">
							{section name=i loop=$news}
							<div class="news">
						        <div class="temnyi">

						        	<div class="svetlyi"></div>
						        <div class="title"><a href="{$news[i].href}">{$news[i].title}</a></div>
						        
								{if $news[i].prev_img neq ''}
								<div class="image_news"><a href="{$news[i].href}"><img src="{$estate_folder}{$news[i].prev_img}" border="0" alt="{$news[i].title}" /></a></div>
								
								{/if}
								<div class="anons">{$news[i].anons}</div>

							</div>
							</div>
							<div class="clear"></div>
							<br>
							{/section}
							
						</div>	

						{if isset($news_paging)}
	
							{if $news_paging.pages|count>1}
							
								{foreach from=$news_paging.pages item=pager_page}
									{if $pager_page.current==1}
										{assign var=__curpagenr value=$pager_page.text}
									{/if}
								{/foreach}
								
								{if $__curpagenr-3<1}
									{assign var=__startnr value=1}
									{assign var=__leftsep value=0}
								{else}
									{assign var=__startnr value=$__curpagenr-3}
									{assign var=__leftsep value=1}
								{/if}
								
								{if $__curpagenr+3>$pager_array.pages|count}
									{assign var=__endnr value=$news_paging.pages|count}
									{assign var=__rightsep value=0}
								{else}
									{assign var=__endnr value=$__curpagenr+3}
									{assign var=__rightsep value=1}
								{/if}
								
								{if $news_paging.pages|count>1}
								<div class="pagination pagination-centered">
								<ul>
									<li><a href="{$news_paging.ppn.href}">&lsaquo;</a></li>
									{if $__leftsep==1}
									<li><a href="{$news_paging.pages[1].href}">{$news_paging.pages[1].text}</a></li>
									<li><a href="javascript:void(0);" class="selected">...</a></li>
									{/if}
									{foreach from=$news_paging.pages item=pager_page}
									{if $pager_page.text>=$__startnr && $pager_page.text<=$__endnr}
									<li{if $pager_page.current==1} class="active"{/if}><a href="{$pager_page.href}">{$pager_page.text}</a></li>
									{/if}
									{/foreach}
									{if $__rightsep==1}
									<li><a href="javascript:void(0);" class="selected">...</a></li>
									<li><a href="{$news_paging.pages[$news_paging.pages|count].href}">{$news_paging.pages[$news_paging.pages|count].text}</a></li>
									{/if}
									<li><a href="{$news_paging.npn.href}">&rsaquo;</a></li>
								</ul>
								</div>
								{/if}
							{/if}
						{elseif isset($pager)}
						<div class="pagination" align="center">
							<span class="pages">{$L_PAGE}:</span>
							{section name=j loop=$pager}
							
								{if $pager[j].current eq 1}
								<span class="current">{$pager[j].text}</span>
								{else}
									{if $pager[j].href neq ''}
									<a href="{$pager[j].href}">{$pager[j].text}</a>
									{else}
									<span>{$pager[j].text}</span>
									{/if}
								{/if}
							
							{/section}
						</div>
						{/if}

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
		<div class="clear"></div>	
</div>