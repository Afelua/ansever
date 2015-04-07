<?php /* Smarty version Smarty-3.0.8, created on 2015-04-07 15:55:13
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\realty_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3022855238d61db5600-71806989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5590a917bccb0b3805d7278392adbdc32e72be' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\realty_view.tpl',
      1 => 1427644311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3022855238d61db5600-71806989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script>
$(document).ready(function(){
    var ul=$('ul.realty-options');
    var ul_length=ul.find('li').length;
    var middle=Math.ceil(ul_length/2);
    var parent=ul.parents().eq(0);
    var new_ul=ul.clone();
    
    li=ul.find('li');
    //li_new=ul.find('li');
    var p1=li.slice(0,middle);
    var p2=li.slice(middle,ul_length);
    ul.find('li').remove();
    ul.append(p1);
    new_ul.find('li').remove();
    new_ul.append(p2);
    parent.append(new_ul);
    
});
</script>


<?php if ($_smarty_tpl->getVariable('map_type')->value=='google'){?>
	
	<script type="text/javascript">
	function initialize() {
		
		
		
		<?php if ($_smarty_tpl->getVariable('data')->value['geo']['value']['lat']!=''&&$_smarty_tpl->getVariable('data')->value['geo']['value']['lng']!=''){?>
			var obj_lat=<?php echo $_smarty_tpl->getVariable('data')->value['geo']['value']['lat'];?>
;
			var obj_lng=<?php echo $_smarty_tpl->getVariable('data')->value['geo']['value']['lng'];?>
;
		<?php }else{ ?>
		var obj_lat='';
		var obj_lng='';
		<?php }?>
		var address='<?php if ($_smarty_tpl->getVariable('data')->value['city_id']['value_string']==''){?><?php echo $_smarty_tpl->getVariable('city_by_default')->value;?>
<?php }else{ ?><?php echo trim($_smarty_tpl->getVariable('data')->value['city_id']['value_string']);?>
<?php }?><?php if ($_smarty_tpl->getVariable('data')->value['street_id']['value_string']!=''){?>, <?php echo trim($_smarty_tpl->getVariable('data')->value['street_id']['value_string']);?>
<?php }?><?php if ($_smarty_tpl->getVariable('data')->value['number']['value']!=''){?>, <?php echo trim($_smarty_tpl->getVariable('data')->value['number']['value']);?>
<?php }?>';
		
		
		if(obj_lat!='' && obj_lng!=''){
			var lat=obj_lat;
			var lng=obj_lng;
			var latlng = new google.maps.LatLng(lat, lng);
			var myOptions = {
			  zoom: 16,
			  center: latlng,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById("YMapsID"), myOptions);
			var marker = new google.maps.Marker({
				position: latlng, 
				map: map,
				animation: google.maps.Animation.DROP,			  
				title:address
			});
		}else{
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode({'address':address},function(data){
				var lat=data[0].geometry.location.lat();
				var lng=data[0].geometry.location.lng();
				var latlng = new google.maps.LatLng(lat, lng);
				var myOptions = {
				  zoom: 16,
				  center: latlng,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("YMapsID"), myOptions);
				var marker = new google.maps.Marker({
					position: latlng, 
					map: map,
					draggable:true,
					animation: google.maps.Animation.DROP,			  
					title:address
				});
			});
		}
		
		
		
		
	};
	  
	jQuery(document).ready(function(){
		if(typeof google == 'object'){
			initialize();
		}
	});
	
	</script>
<?php }else{ ?>
	
	<script type="text/javascript">
	
	
    ymaps.ready(init);
    var map;

    function init(){     
    	// создаем экземпляр карты и привязываем его к контейнеру
		map = new ymaps.Map('YMapsID',{
			zoom: 16,
			center: [55.76, 37.64],
			behaviors: ["scrollZoom", "drag", "dblClickZoom"],
			type : 'yandex#map'
			});
		map.controls.add(new ymaps.control.TypeSelector(['yandex#map', 'yandex#publicMap', 'yandex#satellite', 'yandex#hybrid']));
		map.controls.add('scaleLine');
		map.controls.add(new ymaps.control.MiniMap(
		    { type: 'yandex#satellite' },
		    { size: [90, 90] }
		));
		map.controls.add('zoomControl', { top: 75, left: 5 });
		
		
		<?php if ($_smarty_tpl->getVariable('data')->value['geo']['value']['lat']!=''&&$_smarty_tpl->getVariable('data')->value['geo']['value']['lng']!=''){?>
			var obj_lat=<?php echo $_smarty_tpl->getVariable('data')->value['geo']['value']['lat'];?>
;
			var obj_lng=<?php echo $_smarty_tpl->getVariable('data')->value['geo']['value']['lng'];?>
;
		<?php }else{ ?>
		var obj_lat='';
		var obj_lng='';
		<?php }?>
		
		if(obj_lat!='' && obj_lng!=''){
			map.setCenter(new Array(obj_lat,obj_lng));
			var myPlacemark = new ymaps.Placemark(
    	        new Array(obj_lat,obj_lng),
				{
    	        	
				},
				{
					/*preset: "twirl#yellowStretchyIcon",*/
    	            draggable: false,
    	            hideIconOnBalloonOpen: false
    	        }
    	    );
	      	map.geoObjects.add(myPlacemark);
		}else{
			var myGeocoder = ymaps.geocode(
		        "<?php if ($_smarty_tpl->getVariable('data')->value['city_id']['value_string']==''){?><?php echo $_smarty_tpl->getVariable('city_by_default')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('data')->value['city_id']['value_string'];?>
<?php }?>, <?php if ($_smarty_tpl->getVariable('data')->value['street_id']['value_string']!=''){?> <?php echo $_smarty_tpl->getVariable('data')->value['street_id']['value_string'];?>
, <?php }?> <?php if ($_smarty_tpl->getVariable('data')->value['number']['value']!=''){?> <?php echo $_smarty_tpl->getVariable('data')->value['number']['value'];?>
<?php }?>", {
		            results: 1
		        }
		    );
			
			myGeocoder.then(
			    function (res) {
			       map.geoObjects.add(res.geoObjects);
			       
			       map.setCenter(res.geoObjects.get(0).geometry.getCoordinates());
			     }
			);
		}
			
		
		
		
		
		
    }
	</script>
	
