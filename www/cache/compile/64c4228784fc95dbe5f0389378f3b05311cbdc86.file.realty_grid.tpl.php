<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 01:49:55
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\realty_grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247565522c7432e2ee7-30286020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64c4228784fc95dbe5f0389378f3b05311cbdc86' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\realty_grid.tpl',
      1 => 1428342589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247565522c7432e2ee7-30286020',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/json2.js" type="text/javascript"></script>

<div class="full_Page">


<?php $_smarty_tpl->tpl_vars["lang_topic_name"] = new Smarty_variable("name_".($_SESSION['_lang']), null, null);?>

<?php $_template = new Smarty_Internal_Template("map_full_screen.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<!--div id="grid_realty_map" style="height: 400px;"></div-->
<a onclick="show('test');" href="#">Скрытый DIV</a> <br />

<div id="test">
	

</div>



    <?php $_template = new Smarty_Internal_Template('realty_grid_thumbs.tpl.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('main_file_tpl')->value!=''){?>
    <div class="right_catalog">

    <!--a onclick="hidetxt(); return false;" href="#" rel="nofollow">Ссылка 1</a-->

    <div class="row-fluid">
    	<div class="span6 button_take_off">
    	Снять
    	</div>
    	<div class="span6" style="text-align: center;margin-left: 0px;">
    	<a href="" class="button_pass">Сдать</a>
    	</div>
	</div>

	<div id="search_main">
			<?php if (!$_smarty_tpl->getVariable('is_account')->value&&!preg_match('/mapviewer/',$_SERVER['REQUEST_URI'])){?>
        		<?php $_template = new Smarty_Internal_Template("search_form.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    		<?php }elseif($_smarty_tpl->getVariable('is_account')->value){?>
        		<?php $_template = new Smarty_Internal_Template("remember.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    		<?php }?>
	</div>
	<?php $_template = new Smarty_Internal_Template("news_list_column.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<hr class="news_hr">
	<?php $_template = new Smarty_Internal_Template("realty_grid_thumbs_what.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>

<?php }?>
</div>






	<script type="text/javascript">
	var realty_geo_data = <?php echo $_smarty_tpl->getVariable('grid_geodata')->value;?>
; 
	</script>
	

		
		<script type="text/javascript">
		ymaps.ready(init);
	    var map;
	
	    function init(){ 

	    	if(realty_geo_data.length<1){
	    		$('#grid_realty_map').hide();
	    		return;
	    	}

	    	map = new ymaps.Map('grid_realty_map',{
				zoom: 16,
				center: [23.937149,49.886672],
				behaviors: ["scrollZoom", "drag", "dblClickZoom"],
				type : 'yandex#map'
				});
			map.controls.add(new ymaps.control.TypeSelector(['yandex#map', 'yandex#publicMap', 'yandex#satellite', 'yandex#hybrid']));
			map.controls.add('scaleLine');
			map.controls.add(new ymaps.control.MiniMap(
			    { type: 'yandex#publicMap' },
			    { size: [90, 90] }
			));
			map.controls.add('zoomControl', { top: 75, left: 5 });
			
			var min_lat=0;
			var min_lng=0;
			var max_lat=0;
			var max_lng=0;
			for(var o=0; o<realty_geo_data.length; o++){
				if(min_lat==0){
					min_lat=Number(realty_geo_data[o].lat);
				}
				if(max_lat==0){
					max_lat=Number(realty_geo_data[o].lat);
				}
				if(min_lng==0){
					min_lng=Number(realty_geo_data[o].lng);
				}
				if(max_lng==0){
					max_lng=Number(realty_geo_data[o].lng);
				}
				
				if(Number(realty_geo_data[o].lat)<min_lat){
					min_lat=Number(realty_geo_data[o].lat);
				}
				if(Number(realty_geo_data[o].lat)>max_lat){
					max_lat=Number(realty_geo_data[o].lat);
				}
				
				if(Number(realty_geo_data[o].lng)<min_lng){
					min_lng=Number(realty_geo_data[o].lng);
				}
				if(Number(realty_geo_data[o].lng)>max_lng){
					max_lng=Number(realty_geo_data[o].lng);
				}


				console.log(realty_geo_data[o]);
				
				var latlng=new Array(Number(realty_geo_data[o].lat),Number(realty_geo_data[o].lng));
				var myPlacemark = new ymaps.Placemark(
						latlng,
						{
							iconContent: realty_geo_data[o].id+'   '+realty_geo_data[o].price
						},
						{
							draggable: false,
		    	            hideIconOnBalloonOpen: false,
		    	            preset: "twirl#yellowStretchyIcon"
		    	        }
		    	    );
				
				myPlacemark.events.add("click", function(e) {
		      		var object = e.get('target');
		      		var m=object.properties.get('iconContent');
		      		destination = $('a[name=row'+m+']').offset().top - 50;
					$('body').animate( { scrollTop: destination }, 1100 );
		      	});
		      	map.geoObjects.add(myPlacemark);
		    }
			
			if(min_lat==max_lat && min_lng==max_lng){
				map.setCenter(new Array(min_lat,min_lng));
			}else{
				map.setBounds([[min_lat,min_lng],[max_lat,max_lng]]);
			}
		}
		</script>
		

	

<script type="text/javascript">
$(document).ready(function(){
 $('#test1').css("display", "none");
});
</script>