<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 19:02:13
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\map-arenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158115538d1353ec384-97739459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd723732cdf4ddef8aaafc8a0eeef929c11501d' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\map-arenda.tpl',
      1 => 1429786912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158115538d1353ec384-97739459',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Примеры YMapsML. Отображение простого объекта на карте.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard,geoXml.load&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript">
        window.onload = function () { 
            ymaps.ready(function () {
                var myMap = new ymaps.Map('map', {
                        center: [55.76, 37.64],
                        zoom: 8
                    }),
                    url = "http://velopark-spb.ru/intro.xml"; 
          //После того, как данные YmapsMl-файла загрузятся, вызывается callback-функция 
                ymaps.geoXml.load(url)
                     .then(function (res) {
  //Добавляем коллекцию геообъектов на карту  
                         myMap.geoObjects.add(res.geoObjects);
                     });
            })
         }
    </script>
</head>
<body>
<a href="#" onclick="hiddenShow();" id="but"><span id="text_map_open">Открыть</span> карту аренды</a>
</body>
</html>