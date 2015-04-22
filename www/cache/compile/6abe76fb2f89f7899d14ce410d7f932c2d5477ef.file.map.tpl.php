<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 02:33:43
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53095537e98777df73-50082671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6abe76fb2f89f7899d14ce410d7f932c2d5477ef' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\map.tpl',
      1 => 1429725035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53095537e98777df73-50082671',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/realtymap.js" type="text/javascript"></script>
<script>
var loc_objects=<?php echo $_smarty_tpl->getVariable('geoobjects_collection_clustered')->value;?>
;
var map_type='<?php echo $_smarty_tpl->getVariable('map_type')->value;?>
';

$(document).ready(function(){
var RM=new RealtyMap();
RM.initJSON('grid_realty_map', loc_objects, map_type);
});

</script>

<div class="bigmap">
<div id="grid_realty_map" style="height: 400px;"></div>
</div>