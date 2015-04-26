<script src="{$estate_folder}/apps/system/js/json2.js" type="text/javascript"></script>

<div class="b-carousel2"> <!-- контейнер, в котором будет карусель -->
	
		<div class="b-carousel-button-left"></div> <!-- левая кнопка -->
		<div class="b-carousel-button-right"></div> <!-- правая кнопка -->
		
		<div class="h-carousel-wrapper"> <!-- видимая область карусели -->
			<div class="h-carousel-items"> <!-- весь набор элементов карусели -->
			
				{section name=i loop=$grid_items}
	<a href="{if $grid_items[i].url!=''}{$grid_items[i].url}{else}{$grid_items[i].href}{/if}" title="{$grid_items[i].city}/{$grid_items[i].district}/{$grid_items[i].street}">


	<div class="t_i_i{if $smarty.section.i.index is even} t_i_odd{/if}{if $grid_items[i].hot==1}{if $smarty.section.i.index is even} t_i_opayed{else} t_i_payed{/if}{/if}{if $grid_items[i].bold_status==1} grid_thumbs_bold{/if}{if $grid_items[i].premium_status==1} grid_thumbs_premium{/if}" style="margin: 10px 7px 10px 7px;">
		{if $grid_items[i].img != '' }
		<div class="t_i_photo t_i_photo_s">
			
				<span class="t_i_desc">{$grid_items[i].text|strip_tags|truncate:200}
				</span>
				<img src="{$estate_folder}/img/data/{$grid_items[i].img[0].preview}"
				alt="{$grid_items[i].city}/{$grid_items[i].district}/{$grid_items[i].street}" />
		</div>
		{else}
		<div class="t_i_photo t_i_photo_s">
			<a
				href="{if $grid_items[i].url!=''}{$grid_items[i].url}{else}{$grid_items[i].href}{/if}"
				title="{$grid_items[i].city}/{$grid_items[i].district}/{$grid_items[i].street}">
				<span class="t_i_desc">{$grid_items[i].text|strip_tags|truncate:200}
				</span>
				<img src="{$estate_folder}/img/no_foto.png"
				alt="{$grid_items[i].city}/{$grid_items[i].district}/{$grid_items[i].street}" />
			</a>
		</div>
		{/if}

		<div class="t_i_title">
			{if $grid_items[i].metro!=''}
				{if $grid_items[i].metro=='Девяткино' || 
				$grid_items[i].metro=='Гражданский проспект' || 
				$grid_items[i].metro=='Академическая' || 
				$grid_items[i].metro=='Политехническая' ||
				$grid_items[i].metro=='Площадь Мужества' || 
				$grid_items[i].metro=='Лесная' ||
				$grid_items[i].metro=='Выборгская' || 
				$grid_items[i].metro=='Площадь Ленина' ||
				$grid_items[i].metro=='Чернышевская' || 
				$grid_items[i].metro=='Площадь Восстания' ||
				$grid_items[i].metro=='Владимирская' || 
				$grid_items[i].metro=='Пушкинская' ||
				$grid_items[i].metro=='Технологический институт' || 
				$grid_items[i].metro=='Балтийская' ||
				$grid_items[i].metro=='Нарвская' || 
				$grid_items[i].metro=='Кировский завод' ||
				$grid_items[i].metro=='Автово' || 
				$grid_items[i].metro=='Девяткино' ||
				$grid_items[i].metro=='Ленинский проспект' || 
				$grid_items[i].metro=='Проспект Ветеранов'
				}
				<p class="circle" style="background:#ff0033;"></p>
				<p class="listitemmetro" style="color:#ff0033;">
					<span>{$grid_items[i].metro}</span>
				</p>
				{/if}

				{if $grid_items[i].metro=='Парнас' ||
				$grid_items[i].metro=='Проспект Просвещения' || 
				$grid_items[i].metro=='Озерки' || 
				$grid_items[i].metro=='Удельная' ||
				$grid_items[i].metro=='Пионерская' || 
				$grid_items[i].metro=='Чёрная речка' ||
				$grid_items[i].metro=='Петроградская' || 
				$grid_items[i].metro=='Горьковская' ||
				$grid_items[i].metro=='Невский проспект' || 
				$grid_items[i].metro=='Сенная площадь' ||
				$grid_items[i].metro=='Фрунзенская' || 
				$grid_items[i].metro=='Московские ворота' ||
				$grid_items[i].metro=='Электросила' || 
				$grid_items[i].metro=='Парк Победы' ||
				$grid_items[i].metro=='Московская' || 
				$grid_items[i].metro=='Звездная' ||
				$grid_items[i].metro=='Купчино' 
				}
				<p class="circle" style="background:#0066cc;"></p>
				<p class="listitemmetro" style="color:#0066cc;">
					<span>{$grid_items[i].metro}</span>
				</p>
				{/if}


				{if $grid_items[i].metro=='Приморская' ||
				$grid_items[i].metro=='Василеостровская' || 
				$grid_items[i].metro=='Гостиный двор' || 
				$grid_items[i].metro=='Маяковская' ||
				$grid_items[i].metro=='Площадь Александра Невского' || 
				$grid_items[i].metro=='Елизаровская' ||
				$grid_items[i].metro=='Ломоносовская' || 
				$grid_items[i].metro=='Пролетарская' ||
				$grid_items[i].metro=='Обухово' || 
				$grid_items[i].metro=='Рыбацкое' 
				}
				<p class="circle" style="background:#009966;"></p>
				<p class="listitemmetro" style="color:#009966;">
					<span>{$grid_items[i].metro}</span>
				</p>
				{/if}

				{if $grid_items[i].metro=='Спасская' ||
				$grid_items[i].metro=='Достоевская' || 
				$grid_items[i].metro=='Лиговский проспект' || 
				$grid_items[i].metro=='Новочеркасская' ||
				$grid_items[i].metro=='Ладожская' || 
				$grid_items[i].metro=='Проспект Большевиков' ||
				$grid_items[i].metro=='Улица Дыбенко' 
				}
				<p class="circle" style="background:#ff6600;"></p>
				<p class="listitemmetro" style="color:#ff6600;">
					<span>{$grid_items[i].metro}</span>
				</p>
				{/if}

				{if $grid_items[i].metro=='Комендантский проспект' ||
				$grid_items[i].metro=='Старая Деревня' || 
				$grid_items[i].metro=='Крестовский остров' || 
				$grid_items[i].metro=='Чкаловская' ||
				$grid_items[i].metro=='Спортивная' || 
				$grid_items[i].metro=='Адмиралтейская' ||
				$grid_items[i].metro=='Садовая' ||
				$grid_items[i].metro=='Звенигородская' ||
				$grid_items[i].metro=='Обводный канал' || 
				$grid_items[i].metro=='Волковская' ||
				$grid_items[i].metro=='Бухарестская' ||		
				$grid_items[i].metro=='Международная'		
				}
				<p class="circle" style="background:#663399;"></p>
				<p class="listitemmetro" style="color:#663399;">
					<span>{$grid_items[i].metro}</span>
				</p>
				{/if}

			{/if}


			<h3 class="t_i_h3">

				<span> {if
					$grid_items[i].city ne ''} {$grid_items[i].city}{if
					$grid_items[i].street ne ''}, {$grid_items[i].street}{if
					$grid_items[i].number ne ''}, {$grid_items[i].number}{/if}{/if}
					{else} {if $grid_items[i].street ne ''} {$grid_items[i].street}{if
					$grid_items[i].number ne ''}, {$grid_items[i].number}{/if} {/if}
					{/if} </span>
			</h3>

			<div class="t_i_data">

				<span>{$grid_items[i].room_count} к. кв.</span>, 
				<span>{if $grid_items[i].square_all ne
				''}{$grid_items[i].square_all}{/if} м2</span>
			</div>

			<p>
				<span class="listitemprice">{$grid_items[i].price|number_format:0:",":"
					"} {if $grid_items[i].currency_name != ''}{$grid_items[i].currency_name}{/if} руб.
 					
					</span>
			</p>

   				
		</div>

	</div>

</a>
 {/section}
				
			</div>
		</div>
		
	</div>



<div class="grid">
	

	</a>
</div>
{literal}
	<script>
	$(document).ready(function(){

	$(".b-carousel-button-right").click(function(){ // при клике на правую кнопку запускаем следующую функцию:
		$(this).parents(".b-carousel2").find(".h-carousel-items").animate({left: "-222px"}, 200); // производим анимацию: блок с набором картинок уедет влево на 222 пикселя (это ширина одного прокручиваемого элемента) за 200 милисекунд.
		setTimeout(function () { // устанавливаем задержку времени перед выполнением следующих функций. Задержка нужна, т.к. эти ффункции должны запуститься только после завершения анимации.
			$(this).parents(".b-carousel2").find(".h-carousel-items .b-carousel-block").eq(0).clone().appendTo(".h-carousel-items"); // выбираем первый элемент, создаём его копию и помещаем в конец карусели
			$(this).parents(".b-carousel2").find(".h-carousel-items .b-carousel-block").eq(0).remove(); // удаляем первый элемент карусели		
			$(this).parents(".b-carousel2").find(".h-carousel-items").css({"left":"0px"}); // возвращаем исходное смещение набора набора элементов карусели
		}, 300);
	});
	
	$(".b-carousel-button-left").click(function(){ // при клике на левую кнопку выполняем следующую функцию:		
		$(this).parents(".b-carousel2").find(".h-carousel-items .b-carousel-block").eq(-1).clone().prependTo(".h-carousel-items"); // выбираем последний элемент набора, создаём его копию и помещаем в начало набора	
		$(this).parents(".b-carousel2").find(".h-carousel-items").css({"left":"-222px"}); // устанавливаем смещение набора -222px		
		$(this).parents(".b-carousel2").find(".h-carousel-items").animate({left: "0px"}, 200); // за 200 милисекунд набор элементов плавно переместится в исходную нулевую точку
		$(this).parents(".b-carousel2").find(".h-carousel-items .b-carousel-block").eq(-1).remove(); // выбираем последний элемент карусели и удаляем его
	});
	
});
	</script>
	{/literal}

