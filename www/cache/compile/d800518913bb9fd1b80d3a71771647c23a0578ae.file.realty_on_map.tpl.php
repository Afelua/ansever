<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:31
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\realty_on_map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196075501e82bc3f823-70749389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd800518913bb9fd1b80d3a71771647c23a0578ae' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\realty_on_map.tpl',
      1 => 1424158314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196075501e82bc3f823-70749389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="realty_on_map">
<?php if (isset($_smarty_tpl->getVariable('realty',null,true,false)->value['img'])){?>
<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('realty')->value['img'][0]['preview'];?>
" width="50" align="left" hspace="5" vspace="5" />
<?php }?>
<a href="<?php echo $_smarty_tpl->getVariable('realty')->value['href'];?>
" target="_blank"><?php if ($_smarty_tpl->getVariable('realty')->value['city']!=''){?>
	<?php echo $_smarty_tpl->getVariable('realty')->value['city'];?>
,  
<?php }?>
<?php if ($_smarty_tpl->getVariable('realty')->value['street']!=''){?><?php echo $_smarty_tpl->getVariable('realty')->value['street'];?>
<?php if ($_smarty_tpl->getVariable('realty')->value['number']!=''){?>, <?php echo $_smarty_tpl->getVariable('realty')->value['number'];?>
 <?php }?><?php }?>
<?php if ($_smarty_tpl->getVariable('realty')->value['square_all']!=''&&$_smarty_tpl->getVariable('realty')->value['square_all']!=0){?><?php echo $_smarty_tpl->getVariable('realty')->value['square_all'];?>
<?php }else{ ?>-<?php }?>/<?php if ($_smarty_tpl->getVariable('realty')->value['square_kitchen']!=''&&$_smarty_tpl->getVariable('realty')->value['square_kitchen']!=0){?><?php echo $_smarty_tpl->getVariable('realty')->value['square_kitchen'];?>
<?php }else{ ?>-<?php }?>/<?php if ($_smarty_tpl->getVariable('realty')->value['square_live']!=''&&$_smarty_tpl->getVariable('realty')->value['square_live']!=0){?><?php echo $_smarty_tpl->getVariable('realty')->value['square_live'];?>
<?php }else{ ?>-<?php }?>, 
<br>
<b><?php echo number_format($_smarty_tpl->getVariable('realty')->value['price'],0,","," ");?>
</b>
</a>
</div>