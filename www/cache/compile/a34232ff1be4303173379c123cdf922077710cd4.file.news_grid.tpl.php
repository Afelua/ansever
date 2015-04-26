<?php /* Smarty version Smarty-3.0.8, created on 2015-04-26 01:13:27
         compiled from "Z:/home/anseverv2/www/apps/news/site/template/news_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:588553bcb372d6f68-24903214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34232ff1be4303173379c123cdf922077710cd4' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/news/site/template/news_grid.tpl',
      1 => 1429982004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588553bcb372d6f68-24903214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/news/site/template/css/style.css">
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
							<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="news">
						        <div class="temnyi">

						        	<div class="svetlyi"></div>
						        <div class="title"><a href="<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
"><?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a></div>
						        
								<?php if ($_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['prev_img']!=''){?>
								<div class="image_news"><a href="<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['prev_img'];?>
" border="0" alt="<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
" /></a></div>
								
								<?php }?>
								<div class="anons"><?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['anons'];?>
</div>

							</div>
							</div>
							<div class="clear"></div>
							<br>
							<?php endfor; endif; ?>
							
						</div>	

						<?php if (isset($_smarty_tpl->getVariable('news_paging',null,true,false)->value)){?>
	
							<?php if (count($_smarty_tpl->getVariable('news_paging')->value['pages'])>1){?>
							
								<?php  $_smarty_tpl->tpl_vars['pager_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_paging')->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pager_page']->key => $_smarty_tpl->tpl_vars['pager_page']->value){
?>
									<?php if ($_smarty_tpl->tpl_vars['pager_page']->value['current']==1){?>
										<?php $_smarty_tpl->tpl_vars['__curpagenr'] = new Smarty_variable($_smarty_tpl->tpl_vars['pager_page']->value['text'], null, null);?>
									<?php }?>
								<?php }} ?>
								
								<?php if ($_smarty_tpl->getVariable('__curpagenr')->value-3<1){?>
									<?php $_smarty_tpl->tpl_vars['__startnr'] = new Smarty_variable(1, null, null);?>
									<?php $_smarty_tpl->tpl_vars['__leftsep'] = new Smarty_variable(0, null, null);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars['__startnr'] = new Smarty_variable($_smarty_tpl->getVariable('__curpagenr')->value-3, null, null);?>
									<?php $_smarty_tpl->tpl_vars['__leftsep'] = new Smarty_variable(1, null, null);?>
								<?php }?>
								
								<?php if ($_smarty_tpl->getVariable('__curpagenr')->value+3>count($_smarty_tpl->getVariable('pager_array')->value['pages'])){?>
									<?php $_smarty_tpl->tpl_vars['__endnr'] = new Smarty_variable(count($_smarty_tpl->getVariable('news_paging')->value['pages']), null, null);?>
									<?php $_smarty_tpl->tpl_vars['__rightsep'] = new Smarty_variable(0, null, null);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars['__endnr'] = new Smarty_variable($_smarty_tpl->getVariable('__curpagenr')->value+3, null, null);?>
									<?php $_smarty_tpl->tpl_vars['__rightsep'] = new Smarty_variable(1, null, null);?>
								<?php }?>
								
								<?php if (count($_smarty_tpl->getVariable('news_paging')->value['pages'])>1){?>
								<div class="pagination pagination-centered">
								<ul>
									<li><a href="<?php echo $_smarty_tpl->getVariable('news_paging')->value['ppn']['href'];?>
">&lsaquo;</a></li>
									<?php if ($_smarty_tpl->getVariable('__leftsep')->value==1){?>
									<li><a href="<?php echo $_smarty_tpl->getVariable('news_paging')->value['pages'][1]['href'];?>
"><?php echo $_smarty_tpl->getVariable('news_paging')->value['pages'][1]['text'];?>
</a></li>
									<li><a href="javascript:void(0);" class="selected">...</a></li>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['pager_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_paging')->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pager_page']->key => $_smarty_tpl->tpl_vars['pager_page']->value){
?>
									<?php if ($_smarty_tpl->tpl_vars['pager_page']->value['text']>=$_smarty_tpl->getVariable('__startnr')->value&&$_smarty_tpl->tpl_vars['pager_page']->value['text']<=$_smarty_tpl->getVariable('__endnr')->value){?>
									<li<?php if ($_smarty_tpl->tpl_vars['pager_page']->value['current']==1){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['pager_page']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['pager_page']->value['text'];?>
</a></li>
									<?php }?>
									<?php }} ?>
									<?php if ($_smarty_tpl->getVariable('__rightsep')->value==1){?>
									<li><a href="javascript:void(0);" class="selected">...</a></li>
									<li><a href="<?php echo $_smarty_tpl->getVariable('news_paging')->value['pages'][count($_smarty_tpl->getVariable('news_paging')->value['pages'])]['href'];?>
"><?php echo $_smarty_tpl->getVariable('news_paging')->value['pages'][count($_smarty_tpl->getVariable('news_paging')->value['pages'])]['text'];?>
</a></li>
									<?php }?>
									<li><a href="<?php echo $_smarty_tpl->getVariable('news_paging')->value['npn']['href'];?>
">&rsaquo;</a></li>
								</ul>
								</div>
								<?php }?>
							<?php }?>
						<?php }elseif(isset($_smarty_tpl->getVariable('pager',null,true,false)->value)){?>
						<div class="pagination" align="center">
							<span class="pages"><?php echo $_smarty_tpl->getVariable('L_PAGE')->value;?>
:</span>
							<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('pager')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
							
								<?php if ($_smarty_tpl->getVariable('pager')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['current']==1){?>
								<span class="current"><?php echo $_smarty_tpl->getVariable('pager')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['text'];?>
</span>
								<?php }else{ ?>
									<?php if ($_smarty_tpl->getVariable('pager')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['href']!=''){?>
									<a href="<?php echo $_smarty_tpl->getVariable('pager')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['href'];?>
"><?php echo $_smarty_tpl->getVariable('pager')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['text'];?>
</a>
									<?php }else{ ?>
									<span><?php echo $_smarty_tpl->getVariable('pager')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['text'];?>
</span>
									<?php }?>
								<?php }?>
							
							<?php endfor; endif; ?>
						</div>
						<?php }?>

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
		<div class="clear"></div>	
</div>