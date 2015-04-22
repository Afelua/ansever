<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 02:24:00
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\realty_grid_thumbs.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:298275537e740c108e2-62643150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b767a1b26a2c76fbe52c3427fde41432db5ea6' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\realty_grid_thumbs.tpl.html',
      1 => 1429727017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298275537e740c108e2-62643150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'Z:\home\anseverv2\www\third\smarty\plugins\modifier.truncate.php';
?><!--div>
 <a href="" class="spoiler_links search_list">Выбрать метро</a>
 <div class="spoiler_body">
<div class="select_box_td"><?php $_template = new Smarty_Internal_Template('realty_grid_thumbs_map.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></div>
 </div>
</div-->




<div class="grid">
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
	<a
				href="<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url']!=''){?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
<?php }?>"
				title="<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
">


	<div class="t_i_i<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'])){?> t_i_odd<?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hot']==1){?><?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'])){?> t_i_opayed<?php }else{ ?> t_i_payed<?php }?><?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['bold_status']==1){?> grid_thumbs_bold<?php }?><?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['premium_status']==1){?> grid_thumbs_premium<?php }?>" >
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
				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Курская'){?>
				<p class="circle" style="background:red;"></p>
				<p class="listitemmetro" style="color:red;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>

				<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro']=='Крымская'){?>
				<p class="circle" style="background:green;"></p>
				<p class="listitemmetro" style="color:green;">
					<span><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['metro'];?>
</span>
				</p>
				<?php }?>

			<?php }?>


			<h3 class="t_i_h3">

				<span> <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city']!=''){?> <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['city'];?>
<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street']!=''){?>, <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
<?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number']!=''){?>, <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['number'];?>
<?php }?><?php }?>
					<?php }else{ ?> <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street']!=''){?> <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['street'];?>
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

			<!--p>
				<span>ID: <?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</span>
			</p-->

			
			<!--p>
				<span>Этаж
					<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['floor'];?>
/<?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['floor_count'];?>
</span>
			</p-->
			<p>
				<span class="listitemprice"><?php echo number_format($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'],0,",","
					");?>
 <?php if ($_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currency_name']!=''){?><?php echo $_smarty_tpl->getVariable('grid_items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currency_name'];?>
<?php }?> руб.
 					
					</span>
			</p>

   				
		</div>

	</div>


 <?php endfor; endif; ?>

	</a>
</div>

<div class="clear"></div>  
<?php if ($_smarty_tpl->getVariable('pager')->value!=''){?>
<div class="pager"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>
<?php }?>

</div>



