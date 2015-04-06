{literal}
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
{/literal}

{if $map_type eq 'google'}
	{literal}
	<script type="text/javascript">
	function initialize() {
		
		
		{/literal}
		{if $data.geo.value.lat!='' && $data.geo.value.lng!=''}
			var obj_lat={$data.geo.value.lat};
			var obj_lng={$data.geo.value.lng};
		{else}
		var obj_lat='';
		var obj_lng='';
		{/if}
		var address='{if $data.city_id.value_string eq ''}{$city_by_default}{else}{$data.city_id.value_string|trim}{/if}{if $data.street_id.value_string != ''}, {$data.street_id.value_string|trim}{/if}{if $data.number.value != '' }, {$data.number.value|trim}{/if}';
		{literal}
		
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
	{/literal}
	</script>
{else}
	{literal}
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
		
		{/literal}
		{if $data.geo.value.lat!='' && $data.geo.value.lng!=''}
			var obj_lat={$data.geo.value.lat};
			var obj_lng={$data.geo.value.lng};
		{else}
		var obj_lat='';
		var obj_lng='';
		{/if}
		
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
		        "{if $data.city_id.value_string eq ''}{$city_by_default}{else}{$data.city_id.value_string}{/if}, {if $data.street_id.value_string != ''} {$data.street_id.value_string}, {/if} {if $data.number.value != '' } {$data.number.value}{/if}", {
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
			
		
		
		{literal}
		
		
    }
	</script>
	{/literal}
{/if}
{if $apps_pdfreport_enabled==1}
 <div class="es"><a href="?format=pdf" class="btn"><i class="icon icon-print"></i> Печать</a></div>
{/if}
<div class="clr"></div>

<div class="row-fluid">
    <div class="span12 green">
            {if isset($data.text) && $data.text.value != ''}
                <h1>{$data.text.value}</h1>
            {/if}

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
				{section name=j loop=$photo}
					<img src="{$estate_folder}/img/data/{$photo[j].normal}" />
				{/section}
				</div>
			</td>
			<td style="vertical-align: top;">
				<div id="panel">
				<img id="largeImage" src="{$estate_folder}/img/data/{$photo[0].normal}" />
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
    	{$data.room_count.value} к. кв., {$data.price.value|number_format:0:",":" "} {if $data.currency_id.value_string != ''}{$data.currency_id.value_string}{else}{$L_RUR_SHORT}{/if}</div>
	</div>
	<hr class="price_hr">

	<div class="row-fluid">
		<span class="realty_view_distance">   		
    		{if isset($data.metro_id.value_string) && $data.metro_id.value_string != ''}
    		м. {$data.metro_id.value_string}, 
    		{/if}

    		{if isset($data.distance.value) && $data.distance.value != ''}
    		{$data.distance.value}
    		{/if}
    	</span>
	</div>
	<hr class="price_hr">



	{if isset($user_data) && !empty($user_data)}
	<div class="contact_div">
		<div class="avtor">{$L_ADV_AUTHOR}
		</div>

		<div class="photo">
		{if $user_data.imgfile.value != ''}
		<img src="{$estate_folder}/img/data/user/{$user_data.imgfile.value}" width="70" border="0"/>
		{else}
		<img src="{$estate_folder}/template/frontend/agency/img/no_photo.png" width="70" border="0"/>
		{/if}
		</div>

		<div class="cdetails">
    		<span class="ffio">
    		{if isset($data.fio.value) && $data.fio.value!=''}
    		{$data.fio.value}
    		{else}
    		{$user_data.fio.value}
    		{/if}
    		</span><br>
    
     		{if isset($data.phone.value) && $data.phone.value!=''}
    		<span>т. {$data.phone.value}</span><br>
    		{elseif $user_data.phone.value != ''}
    	 	<span>т. {$user_data.phone.value}</span><br>
    		{/if}
    
     		{if isset($data.email.value) && $data.email.value!=''}
    		<span><a href="mailto:{$data.email.value}">{$data.email.value}</a></span><br>
    		{elseif $user_data.email.value != ''}
    	 	<span><a href="mailto:{$user_data.email.value}">{$user_data.email.value}</a></span><br>
    		{/if} 

    		{if $user_data.mobile.value != ''}
        	<span>тел. <a href="tel:{$user_data.mobile.value}">{$user_data.mobile.value}</a></span></br>
    		{/if}

    		{if $user_data.icq.value != ''}
        	<span>ICQ: {$user_data.icq.value}</span><br>
    		{/if}
</div>

</div>
<div class="clr"></div>

        {if $show_upper == 'true'}
        <br /><span><a class="btn btn-info" href="{$estate_folder}/upper/realty{$data.id.value}"><i class="icon-white icon-chevron-up"></i> {$L_UP_AD}</a></span>
        {/if}
        {if $smarty.session.user_id!=$user_data.user_id.value && $mailbox_on==1}
            {include file=$apps_mailbox_block title_data=[$data.topic_id.value_string,$data.city_id.value_string,$data.street_id.value_string] to=$user_data.user_id.value}
        {/if}

</div>
{/if}
    </div>    
</div>
<div class="row-fluid">
    <div class="span12" style="height: 150px;">
    </div>
</div>


<div class="row-fluid">
    <div class="span4">
    <div class="characteristics">Расположение:</div>
    {if isset($data.city_id.value_string) && $data.city_id.value_string != ''}
    	{$data.city_id.value_string}, 
    {/if}

    {if isset($data.district_id.value_string) && $data.district_id.value_string != ''}
    {$data.district_id.value_string} р-ой, 
    {/if}

    {if isset($data.street_id.value_string) && $data.street_id.value_string != ''}
    {$data.street_id.value_string}, 
    {/if}

    {if isset($data.number.value) && $data.number.value != ''}
    д. {$data.number.value}, 
    {/if}

    {if isset($data.housing.value) && $data.housing.value != ''}
    к. {$data.housing.value},
    {/if}

    {if isset($data.metro_id.value_string) && $data.metro_id.value_string != ''}
    <br> м. {$data.metro_id.value_string} 
    {/if}
    </div>

    <div class="span3">
    <div class="characteristics">Площадь:</div>

    {if isset($data.square_all.value) && $data.square_all.value != ''}
    Общая площадь: {$data.square_all.value} м2 <br>
    {/if}

    {if isset($data.square_live.value) && $data.square_live.value != ''}
    Жилая площадь: {$data.square_live.value} м2 <br>
    {/if}

    {if isset($data.square_kitchen.value) && $data.square_kitchen.value != ''}
    Площадь кухни: {$data.square_kitchen.value} м2
    {/if}
    </div>

    <div class="span4" style="margin-left: 5%;">
    <div class="characteristics">Основные характеристики:</div>
    {if isset($data.floor.value) && $data.floor.value != ''}
    	Этаж: {$data.floor.value}
    	{if isset($data.floor_count.value) && $data.floor_count.value != ''}
   			 / {$data.floor_count.value} <br>
   		{/if}
    {/if}

    {if isset($data.balcony.value) && $data.balcony.value != ''}
    Балкон: {$data.balcony.value}<br>
    {/if}

    {if isset($data.bathroom.value) && $data.bathroom.value != ''}
    Санузел: {$data.bathroom.value}<br>
    {/if}

    {if isset($data.hot_water.value) && $data.hot_water.value != ''}
    Горячая вода: {$data.hot_water.value}<br>
    {/if}

    {if isset($data.lift.value) && $data.lift.value != ''}
    Лифт: {$data.lift.value}<br>
    {/if}

    {if isset($data.is_telephone.value) && $data.is_telephone.value != ''}
    Телефон: {$data.is_telephone.value}<br>
    {/if}

    {if isset($data.furniture.value) && $data.furniture.value != ''}
    Мебель: {$data.furniture.value}<br>
    {/if}

    {if isset($data.year.value) && $data.year.value != ''}
    Год постройки: {$data.year.value} г. <br>
    {/if}

    </div>


</div>
<br>
<div class="row-fluid">
    <div class="span12">
    	<div class="characteristics">Комментарий:</div> 
    		{if isset($data.comment.value) && $data.comment.value != ''}
    			{$data.comment.value}
    		{/if}
    </div>
</div>



<div id="view_table">
            
            
            
<div class="clr"></div>
<div class="spec_div">
</div>
                {if $data.youtube.value != ''}
                <div align="center">
                <p>&nbsp;</p>
                        <script type="text/javascript" src="{$estate_folder}/js/swfobject.js"></script>
                          <div class="video"><div id="youtube_0">
                          Для просмотра этого видео необходим проигрыватель Flash версии 9 или выше, а также разрешение на выполнение JavaScript.
                          <script type="text/javascript">
                            var params = { allowScriptAccess: "always", bgcolor: "#cccccc", wmode:"opaque", allowfullscreen:true };
                          var atts = { id: "aVideo_0" };
                          var flashvars = {};
                          swfobject.embedSWF("http://www.youtube.com/v/{$data.youtube.value}?enablejsapi=1&playerapiid=aVideo_0", "youtube_0", "425", "349", "9", null, flashvars, params, atts);
                          </script>
                          </div>
                          </div>
                    </div>
                    {/if}

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
{$L_SIMILAR}:
<div class="clr"></div>
{section name=x loop=$similar_data}
	<div class="similar_item">{if $similar_data[x].image.image_array|count ne 0}
		<a href="{$similar_data[x].href}"><img src="{$estate_folder}/img/data/{$similar_data[x].image.image_array[0].preview}" width="100" /></a>
	{/if}
	<a href="{$similar_data[x].href}">{$similar_data[x].topic_id.value_string}<br /> {$similar_data[x].city_id.value_string}, {$similar_data[x].street_id.value_string}<br/>{$similar_data[x].price.value|number_format:0:',':' '} {$similar_data[x].currency_id.value_string}</a>&nbsp;
	</div>
{/section}

</div-->
<div class="clr"></div>
{if $apps_comment_on==1}
	{include file=$app_comment_panel}
{/if}
{if $apps_reservation_on==1}
	<div class="res" data-id="{$data.id.value}"></div>
	{literal}
	<script>
	$(document).ready(function(){
		var id=$('.res').attr('data-id');
		$('.res').load(estate_folder+'/apps/reservation/js/ajax.php?action=get_reservation_panel&id='+id);
	});
	</script>
	{/literal}
{/if}