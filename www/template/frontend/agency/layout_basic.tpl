<div id="content">
            {include file="top_fixed_menu.tpl.html"}
    

		<div class="maincontent">

			{if $geodata_on_home}


			<div id="slides">
				<div class="slides_container">
					<div class="example2 slider_background">
							<span class="slider_title">Быстрые решения</span>
							<span class="slider_subtitle">Аренда квартир. Более 300 лучших предложений в Санкт-Петербурге</span>
							<a href="#" class="slider_link">Читать дальше ></a>
						<img src="/img/slider1.jpg" width="1024" style="height: 250px;" alt="Slide 1">						
					</div>

					<div class="example2 slider_background">
						<span class="slider_title">Быстрые решения</span>
						<span class="slider_subtitle">Аренда квартир. Более 300 лучших предложений в Санкт-Петербурге</span>
						<a href="#" class="slider_link">Читать дальше ></a>
						<img src="/img/slider1.jpg" width="1024" style="height: 250px;" alt="Slide 2">
					</div>

					<div class="example2 slider_background">
						<span class="slider_title">Быстрые решения</span>
						<span class="slider_subtitle">Аренда квартир. Более 300 лучших предложений в Санкт-Петербурге</span>
						<a href="#" class="slider_link">Читать дальше ></a>
							
						<img src="/img/slider1.jpg" width="1024" style="height: 250px;" alt="Slide 3"></a>
					</div>
				</div>
				<a href="#" class="prev"><img src="/img/left-arrow-gray-hi.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="/img/right-arrow-gray-hi.png" width="24" height="43" alt="Arrow Next"></a>
			</div>


			<div class="special"> 
			<table width="100%">
			<tr>
				<td>
				<img src="/img/check.png" style="float:left;">
				</td>
				<td width="80%">
				
				<div class="hotspecial">
				
				<b>СРОЧНО!</b><br>
				Сдается 3 к.кв. м. Коменданский пр. Авиаконструкторов д.3 Общая пл. 106 метров. 35 000 руб./мес.

				</div>
				</td>
				<td width="20%">
				<span>
				<a href="" class="showall">ПОДРОБНЕЕ</a>
				</span>
				</td>


			</tr>
			</table>
			</div>
			<br><br>
			<table>
			<tr>
			<td width="254px">
			<span class="nameSpecial">Лучшие предложения.</span>
			</td>
			<td width="400px">
			<span class="nameBig">Аренда</span>
			</td>
			<td width="270px" style="text-align: center; height: 56px; vertical-align: bottom;">
			<span class="allview"><a href="">Смотреть все предложения </a></span>
			</td>
			</tr>
			</table>
				<div id="tabs-services-special">{$L_TABS_SPECIAL}</div>
                <!-- {include file="map.tpl"}-->
            <div class="clear"></div>

            <br/>

            <br>
            <table>
			<tr>
			<td width="254px">
			<span class="nameSpecial">Лучшие предложения.</span>
			</td>
			<td width="400px">
			<span class="nameBig">Продажа</span>
			</td>
			<td width="270px" style="text-align: center; height: 56px; vertical-align: bottom;">
			<span class="allview"><a href="">Смотреть все предложения </a></span>
			</td>
			</tr>
			</table>
				<div id="tabs-services-special2">{$L_TABS_SPECIAL}</div>
						<table>
				<tr>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>
					<td width="25">
					</td>
					<td>
						<img src="/img/Plus.png">
					</td>									
				</tr>
				<tr>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>
					<td width="25">
					</td>
					<td class="text_Plus">
						<span class="text_Plus_bold"> Специалист</span><br><br>
Работая с недвижимостью более 7 лет, с уверенностью могу сказать - я отличный специалист! Нагля Артем.
					</td>									
				</tr>

			</table>
		</div>
			{else}
			
				{if $main_file_tpl != ''}
				     <div class="clear"></div>
				    {include file="$main_file_tpl"}
				{else}
					{$main}
				{/if}

			{/if}
			<div class="clear"></div>
			<br><br>


		<div class="clear"></div>
	</div>	
{include file="footer.tpl"}	

<script type="text/javascript">
$(document).ready(function(){
 $('#test').css("display", "none");
});
</script>


<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(){
					$('.caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log(current);
					};
				}
			});
		});
	</script>