<?php }?>
<?php if ($_smarty_tpl->getVariable('apps_pdfreport_enabled')->value==1){?>
 <div class="es"><a href="?format=pdf" class="btn"><i class="icon icon-print"></i> Печать</a></div>
<?php }?>
<div class="clr"></div>

<div class="row-fluid">
    <div class="span12 green">
            <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['text'])&&$_smarty_tpl->getVariable('data')->value['text']['value']!=''){?>
                <h1><?php echo $_smarty_tpl->getVariable('data')->value['text']['value'];?>
</h1>
            <?php }?>

    </div>
</div>

<div class="clr"></div>
<br>
<div class="row-fluid">
    <div class="span7">

<div id="page">

<div id="gallery">
	<table>
		<tr>
			<td style="width: 140px;">
				<div id="thumbs">
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('photo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
					<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('photo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['normal'];?>
" />
				<?php endfor; endif; ?>
				</div>
			</td>
			<td style="vertical-align: top;">
				<div id="panel">
				<img id="largeImage" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('photo')->value[0]['normal'];?>
" />
				</div>
			</td>
		</tr>
	</table>
	
</div>

</div>

<script>

$('#thumbs').delegate('img','click', function(){
	$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description').html($(this).attr('alt'));
});

</script>

</div>
<div class="span4" style="margin-left: 5%;">

	<div class="row-fluid">
    	<div class="price">
    	<?php echo $_smarty_tpl->getVariable('data')->value['room_count']['value'];?>
 к. кв., <?php echo number_format($_smarty_tpl->getVariable('data')->value['price']['value'],0,","," ");?>
 <?php if ($_smarty_tpl->getVariable('data')->value['currency_id']['value_string']!=''){?><?php echo $_smarty_tpl->getVariable('data')->value['currency_id']['value_string'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('L_RUR_SHORT')->value;?>
<?php }?></div>
	</div>
	<hr class="price_hr">

	<div class="row-fluid">
		<span class="realty_view_distance">   		
    		<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['metro_id']['value_string'])&&$_smarty_tpl->getVariable('data')->value['metro_id']['value_string']!=''){?>
    		м. <?php echo $_smarty_tpl->getVariable('data')->value['metro_id']['value_string'];?>
, 
    		<?php }?>

    		<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['distance']['value'])&&$_smarty_tpl->getVariable('data')->value['distance']['value']!=''){?>
    		<?php echo $_smarty_tpl->getVariable('data')->value['distance']['value'];?>

    		<?php }?>
    	</span>
	</div>
	<hr class="price_hr">



	<?php if (isset($_smarty_tpl->getVariable('user_data',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('user_data',null,true,false)->value)){?>
	<div class="contact_div">
		<div class="avtor"><?php echo $_smarty_tpl->getVariable('L_ADV_AUTHOR')->value;?>

		</div>

		<div class="photo">
		<?php if ($_smarty_tpl->getVariable('user_data')->value['imgfile']['value']!=''){?>
		<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/user/<?php echo $_smarty_tpl->getVariable('user_data')->value['imgfile']['value'];?>
" width="70" border="0"/>
		<?php }else{ ?>
		<img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/template/frontend/agency/img/no_photo.png" width="70" border="0"/>
		<?php }?>
		</div>

		<div class="cdetails">
    		<span class="ffio">
    		<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['fio']['value'])&&$_smarty_tpl->getVariable('data')->value['fio']['value']!=''){?>
    		<?php echo $_smarty_tpl->getVariable('data')->value['fio']['value'];?>

    		<?php }else{ ?>
    		<?php echo $_smarty_tpl->getVariable('user_data')->value['fio']['value'];?>

    		<?php }?>
    		</span><br>
    
     		<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['phone']['value'])&&$_smarty_tpl->getVariable('data')->value['phone']['value']!=''){?>
    		<span>т. <?php echo $_smarty_tpl->getVariable('data')->value['phone']['value'];?>
</span><br>
    		<?php }elseif($_smarty_tpl->getVariable('user_data')->value['phone']['value']!=''){?>
    	 	<span>т. <?php echo $_smarty_tpl->getVariable('user_data')->value['phone']['value'];?>
</span><br>
    		<?php }?>
    
     		<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['email']['value'])&&$_smarty_tpl->getVariable('data')->value['email']['value']!=''){?>
    		<span><a href="mailto:<?php echo $_smarty_tpl->getVariable('data')->value['email']['value'];?>
"><?php echo $_smarty_tpl->getVariable('data')->value['email']['value'];?>
</a></span><br>
    		<?php }elseif($_smarty_tpl->getVariable('user_data')->value['email']['value']!=''){?>
    	 	<span><a href="mailto:<?php echo $_smarty_tpl->getVariable('user_data')->value['email']['value'];?>
"><?php echo $_smarty_tpl->getVariable('user_data')->value['email']['value'];?>
</a></span><br>
    		<?php }?> 

    		<?php if ($_smarty_tpl->getVariable('user_data')->value['mobile']['value']!=''){?>
        	<span>тел. <a href="tel:<?php echo $_smarty_tpl->getVariable('user_data')->value['mobile']['value'];?>
"><?php echo $_smarty_tpl->getVariable('user_data')->value['mobile']['value'];?>
</a></span></br>
    		<?php }?>

    		<?php if ($_smarty_tpl->getVariable('user_data')->value['icq']['value']!=''){?>
        	<span>ICQ: <?php echo $_smarty_tpl->getVariable('user_data')->value['icq']['value'];?>
</span><br>
    		<?php }?>
