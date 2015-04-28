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
    {include file='sitebill_footer.tpl.html'}
         {if $show_demo_banners != 1}
            {literal}
            {/literal}
        {/if}
                        
        {if $show_demo_banners == 1}
            {include file='sitebill_footer.tpl.html'}
        {/if}
    </div>