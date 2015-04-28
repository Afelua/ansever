<?php /* Smarty version Smarty-3.0.8, created on 2015-04-28 17:18:34
         compiled from "Z:/home/anseverv2/www/template/frontend/agency\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24858553f506a79fdb8-18070067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b817acba04599655a4783f534684627fdddaa6' => 
    array (
      0 => 'Z:/home/anseverv2/www/template/frontend/agency\\footer.tpl',
      1 => 1430212710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24858553f506a79fdb8-18070067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
    <div id="footer">
    <table style="margin: 20px auto; width: 1000px;">
        <tr>
            <td style="width: 250px; vertical-align: top;">
                <div class="footer_Title">О нас</div>
            <div class="footer_Text">
            Мы находимся:<br>
            г. Санкт-Петербург, 6-ая линия В.О., д. 43<br>
            Мы работаем по будням в 10.00 до 21.00,<br>
            по выходным с 11.00 до 18.00
            </div>

            </td>
            <td style="width: 250px; vertical-align: top;">
                <div class="footer_Title">Обратная связь</div>
            <div class="footer_Text">
                Наш телефон: <a href="tel:+7 (812) 327-49-79">(812) 327-49-79</a><br>
                Наша почта: <a href="mailto:info@ansever.ru">info@ansever.ru</a><br><br>
                <a href="http://vk.com/club21068051"><img dir="/" src="/img/footer_vk.png" alt="" height="42" width="42"></a>
                <img dir="/" src="/img/footer_fb.png" alt="" height="42" width="42">
                <a href="https://twitter.com/ansever_spb" target="_blank"><img dir="/" src="/img/footer_tw.png" alt="" height="42" width="42"></a>
            </div>
            </td>
            <td style="width: 200px; vertical-align: top;">
            <div style="padding: 0px 20px;">
            <hr>
            <div class="footer_Big">Нужна помощь? <br> Звоните: <a href="tel:+7 (812) 327-49-79">(812) 327-49-79</a></div>
            <hr>
            </div>
            </td>
        </tr>

    </table>
    <?php $_template = new Smarty_Internal_Template('sitebill_footer.tpl.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
         <?php if ($_smarty_tpl->getVariable('show_demo_banners')->value!=1){?>
            
            
        <?php }?>
                        
        <?php if ($_smarty_tpl->getVariable('show_demo_banners')->value==1){?>
            <?php $_template = new Smarty_Internal_Template('sitebill_footer.tpl.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <?php }?>
    </div>