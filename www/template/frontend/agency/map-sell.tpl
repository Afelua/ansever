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