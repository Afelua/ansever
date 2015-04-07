<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 15:56:35
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\layout_minimum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2183755238db3697bf1-61355519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf52c5e62367314f67710918d6c962f1485eba14' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\layout_minimum.tpl',
      1 => 1427836440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183755238db3697bf1-61355519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<div id="content">
       <?php $_template = new Smarty_Internal_Template("top_fixed_menu.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	
		<div id="lc_faq">
		
			<div id="faq_page">
			
			
            <?php if ($_smarty_tpl->getVariable('is_account')->value){?>
            <div class="account">
 
                <div class="clear"></div>
            	<?php if ($_smarty_tpl->getVariable('main_file_tpl')->value!=''){?>
				     <div class="clear"></div>
				    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('main_file_tpl')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('main')->value;?>

				<?php }?>
            </div>
            <?php }else{ ?>			
					
				<?php if ($_smarty_tpl->getVariable('main_file_tpl')->value!=''){?>
				     <div class="clear"></div>
				    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('main_file_tpl')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('main')->value;?>

				<?php }?>
			<?php }?>

			<?php if ('is_faq'){?>

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
                    <?php if ('is_faq'){?>
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
					<?php }?>
					<hr>

						<div id="news_column" style="background: none repeat scroll 0% 0% rgb(255, 255, 255); margin-bottom: 10px;">
						<?php $_template = new Smarty_Internal_Template("news_list_column.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
						</div>
				

					</div>  
                    </div>

			</section>


			<?php }?>


			</div>
			
			
			
		</div>
		<div id="rc">
		    <?php if ($_smarty_tpl->getVariable('right_column')->value!=''){?>
			     <div class="rcont">
			     <?php if ($_smarty_tpl->getVariable('show_demo_banners')->value==1){?>   
				<div id="right2">
				    <div class="vk">							
					<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?22"></script>
					
					<!-- VK Widget -->
					<div id="vk_groups"></div>
					<script type="text/javascript">
					
					VK.Widgets.Group("vk_groups", {mode: 0, width: "229", height: "190"}, 25347835);
					
					</script>
					<br> 
					</div>
				</div>
				<?php }?>

                    
                                
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('is_account')->value&&$_smarty_tpl->getVariable('category_tree_account')->value){?>
                 <div class="rcont">
                    <div id="right2">                           
                    
			     <?php echo $_smarty_tpl->getVariable('category_tree_account')->value;?>

			     </div>
           		 </div>
			<?php }?>
		</div>
	
		<div class="clear"></div>
		</div>	
	<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>	
	</div>