</div>

</div>
<div class="clr"></div>

        <?php if ($_smarty_tpl->getVariable('show_upper')->value=='true'){?>
        <br /><span><a class="btn btn-info" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/upper/realty<?php echo $_smarty_tpl->getVariable('data')->value['id']['value'];?>
"><i class="icon-white icon-chevron-up"></i> <?php echo $_smarty_tpl->getVariable('L_UP_AD')->value;?>
</a></span>
        <?php }?>
        <?php if ($_SESSION['user_id']!=$_smarty_tpl->getVariable('user_data')->value['user_id']['value']&&$_smarty_tpl->getVariable('mailbox_on')->value==1){?>
            <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('apps_mailbox_block')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title_data',array($_smarty_tpl->getVariable('data')->value['topic_id']['value_string'],$_smarty_tpl->getVariable('data')->value['city_id']['value_string'],$_smarty_tpl->getVariable('data')->value['street_id']['value_string']));$_template->assign('to',$_smarty_tpl->getVariable('user_data')->value['user_id']['value']); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <?php }?>

</div>
<?php }?>
    </div>    
</div>
<div class="row-fluid">
    <div class="span12" style="height: 150px;">
    </div>
</div>


<div class="row-fluid">
    <div class="span4">
    <div class="characteristics">Расположение:</div>
    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['city_id']['value_string'])&&$_smarty_tpl->getVariable('data')->value['city_id']['value_string']!=''){?>
    	<?php echo $_smarty_tpl->getVariable('data')->value['city_id']['value_string'];?>
, 
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['district_id']['value_string'])&&$_smarty_tpl->getVariable('data')->value['district_id']['value_string']!=''){?>
    <?php echo $_smarty_tpl->getVariable('data')->value['district_id']['value_string'];?>
 р-ой, 
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['street_id']['value_string'])&&$_smarty_tpl->getVariable('data')->value['street_id']['value_string']!=''){?>
    <?php echo $_smarty_tpl->getVariable('data')->value['street_id']['value_string'];?>
, 
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['number']['value'])&&$_smarty_tpl->getVariable('data')->value['number']['value']!=''){?>
    д. <?php echo $_smarty_tpl->getVariable('data')->value['number']['value'];?>
, 
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['housing']['value'])&&$_smarty_tpl->getVariable('data')->value['housing']['value']!=''){?>
    к. <?php echo $_smarty_tpl->getVariable('data')->value['housing']['value'];?>
,
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['metro_id']['value_string'])&&$_smarty_tpl->getVariable('data')->value['metro_id']['value_string']!=''){?>
    <br> м. <?php echo $_smarty_tpl->getVariable('data')->value['metro_id']['value_string'];?>
 
    <?php }?>
    </div>

    <div class="span3">
    <div class="characteristics">Площадь:</div>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['square_all']['value'])&&$_smarty_tpl->getVariable('data')->value['square_all']['value']!=''){?>
    Общая площадь: <?php echo $_smarty_tpl->getVariable('data')->value['square_all']['value'];?>
 м2 <br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['square_live']['value'])&&$_smarty_tpl->getVariable('data')->value['square_live']['value']!=''){?>
    Жилая площадь: <?php echo $_smarty_tpl->getVariable('data')->value['square_live']['value'];?>
 м2 <br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['square_kitchen']['value'])&&$_smarty_tpl->getVariable('data')->value['square_kitchen']['value']!=''){?>
    Площадь кухни: <?php echo $_smarty_tpl->getVariable('data')->value['square_kitchen']['value'];?>
 м2
    <?php }?>
    </div>

    <div class="span4" style="margin-left: 5%;">
    <div class="characteristics">Основные характеристики:</div>
    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['floor']['value'])&&$_smarty_tpl->getVariable('data')->value['floor']['value']!=''){?>
    	Этаж: <?php echo $_smarty_tpl->getVariable('data')->value['floor']['value'];?>

    	<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['floor_count']['value'])&&$_smarty_tpl->getVariable('data')->value['floor_count']['value']!=''){?>
   			 / <?php echo $_smarty_tpl->getVariable('data')->value['floor_count']['value'];?>
 <br>
   		<?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['balcony']['value'])&&$_smarty_tpl->getVariable('data')->value['balcony']['value']!=''){?>
    Балкон: <?php echo $_smarty_tpl->getVariable('data')->value['balcony']['value'];?>
<br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['bathroom']['value'])&&$_smarty_tpl->getVariable('data')->value['bathroom']['value']!=''){?>
    Санузел: <?php echo $_smarty_tpl->getVariable('data')->value['bathroom']['value'];?>
<br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['hot_water']['value'])&&$_smarty_tpl->getVariable('data')->value['hot_water']['value']!=''){?>
    Горячая вода: <?php echo $_smarty_tpl->getVariable('data')->value['hot_water']['value'];?>
<br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['lift']['value'])&&$_smarty_tpl->getVariable('data')->value['lift']['value']!=''){?>
    Лифт: <?php echo $_smarty_tpl->getVariable('data')->value['lift']['value'];?>
<br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['is_telephone']['value'])&&$_smarty_tpl->getVariable('data')->value['is_telephone']['value']!=''){?>
    Телефон: <?php echo $_smarty_tpl->getVariable('data')->value['is_telephone']['value'];?>
<br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['furniture']['value'])&&$_smarty_tpl->getVariable('data')->value['furniture']['value']!=''){?>
    Мебель: <?php echo $_smarty_tpl->getVariable('data')->value['furniture']['value'];?>
<br>
    <?php }?>

    <?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['year']['value'])&&$_smarty_tpl->getVariable('data')->value['year']['value']!=''){?>
    Год постройки: <?php echo $_smarty_tpl->getVariable('data')->value['year']['value'];?>
 г. <br>
    <?php }?>

    </div>


