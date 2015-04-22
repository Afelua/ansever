<script src="{$estate_folder}/apps/system/js/realtymap.js" type="text/javascript"></script>
<script>
var loc_objects={$geoobjects_collection_clustered};
var map_type='{$map_type}';
{literal}
$(document).ready(function(){
var RM=new RealtyMap();
RM.initJSON('grid_realty_map', loc_objects, map_type);
});
{/literal}
</script>

<div class="bigmap">
<div id="grid_realty_map" style="height: 400px;"></div>
</div>