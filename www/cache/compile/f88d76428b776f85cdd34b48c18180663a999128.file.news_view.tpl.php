<?php /* Smarty version Smarty-3.0.8, created on 2015-04-26 01:01:13
         compiled from "Z:/home/anseverv2/www/apps/news/site/template/news_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18097553bc85958e617-20830367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f88d76428b776f85cdd34b48c18180663a999128' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/news/site/template/news_view.tpl',
      1 => 1429980529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18097553bc85958e617-20830367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/news/site/template/css/style.css">
<h1 class="article"> <a href="/news">Статьи</a> -> <?php echo $_smarty_tpl->getVariable('news')->value['title']['value'];?>
 </h1>
<div id="singleNews">
	<div class="date"><?php echo $_smarty_tpl->getVariable('news')->value['date']['value_string'];?>
</div>
	<div class="title"><?php echo $_smarty_tpl->getVariable('news')->value['title']['value'];?>
</div><br>
	<div class="share">
	</div>

	<div class="text">
		<?php if ($_smarty_tpl->getVariable('news')->value['prev_img']!=''){?>
		<img src="<?php echo $_smarty_tpl->getVariable('news')->value['normal_img'];?>
" width="300" alt="<?php echo $_smarty_tpl->getVariable('news')->value['title']['value'];?>
" class="alignleft" align="left" style="padding: 10px;" />
		<?php }?>
		<?php echo $_smarty_tpl->getVariable('news')->value['description']['value'];?>

	</div><!-- .text -->
	<div style="clear:both;"></div>
</div><!-- #singleNews -->

<?php if (count($_smarty_tpl->getVariable('more_news')->value)>0){?>
<div id="news" class="archive">
	<div class="all">
		Другие статьи:
	</div>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('more_news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <div class="date"><?php echo $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</div>
        <div class="title"><a href="<?php echo $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
"><?php echo $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a></div>
        
        <?php if ($_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['prev_img']!=''){?>
        <div class="image_news"><a href="<?php echo $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
<?php echo $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['prev_img'];?>
" border="0" alt="<?php echo $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
" /></a></div>
        
        <?php }?>
        <div class="anons"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('more_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['anons']);?>
</div>
        
    </div>
    <div class="clear"></div>
    <?php endfor; endif; ?>
    
</div>
<?php }?> 
</div>
<script src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/comment/js/comment_controller.js"></script>

<script>
/*$(document).ready(function(){
	$('.cmnts').Comment_Controller({object_type:'news', object_id:'<?php echo $_smarty_tpl->getVariable('news')->value['news_id']['value'];?>
'});
});*/
</script>

<div class="cmnts"></div>