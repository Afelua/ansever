<div class="news" style="background:#fff;">

<div class="questions_specialist">ВОПРОСЫ СПЕЦИАЛИСТАМ:</div>
{section name=i loop=$news_list_column}
<div>
	
	<br>
		{$news_list_column[i].date}
		<a href="" class="spoiler_links">{$news_list_column[i].title}</a>
		<div class="spoiler_body">
		<div class="select_box_td"><br>{$news_list_column[i].anons}<a href="{$news_list_column[i].href}" class="read_question">Читать дальше</a></div>
		</div>
	<br>
</div>

{/section}
<br>
<div class="all">
	<a href="/news">cм. все вопросы</a>
</div>
</div>