</div>
<br>
<div class="row-fluid">
    <div class="span12">
    	<div class="characteristics">Комментарий:</div> 
    		<?php if (isset($_smarty_tpl->getVariable('data',null,true,false)->value['comment']['value'])&&$_smarty_tpl->getVariable('data')->value['comment']['value']!=''){?>
    			<?php echo $_smarty_tpl->getVariable('data')->value['comment']['value'];?>

    		<?php }?>
    </div>
</div>



<div id="view_table">
            
            
            
<div class="clr"></div>
<div class="spec_div">
</div>
                <?php if ($_smarty_tpl->getVariable('data')->value['youtube']['value']!=''){?>
                <div align="center">
                <p>&nbsp;</p>
                        <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/js/swfobject.js"></script>
                          <div class="video"><div id="youtube_0">
                          Для просмотра этого видео необходим проигрыватель Flash версии 9 или выше, а также разрешение на выполнение JavaScript.
                          <script type="text/javascript">
                            var params = { allowScriptAccess: "always", bgcolor: "#cccccc", wmode:"opaque", allowfullscreen:true };
                          var atts = { id: "aVideo_0" };
                          var flashvars = {};
                          swfobject.embedSWF("http://www.youtube.com/v/<?php echo $_smarty_tpl->getVariable('data')->value['youtube']['value'];?>
?enablejsapi=1&playerapiid=aVideo_0", "youtube_0", "425", "349", "9", null, flashvars, params, atts);
                          </script>
                          </div>
                          </div>
                    </div>
                    <?php }?>

<div class="clr"></div>
    

			
			<div class="clr"></div>

</div>

<div class="clr"></div>
<div class="row-fluid">
    <div class="span12">
    </div>
</div>

<div class="characteristics">Объект на карте:</div>
<div class="map">
<div id="YMapsID" style="border: 1px solid #e6e6e6; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; width: 100%; height: 250px;"></div>
</div>
<div class="clr"></div>
<!--div class="similar">
<div class="clr"></div>
<?php echo $_smarty_tpl->getVariable('L_SIMILAR')->value;?>
:
<div class="clr"></div>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('similar_data')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
	<div class="similar_item"><?php if (count($_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['image']['image_array'])!=0){?>
		<a href="<?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['href'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/img/data/<?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['image']['image_array'][0]['preview'];?>
" width="100" /></a>
	<?php }?>
	<a href="<?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['href'];?>
"><?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['topic_id']['value_string'];?>
<br /> <?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['city_id']['value_string'];?>
, <?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['street_id']['value_string'];?>
<br/><?php echo number_format($_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['price']['value'],0,',',' ');?>
 <?php echo $_smarty_tpl->getVariable('similar_data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['currency_id']['value_string'];?>
</a>&nbsp;
	</div>
<?php endfor; endif; ?>

</div-->
<div class="clr"></div>
<?php if ($_smarty_tpl->getVariable('apps_comment_on')->value==1){?>
	<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('app_comment_panel')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('apps_reservation_on')->value==1){?>
	<div class="res" data-id="<?php echo $_smarty_tpl->getVariable('data')->value['id']['value'];?>
"></div>
	
	<script>
	$(document).ready(function(){
		var id=$('.res').attr('data-id');
		$('.res').load(estate_folder+'/apps/reservation/js/ajax.php?action=get_reservation_panel&id='+id);
	});
	</script>
	
<?php }?>