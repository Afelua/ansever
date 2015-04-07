<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 15:47:53
         compiled from "Z:/home/anseverv2/www/apps/admin/admin/template1\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:388955238ba9a53947-69712090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806884d85dc4c49c81bb3d09be7cabb45a28360d' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/admin/admin/template1\\sidebar.tpl',
      1 => 1424158272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388955238ba9a53947-69712090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
            <div class="sidebar" id="sidebar">
            
                <ul class="nav nav-list">
                    <li>
                        <a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/"><i class="icon-home"></i> <span class="menu-text"><?php echo $_smarty_tpl->getVariable('L_HOME')->value;?>
</span></a>
                    </li>

                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['data']['active']){?>class="active open"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=data"><i class="icon-book"></i> <span class="menu-text"><?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_AUTOADVERTS')->value;?>
</span></a>
                    </li>
                    
                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['references']['active']){?>class="active open"<?php }?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-globe"></i>
                            <span class="menu-text"> <?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_REFERENCES')->value;?>
 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                        
                          <?php  $_smarty_tpl->tpl_vars['ama'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin_menua')->value['references']['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ama']->key => $_smarty_tpl->tpl_vars['ama']->value){
?>
                          <li <?php if ($_smarty_tpl->tpl_vars['ama']->value['active']){?>class="active"<?php }?>>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['ama']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['ama']->value['title'];?>
</a>
                          </li>
                          <?php }} ?>
                        </ul>
                    </li>
                    
                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['content']['active']){?>class="active open"<?php }?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-coffee"></i>
                            <span class="menu-text"> Контент </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                        
                          <?php  $_smarty_tpl->tpl_vars['ama'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin_menua')->value['content']['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ama']->key => $_smarty_tpl->tpl_vars['ama']->value){
?>
                          <li  <?php if ($_smarty_tpl->tpl_vars['ama']->value['active']){?>class="active"<?php }?>>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['ama']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['ama']->value['title'];?>
</a>
                          </li>
                          <?php }} ?>
                        </ul>
                    </li>
                    
                    

                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['config']['active']){?>class="active open"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=config"><i class="icon-cog"></i> <span class="menu-text"><?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_SETTINGS')->value;?>
</span></a>
                    </li>
                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['sitebill']['active']){?>class="active open"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=sitebill"><i class="icon-refresh"></i> 
                        <span class="menu-text"><?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_UPDATES')->value;?>
</span>
                        </a>
                    
                    </li>
                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['user']['active']){?>class="active open"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=user"><i class="icon-user"></i> <span class="menu-text"><?php echo $_smarty_tpl->getVariable('L_USER_MENU')->value;?>
</span></a></li>
                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['structure']['active']){?>class="active open"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/admin/?action=structure"><i class="icon-th-list"></i> <span class="menu-text"><?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_STRUCTURE')->value;?>
</span></a></li>

                    <li <?php if ($_smarty_tpl->getVariable('admin_menua')->value['access']['active']){?>class="active open"<?php }?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span class="menu-text"> <?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_ACCESS')->value;?>
 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                        
                          <?php  $_smarty_tpl->tpl_vars['ama'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin_menua')->value['access']['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ama']->key => $_smarty_tpl->tpl_vars['ama']->value){
?>
                          <li  <?php if ($_smarty_tpl->tpl_vars['ama']->value['active']){?>class="active"<?php }?>>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['ama']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['ama']->value['title'];?>
</a>
                          </li>
                          <?php }} ?>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span class="menu-text"> Недавние </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['le']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['name'] = 'le';
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['loop'] = is_array($_loop=$_SESSION['recently_apps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['le']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['le']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['le']['total']);
?>
                                <li><?php echo $_SESSION['recently_apps'][$_smarty_tpl->getVariable('smarty')->value['section']['le']['index']];?>
</li>
                            <?php endfor; endif; ?>
                        </ul>
                    </li>
                    
                    <?php if ($_smarty_tpl->getVariable('data_category_tree')->value!=''){?>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-folder-close"></i>
                            <span class="menu-text"> Категории </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <div class="submenu">
                            <div class=" nolinedotted"><?php echo $_smarty_tpl->getVariable('data_category_tree')->value;?>
</div>
                        </div>
                    </li>
                    <?php }?>
                    
                    <li>
                        <a href="https://play.google.com/store/apps/details?id=ru.sitebill.mobilecms" target="_blank">
                        <i class="icon-camera"></i>
 						<span class="menu-text">Мобильное фото</span></a>
                    </li>
                    
                
                </ul>
                
                
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                </div>
                
                
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
                
                
            </div>
