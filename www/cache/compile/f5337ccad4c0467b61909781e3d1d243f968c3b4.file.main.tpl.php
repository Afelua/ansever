<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:37
         compiled from "Z:/home/sever-arenda/www/apps/admin/admin/template1\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74665501e8311c51a3-52867573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5337ccad4c0467b61909781e3d1d243f968c3b4' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/admin/admin/template1\\main.tpl',
      1 => 1424158272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74665501e8311c51a3-52867573',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
	<head>
		
		<?php if (@SITE_ENCODING!=''){?>
		    <meta charset="<?php echo @SITE_ENCODING;?>
" />
		<?php }else{ ?>
		    <meta charset="windows-1251" />
		<?php }?>
		<title>CMS Sitebill</title>

		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/ace-fonts.css" />
<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/css/styles.css" />
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/admin/admin/template/css/admin.css">
		
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/jquery/jquery.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/bootstrap/js/bootstrap.min.js"></script>
    
	<script src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/bootstrap-editable/js/bootstrap-editable.min.js"></script>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/bootstrap-editable/css/bootstrap-editable.css" />
	<?php if ($_smarty_tpl->getVariable('ADMIN_NO_NANOAPI')->value==1){?>
    <?php }else{ ?>
	<link href="http://www.sitebill.ru/css/nano.css" rel="stylesheet" type="text/css" />
	<script src="http://www.sitebill.ru/js/nanoapi.js"></script>
	<script src="http://www.sitebill.ru/js/nanoapi_beta.js"></script>
	<?php }?>
	<script src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/js/interface.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/js/estate.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/js/jquery.tablesorter.min.js"></script>
    <link href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/css/jquery-ui-1.8.custom.css" rel="stylesheet" type="text/css"/>
   	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/jqueryui/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/js/mycombobox.js"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/system/css/mycombobox.css" />
    
    <!-- <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/js/jquery.ui.datepicker.js"></script> -->
    <?php if ($_smarty_tpl->getVariable('ADMIN_NO_MAP_PROVIDERS')->value==1){?>
    <?php }else{ ?>
    <script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"></script>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<?php }?>
		<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/ace-extra.min.js"></script>
	
	
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/jquery.easy-pie-chart.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/flot/jquery.flot.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/flot/jquery.flot.resize.min.js"></script>
	
	<!-- ace scripts -->

	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/ace-elements.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/assets/js/ace.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('assets_folder')->value;?>
/css/custom.css" />
	
	<style>
	.modal.fade{top: -200%;}
	</style>
	
	
	
	
	<script>
		var estate_folder='<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
';
		</script>
		
</head>
<body onload="runDialog('homescript_etown_ru'); <?php echo $_smarty_tpl->getVariable('onload')->value;?>
">
	<div class="navbar" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-inner">
				<div class="container-fluid">
                    <div class="brand">
				    <div class="dragon"></div>
                        <div class="ttl">
                            CMS Sitebill
                        </div>
                     </div>
					
                    <?php $_template = new Smarty_Internal_Template('top_nav_notify.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
					
                    <div class="pull-right">
                           <a href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/" target="_blank" class="btn btn-small btn-primary"><i class="icon-eye-open"></i> <?php echo $_smarty_tpl->getVariable('L_SITE')->value;?>
</a>
                    

                                    <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                                                <?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_APPLICATIONS')->value;?>

                                                <i class="icon-angle-down icon-on-right"></i>
                                            </button>

                                            <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['ama'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin_menua')->value['apps']['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ama']->key => $_smarty_tpl->tpl_vars['ama']->value){
?>
                                <li>
                                <a <?php if (isset($_smarty_tpl->tpl_vars['ama']->value['childs'])&&count($_smarty_tpl->tpl_vars['ama']->value['childs'])>0){?>data-toggle="dropdown"  class="dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['ama']->value['href'];?>
" data-target="#"<?php }else{ ?>href="<?php echo $_smarty_tpl->tpl_vars['ama']->value['href'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ama']->value['title'];?>
</a>
                                </li>
                                <?php }} ?>
                                            </ul>
                                        </div>
                                 <?php if (isset($_smarty_tpl->getVariable('custom_admin_entity_menu',null,true,false)->value)&&count($_smarty_tpl->getVariable('custom_admin_entity_menu')->value)>0){?>
                                     <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                                                <?php echo $_smarty_tpl->getVariable('L_ADMIN_MENU_ADDITIONAL_APPLICATIONS')->value;?>

                                                <i class="icon-angle-down icon-on-right"></i>
                                            </button>

                                            <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['custom_admin_entity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('custom_admin_entity_menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['custom_admin_entity']->key => $_smarty_tpl->tpl_vars['custom_admin_entity']->value){
?>
                                <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['custom_admin_entity']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['custom_admin_entity']->value['entity_title'];?>
</a>
                                </li>
                                <?php }} ?>
                                            </ul>
                                        </div>   
                                    <?php }?>   
                                    <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                                                <i class="icon-globe icon-on-right"></i>
                                            </button>

                                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/admin/?_lang=ru"><img src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/admin/admin/template/img/flag_ru.gif" alt="Русский" title="Русский"/> Русский</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/admin/?_lang=en"><img src="<?php echo $_smarty_tpl->getVariable('MAIN_URL')->value;?>
/apps/admin/admin/template/img/flag_en.png" alt="English" title="English"/> English</a>
                                </li>
                                            
                                            </ul>
                                        </div>
                                        
                                    <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                                                <i class="icon-question-sign icon-on-right"></i>
                                            </button>

                                            <ul class="dropdown-menu">
                                <li>
                                    <a href="http://wiki.sitebill.ru/" target="_blank"><i class="icon-white icon-book"></i> База знаний</a>
                                </li>

                                <li>
                                    <a href="http://www.etown.ru/s/" target="_blank"><i class="icon-white icon-comment"></i> Форум</a>
                                </li>

                                <li>
                                    <a href="http://www.youtube.com/user/DMn1c" target="_blank"><i class="icon-white icon-film"></i> Видео-уроки</a>
                                </li>

                                <li>
                                    <a href="http://www.sitebill.ru/" target="_blank"><i class="icon-white icon-heart"></i> Наш сайт</a>
                                </li>
                                
                                <li>
                                    <a href="https://play.google.com/store/apps/details?id=ru.sitebill.mobilecms" target="_blank"><i class="icon-white icon-camera"></i> Мобильное приложение</a>
                                </li>
                                
                                
                                            
                                            </ul>
                                        </div>
                                        
                                        
                    </div>
					
				</div><!-- /.container-fluid -->
			</div><!-- /.navbar-inner -->
		</div>
		

		<div class="main-container container-fluid">
		    <?php $_template = new Smarty_Internal_Template('sidebar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						
					</script>

					<ul class="breadcrumb">
					
                        <?php  $_smarty_tpl->tpl_vars['crumb'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breadcrumbs_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['crumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['crumb']->iteration=0;
 $_smarty_tpl->tpl_vars['crumb']->index=-1;
if ($_smarty_tpl->tpl_vars['crumb']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->key => $_smarty_tpl->tpl_vars['crumb']->value){
 $_smarty_tpl->tpl_vars['crumb']->iteration++;
 $_smarty_tpl->tpl_vars['crumb']->index++;
 $_smarty_tpl->tpl_vars['crumb']->first = $_smarty_tpl->tpl_vars['crumb']->index === 0;
 $_smarty_tpl->tpl_vars['crumb']->last = $_smarty_tpl->tpl_vars['crumb']->iteration === $_smarty_tpl->tpl_vars['crumb']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['bread']['first'] = $_smarty_tpl->tpl_vars['crumb']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['bread']['last'] = $_smarty_tpl->tpl_vars['crumb']->last;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['bread']['first']){?><i class="icon-home home-icon"></i><?php }?>
                            <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['bread']['last']){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['bread']['last']){?> <span class="divider"><i class="icon-angle-right arrow-icon"></i></span><?php }?></li>
                        <?php }} ?>
					
					</ul><!-- .breadcrumb -->

					<!-- div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- #nav-search -->
				</div>
				
				<div class="page-content">
					<?php echo $_smarty_tpl->getVariable('content')->value;?>

				</div>
				
			</div>
		</div>

</body>
</html>