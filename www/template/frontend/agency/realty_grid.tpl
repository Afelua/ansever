<script src="{$estate_folder}/apps/system/js/json2.js" type="text/javascript"></script>

<div class="full_Page">


{assign var="lang_topic_name" value="name_{$smarty.session._lang}"}

{include file='realty_grid_thumbs.tpl.html'}

{if $main_file_tpl != ''}
    <div class="right_catalog">

    <!--a onclick="hidetxt(); return false;" href="#" rel="nofollow">Ссылка 1</a-->
    {include file="realty_grid_thumbs_map.tpl"}

    <div class="row-fluid">
    	<div class="span6 button_take_off">
    	Снять
    	</div>
    	<div class="span6" style="text-align: center;margin-left: 0px;">
    	<a href="" class="button_pass">Сдать</a>
    	</div>
	</div>

	<div id="search_main">
			{if !$is_account and !preg_match('/mapviewer/', $smarty.server.REQUEST_URI)}
        		{include file="search_form.tpl"}
    		{else if $is_account}
        		{include file="remember.tpl"}
    		{/if}
	</div>
	{include file="news_list_column.tpl"}
	<hr class="news_hr">
	{include file="realty_grid_thumbs_what.html"}
	</div>

{/if}
</div>






	<script type="text/javascript">
	var realty_geo_data = {$grid_geodata}; 
	</script>
	

		{literal}
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
		{/literal}

	

<script type="text/javascript">
$(document).ready(function(){
 $('#test1').css("display", "none");
});
</script>