<div class="news">

<div class="questions_specialist">ВОПРОСЫ СПЕЦИАЛИСТАМ:</div>
{section name=i loop=$news_list_column}
<div>
	{$news_list_column[i].title}
	<br><br>
			<a href="" class="spoiler_links">{$news_list_column[i].anons|strip_tags|truncate:100}</a>
		<br><br>
		<div class="spoiler_body">
		<div class="select_box_td">{$news_list_column[i].description|strip_tags}</div>
		</div>
	<br>
</div>

{/section}
<div class="all">
	<a href="/FAQ">cм. все вопросы</a>
</div>
</div>