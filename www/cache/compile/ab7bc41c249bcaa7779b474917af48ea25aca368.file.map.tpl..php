<?php /* Smarty version Smarty-3.0.8, created on 2015-03-31 05:42:06
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\map.tpl." */ ?>
<?php /*%%SmartyHeaderCode:123255519c32e3bfb69-83829086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab7bc41c249bcaa7779b474917af48ea25aca368' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\map.tpl.',
      1 => 1427747603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123255519c32e3bfb69-83829086',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/json2.js" type="text/javascript"></script>

<script type="text/javascript">
//var d = '<?php echo $_smarty_tpl->getVariable('_geo_data')->value;?>
'; 
//var objects=JSON.parse(d);
<?php if ($_smarty_tpl->getVariable('_geo_data')->value!=''){?>
var objects=<?php echo $_smarty_tpl->getVariable('_geo_data')->value;?>
;
<?php }else{ ?>
var objects=[];
<?php }?>
</script>
	
	<script type="text/javascript">
	function initialize() {
		var latlng = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('apps_geodata_new_map_center')->value;?>
);
		var myOptions = {
		  zoom: 16,
		  center: latlng,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("YMapsID"), myOptions);
		
		var infowindow = new google.maps.InfoWindow({  
		  content: 'Hello, world!' 
		});
		
		var bounds=new google.maps.LatLngBounds();
		//var markers=[];
		
		var infowindow = new google.maps.InfoWindow({  
		  content: '' 
		});
		
		//objects=JSON.parse(objects);
		if(objects.length>0){
			for(var o=0; o<objects.length; o++){
				var html=objects[o].html;
				html=html.replace(/\\\"/g, '"');
				
				var latlng=new google.maps.LatLng(Number(objects[o].geo_lat),Number(objects[o].geo_lng));
				bounds.extend(latlng);
				var marker = new google.maps.Marker({
					icon: {url: estate_folder + '/template/frontend/agency/img/home_small.png'},
					position: latlng, 
					map: map,
					title: objects[o].title
				});
				//markers.push(marker);
				makeInfoWin(marker, infowindow, html);
				
			}
			
			var boundsCenter=bounds.getCenter();
			map.setCenter(boundsCenter);
			map.fitBounds(bounds);
		}
	};
	
	function makeInfoWin(marker, infowindow, data) {
		//var infowindow = new google.maps.InfoWindow({ content: data });
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(data);
			infowindow.open(marker.getMap(),marker);
		});  
	}
	  
	jQuery(document).ready(function(){
		initialize();
	});
	
	</script>




<div class="bigmap">
<div id="YMapsID" style="border: 1px solid #e6e6e6; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; width: 100%; height: 200px;"></div>
</div>