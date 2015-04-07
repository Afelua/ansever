<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 02:13:28
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226335522ccc8f07c63-43730728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5969063a12481ad1f402ebd58104621bab6ff8be' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\main.tpl',
      1 => 1427747277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226335522ccc8f07c63-43730728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('is_underconstruction_mode')->value==1){?>
	<?php $_template = new Smarty_Internal_Template('main_closed.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<body>
	<?php if ($_SESSION['user_id']==''){?>
        <?php $_template = new Smarty_Internal_Template("login_register.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <?php }?>
	<?php if ($_smarty_tpl->getVariable('apps_page_view')->value){?>
		<?php $_template = new Smarty_Internal_Template("layout_minimum.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }elseif($_smarty_tpl->getVariable('is_map_house')->value){?>
		<?php $_template = new Smarty_Internal_Template("layout_map.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('_layout')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<?php }?>
</body>
</html>
<?php }?>