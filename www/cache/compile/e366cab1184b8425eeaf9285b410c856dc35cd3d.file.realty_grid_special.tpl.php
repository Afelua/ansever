<?php /* Smarty version Smarty-3.0.8, created on 2015-04-28 16:47:14
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\realty_grid_special.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2995553f4912617235-05958638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e366cab1184b8425eeaf9285b410c856dc35cd3d' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\realty_grid_special.tpl',
      1 => 1430210818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2995553f4912617235-05958638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'Z:\home\anseverv2\www\third\smarty\plugins\modifier.truncate.php';
?><script src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/json2.js" type="text/javascript"></script>

<div class="b-carousel1"> <!-- контейнер, в котором будет карусель -->
	
		<div class="b-carousel-button-left"></div> <!-- левая кнопка -->
		<div class="b-carousel-button-right"></div> <!-- правая кнопка -->
		
		<div class="h-carousel-wrapper"> <!-- видимая область карусели -->
			<div class="h-carousel-items"> <!-- весь набор элементов карусели -->
			
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
	<a href="<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url']!=''){?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
<?php }?>" title="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
">


	<div class="t_i_i<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'])){?> t_i_odd<?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hot']==1){?><?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'])){?> t_i_opayed<?php }else{ ?> t_i_payed<?php }?><?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['bold_status']==1){?> grid_thumbs_bold<?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['premium_status']==1){?> grid_thumbs_premium<?php }?>" style="margin: 10px 7px 10px 7px;">
		<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['img']!=''){?>
		<div class="t_i_photo t_i_photo_s">
			
				<span class="t_i_desc"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['text']),200);?>

				</span>
				<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['img'][0]['preview'];?>
"
				alt="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
" />
		</div>
		<?php }else{ ?>
		<div class="t_i_photo t_i_photo_s">
			<a
				href="<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url']!=''){?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
<?php }?>"
				title="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
">
				<span class="t_i_desc"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['text']),200);?>

				</span>
				<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/no_foto.png"
				alt="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
" />
			</a>
		</div>
		<?php }?>

		<div class="t_i_title">
			<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']!=''){?>
				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Девяткино'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Гражданский проспект'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Академическая'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Политехническая'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Площадь Мужества'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Лесная'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Выборгская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Площадь Ленина'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Чернышевская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Площадь Восстания'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Владимирская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Пушкинская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Технологический институт'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Балтийская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Нарвская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Кировский завод'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Автово'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Девяткино'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Ленинский проспект'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Проспект Ветеранов'){?>
				<p class="circle" style="background:#ff064a;"></p>
				<p class="listitemmetro" style="color:#ff064a;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>

				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Парнас'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Проспект Просвещения'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Озерки'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Удельная'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Пионерская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Чёрная речка'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Петроградская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Горьковская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Невский проспект'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Сенная площадь'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Фрунзенская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Московские ворота'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Электросила'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Парк Победы'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Московская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Звездная'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Купчино'){?>
				<p class="circle" style="background:#109eff;"></p>
				<p class="listitemmetro" style="color:#109eff;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>


				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Приморская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Василеостровская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Гостиный двор'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Маяковская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Площадь Александра Невского'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Елизаровская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Ломоносовская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Пролетарская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Обухово'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Рыбацкое'){?>
				<p class="circle" style="background:#a7cf1f;"></p>
				<p class="listitemmetro" style="color:#a7cf1f;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>

				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Спасская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Достоевская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Лиговский проспект'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Новочеркасская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Ладожская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Проспект Большевиков'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Улица Дыбенко'){?>
				<p class="circle" style="background:#ffb801;"></p>
				<p class="listitemmetro" style="color:#ffb801;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>

				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Комендантский проспект'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Старая Деревня'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Крестовский остров'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Чкаловская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Спортивная'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Адмиралтейская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Садовая'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Звенигородская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Обводный канал'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Волковская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Бухарестская'||$_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Международная'){?>
				<p class="circle" style="background:#663399;"></p>
				<p class="listitemmetro" style="color:#663399;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>

			<?php }?>


			<h3 class="t_i_h3">

				<span> <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city']!=''){?> <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street_name']!=''){?>, <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street_name'];?>
<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number']!=''){?>, <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number'];?>
<?php }?><?php }?>
					<?php }else{ ?> <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street_name']!=''){?> <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street_name'];?>
<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number']!=''){?>, <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number'];?>
<?php }?> <?php }?>
					<?php }?> </span>
			</h3>

			<div class="t_i_data">

				<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['room_count'];?>
 к. кв.</span>, 
				<span><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['square_all']!=''){?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['square_all'];?>
<?php }?> м2</span>
			</div>

			<p>
				<span class="listitemprice"><?php echo number_format($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'],0,",","
					");?>
 <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currency_name']!=''){?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currency_name'];?>
<?php }?> руб.
 					
					</span>
			</p>

   				
		</div>

	</div>

</a>
 <?php endfor; endif; ?>
				
			</div>
		</div>
		
	</div>



<div class="grid">
	

	</a>
</div>

	<script>
	$(document).ready(function(){

	$(".b-carousel-button-right").click(function(){ // при клике на правую кнопку запускаем следующую функцию:
		$(this).parents(".b-carousel1").find(".h-carousel-items").animate({left: "-222px"}, 200); // производим анимацию: блок с набором картинок уедет влево на 222 пикселя (это ширина одного прокручиваемого элемента) за 200 милисекунд.
		setTimeout(function () { // устанавливаем задержку времени перед выполнением следующих функций. Задержка нужна, т.к. эти ффункции должны запуститься только после завершения анимации.
			$(this).parents(".b-carousel1").find(".h-carousel-items .b-carousel-block").eq(0).clone().appendTo(".h-carousel-items"); // выбираем первый элемент, создаём его копию и помещаем в конец карусели
			$(this).parents(".b-carousel1").find(".h-carousel-items .b-carousel-block").eq(0).remove(); // удаляем первый элемент карусели		
			$(this).parents(".b-carousel1").find(".h-carousel-items").css({"left":"0px"}); // возвращаем исходное смещение набора набора элементов карусели
		}, 300);
	});
	
	$(".b-carousel-button-left").click(function(){ // при клике на левую кнопку выполняем следующую функцию:		
		$(this).parents(".b-carousel1").find(".h-carousel-items .b-carousel-block").eq(-1).clone().prependTo(".h-carousel-items"); // выбираем последний элемент набора, создаём его копию и помещаем в начало набора	
		$(this).parents(".b-carousel1").find(".h-carousel-items").css({"left":"-222px"}); // устанавливаем смещение набора -222px		
		$(this).parents(".b-carousel1").find(".h-carousel-items").animate({left: "0px"}, 200); // за 200 милисекунд набор элементов плавно переместится в исходную нулевую точку
		$(this).parents(".b-carousel1").find(".h-carousel-items .b-carousel-block").eq(-1).remove(); // выбираем последний элемент карусели и удаляем его
	});
	
});
	</script>
	

