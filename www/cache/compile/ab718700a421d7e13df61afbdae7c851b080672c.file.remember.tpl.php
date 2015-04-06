<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:57
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\remember.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319475501e845c39996-20582946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab718700a421d7e13df61afbdae7c851b080672c' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\remember.tpl',
      1 => 1424158314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319475501e845c39996-20582946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('apps_upper_enable')->value){?>
<div class="clear"><h1>Приветствуем, <?php echo $_smarty_tpl->getVariable('fio')->value;?>
! </h1></div>
<?php if (!$_smarty_tpl->getVariable('upps_left')->value&&$_smarty_tpl->getVariable('packs_left')->value==0){?>
<p>Вы исчерпали лимит поднятий за неделю.</p>
<?php }else{ ?>
	
<p>У вас осталось <?php if ($_smarty_tpl->getVariable('upps_left')->value!=''){?><?php echo $_smarty_tpl->getVariable('upps_left')->value;?>
<?php }else{ ?>0<?php }?> подъема(ов) объявлений.</p>
<?php }?>
<p>В дополнительных пакетах: <?php echo $_smarty_tpl->getVariable('packs_left')->value;?>
</p>
<p>Количество подъемов обновляется раз в неделю.</p>

<a id="buy_ups" href="javascript:void(0);">Покупка пакета поднятий</a>


<style>

#buy_ups_window {
padding: 10px;
background-color: #eee;
position: absolute;
display: none;
}


#buy_ups_window #options {
display: block;
}
#buy_ups_window #payment {
display: none;
}

</style>

<script type="text/javascript">
$(document).ready(function(){
	
	
	$("#buy_ups").click(function(e){
        var ups_price=<?php echo $_smarty_tpl->getVariable('ups_price')->value;?>
;
		mvwindow=$("#buy_ups_window");
		mvwindow.css({'left':(e.pageX+20)+'px','top':(e.pageY+20)+'px'}).toggle();
		var days=mvwindow.find("[name=count]");
		var sum=mvwindow.find("#calc_price");
		var closer=mvwindow.find("#close");
		sum.text(ups_price);
		
		var submit=mvwindow.find("[type=submit]");
		days.keyup(function(){
			var v=Number($(this).val());
			if(isNaN(v)){
				v=1;
				$(this).val(1);
			}else if(v==0){
				v=1;
				$(this).val(1);
			}
			sum.text(v*ups_price);
		});
		
		closer.click(function(){
			$("#buy_ups_window").hide();
		});
			
		submit.click(function(){
			var v=days.val();
			var v=v.replace(/\D/g,'');
			var d=+v;
			if(d>0){
				$.ajax({
					url: estate_folder+'/js/ajax.php',
					dataType: 'html',
					type: 'post',
					data: {action:'make_special_payment',days:d,per_day:ups_price,payment_type:'buy_ups'},
					success: function(html){
						if(html!='error'){
							mvwindow.find('#options').html(html);
							setTimeout(function(){
								$('#buy_ups').remove();
								mvwindow.hide();
								mvwindow.remove();
							},3000);
						}
					},
					error: function(){
						
					}
				});
			}
		});
	});
	
	
});
</script>


<div id="buy_ups_window">
	<div id="options">
		<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" name="realty_id" />
		<table>
			<tr>
				<td>Количество поднятий</td>
				<td><input type="text" value="1" name="count" /></td>
			</tr>
			<tr>
				<td>Цена</td>
				<td><span id="calc_price"></span></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Оплатить" /></td>
			</tr>
		</table>
		<button id="close">Отменить</button>
	</div>
	
</div>
<?php }?>
<p align="left">
Если вы хотите сдать или продать свою недвижимость,<br>то внимательно заполняйте все поля формы.<br> Чем более полную информацию вы укажете, тем быстрее будет найден клиент
</p>