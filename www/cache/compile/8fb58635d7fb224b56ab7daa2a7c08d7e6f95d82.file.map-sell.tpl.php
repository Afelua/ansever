<?php /* Smarty version Smarty-3.0.8, created on 2015-04-23 02:45:24
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\map-sell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288635537ec4491c6c7-37161134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb58635d7fb224b56ab7daa2a7c08d7e6f95d82' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\map-sell.tpl',
      1 => 1429728319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288635537ec4491c6c7-37161134',
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
                var myMap = new ymaps.Map('map2', {
                        center: [55.76, 37.64],
                        zoom: 8
                    }),
                    url = "http://velopark-spb.ru/intro2.xml"; 
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

<div id="map2" style="width:600px;height:400px"></div>
</body>
</html>