<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 15:47:51
         compiled from "Z:/home/anseverv2/www/apps/admin/admin/template/data_top_menu.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:2373355238ba725bf31-82114294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9afd842182a030c874dbce6c442d7760ffe6a3a' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/admin/admin/template/data_top_menu.tpl.html',
      1 => 1424158272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2373355238ba725bf31-82114294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
    <div class="nav pull-left">
          <a href="?action=data&do=new" class="btn btn-primary"><?php echo $_smarty_tpl->getVariable('L_ADD_RECORD_BUTTON')->value;?>
</a>
    </div>                     
    
    <div class="nav pull-right">

    <ul class="nav">
        <li <?php if ($_smarty_tpl->getVariable('active')->value==''&&$_smarty_tpl->getVariable('hot')->value==''){?> class="active"<?php }?>><a href="?action=data">Все (<?php echo $_smarty_tpl->getVariable('all_items_count')->value;?>
)</a></li>
        <li <?php if ($_smarty_tpl->getVariable('active')->value==1){?> class="active"<?php }?>><a href="?action=data&active=1">Активные (<?php echo $_smarty_tpl->getVariable('active_items_count')->value;?>
)</a></li>
        <li <?php if ($_smarty_tpl->getVariable('active')->value=='notactive'){?> class="active"<?php }?>><a href="?action=data&active=notactive">Неактивные (<?php echo $_smarty_tpl->getVariable('notactive_items_count')->value;?>
)</a></li>
        <?php if (isset($_smarty_tpl->getVariable('billing_mode_on',null,true,false)->value)&&$_smarty_tpl->getVariable('billing_mode_on')->value==1){?>
        <li <?php if ($_smarty_tpl->getVariable('billing_mode_on_statuses')->value['vip']==1){?> class="active"<?php }?>><a href="?action=data&vip_status=1">VIP (<?php echo $_smarty_tpl->getVariable('billing_mode_on_counts')->value['vip'];?>
)</a></li>
        <li <?php if ($_smarty_tpl->getVariable('billing_mode_on_statuses')->value['premium']==1){?> class="active"<?php }?>><a href="?action=data&premium_status=1">PREMIUM (<?php echo $_smarty_tpl->getVariable('billing_mode_on_counts')->value['premium'];?>
)</a></li>
        <li <?php if ($_smarty_tpl->getVariable('billing_mode_on_statuses')->value['bold']==1){?> class="active"<?php }?>><a href="?action=data&bold_status=1">BOLD (<?php echo $_smarty_tpl->getVariable('billing_mode_on_counts')->value['bold'];?>
)</a></li>
        <?php }else{ ?>
        <li <?php if ($_smarty_tpl->getVariable('hot')->value==1){?> class="active"<?php }?>><a href="?action=data&hot=1">Спецпредложения (<?php echo $_smarty_tpl->getVariable('hot_items_count')->value;?>
)</a></li>
        <?php }?>
        
        
    </ul> 
 
    <form class="navbar-search pull-left" action="">
    <?php echo $_smarty_tpl->getVariable('user_select_box')->value;?>

    <input type="hidden" name="action" value="data">
    </form>
    </div>

    </div>
  </div>
</div>

