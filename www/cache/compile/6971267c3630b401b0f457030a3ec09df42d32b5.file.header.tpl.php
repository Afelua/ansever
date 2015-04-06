<?php /* Smarty version Smarty-3.0.8, created on 2015-04-01 02:45:26
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2491551aeb463bbb54-49878674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6971267c3630b401b0f457030a3ec09df42d32b5' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\header.tpl',
      1 => 1427827522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2491551aeb463bbb54-49878674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php if ($_smarty_tpl->getVariable('meta_title')->value!=''){?><?php echo $_smarty_tpl->getVariable('meta_title')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('title')->value;?>
<?php }?></title>
<script type="text/javascript">
var estate_folder = '<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
'; 
</script>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('meta_description')->value;?>
" /> 
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('meta_keywords')->value;?>
" /> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/bootstrap/css/bootstrap.min.css" media="screen">

<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/bootstrap/css/slider.css" media="screen"> -->
<link rel=stylesheet type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/agency/css/style.css">
<link rel=stylesheet type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/agency/css/bootstrap.corrections.css">
<link rel=stylesheet type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/agency/css/purecssmenu.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/jqueryui/jquery-ui.js"></script>
<!-- <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/bootstrap/js/bootstrap-slider.js"></script> -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/css/jquery.lightbox-0.5.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/css/jqueryslidemenu.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/css/system.css">

<script type="text/javascript" src="http://www.sitebill.ru/js/nanoapi_beta.js"></script>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<link rel="stylesheet" type="text/css" href="/css/styles-carousel.css"> <!-- подключаем стилевой файл -->


<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->

<script type="text/javascript">
var arrowimages={down:['downarrowclass', '<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/down.gif', 23], right:['rightarrowclass', '<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/right.gif']}
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/js/estate.js"></script> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/agency/jquery-ui/themes/base/jquery.ui.all.css">

<link rel="stylesheet" href="/css/global.css">

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/sitebillcore.js"></script>
<script type="text/javascript">
    $(function() {
        $("#tabs-services").tabs();
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
 $('.spoiler_links').click(function(){
  $(this).parent().children('div.spoiler_body').toggle('normal');
  return false;
 });

});
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/<?php echo $_smarty_tpl->getVariable('current_theme_name')->value;?>
/js/interface.js"></script>
<!-- <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/partsimporter/js/partsimporter.js"></script> -->
<script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
<script src="/js/slides.min.jquery.js"></script>

<script language="JavaScript" type="text/javascript">
function show(divid)
{
if(document.getElementById(divid).style.display=="none")
{
document.getElementById(divid).style.display="inline";
document.getElementById(divid).style.display="inline";
}
else
{
document.getElementById(divid).style.display="none";
}
}
</script>



</head>
