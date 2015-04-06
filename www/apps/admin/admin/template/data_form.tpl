<script type="text/javascript">
{literal}
$(document).ready(function(){
	/*$("#formsubmit").click(function(){
		var _this=$(this);
		if(_this.data('valid_me')!==undefined && _this.data('valid_me').length>0){
			var vm=_this.data('valid_me');
			var form=_this.parents('form').eq(0);
			for(var i in vm){
				console.log(vm[i]);
			}
			
		}
		return false;
		_this.data('valid_me').hide();
		$('<p class="loading">Сохраняю данные...</p>').insertAfter(this).slideDown("fast");
	});
	*/
	$('.tooltipe_block').popover({trigger: 'hover'});
	
	
	
});
{/literal}
</script>

<div class="tabbed_form_block">

{if $form_error ne ''}
	<p class="error">{$form_error}</p>
{/if}

{$form_elements.form_header}

{if isset($form_elements.scripts) && $form_elements.scripts|count>0}
	{foreach from=$form_elements.scripts item=form_element_script}
		{$form_element_script}
	{/foreach}
{/if}


<script type="text/javascript" src="{$estate_folder}/apps/system/js/form_tabs.js"></script>
{if $form_elements.public|count eq 1}
    {foreach from=$form_elements.public key=tab item=tab_elements}
		{foreach from=$tab_elements item=element}
		<div class="form_element control-group" alt="{$element.name}">
			<label class="control-label">{$element.title}{if $element.required eq 1}<span style="color: red;">*</span>{/if}{if $element.hint!=''} <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="{$element.hint}"> <i class="icon-question-sign icon-white"></i></a>{/if}</label>
			
			<div class="form_element_html controls">{$element.html}</div>
			{if $element.image_list ne ''}
				<div style="clear: both;"></div>
				<div>{$element.image_list}</div>
			{/if}
			
		</div>
		{/foreach}
	{/foreach}




{else}

	{if $divide_by_step==1}
		<!-- DIVIDED BY STEPS FORM -->
		<script type="text/javascript" src="{$estate_folder}/apps/system/js/form_tabs.js"></script>
		<link rel="stylesheet" type="text/css" href="{$estate_folder}/apps/system/css/form_tabs.css" />
		<link rel="stylesheet" type="text/css" href="{$estate_folder}/apps/system/css/form_tabs_divided.css" />
		
		<div id="form_tab_switcher" style="display:none;">
		{foreach name=tab_foreach from=$form_elements.public key=tab item=tab_elements}
			{assign var=tab_id value=md5($tab)}
			{if $smarty.foreach.tab_foreach.iteration>$current_step}
				<span>{$tab}</span>
			{elseif $smarty.foreach.tab_foreach.iteration==$current_step}
				<a href="{$tab_id}" class="active_tab">{$tab}</a>
			{else}
				<a href="{$tab_id}">{$tab}</a>
			{/if}
		{/foreach}
		</div>
		
		<div class="steps">
		{foreach name=tab_foreach from=$form_elements.public key=tab item=tab_elements}
			{assign var=tab_id value=md5($tab)}
			{if $smarty.foreach.tab_foreach.iteration>$current_step}
				<div class="future">{$tab}</div>
			{elseif $smarty.foreach.tab_foreach.iteration==$current_step}
				<div class="current"><a class="go_to_step" alt="{$smarty.foreach.tab_foreach.iteration}" href="/add/step{$smarty.foreach.tab_foreach.iteration}">{$tab}</a></div>
			{else}
				<div class="done"><a class="go_to_step" alt="{$smarty.foreach.tab_foreach.iteration}" href="/add/step{$smarty.foreach.tab_foreach.iteration}">{$tab}</a></div>
			{/if}
		{/foreach}
		</div>
		
		{foreach name=tab_foreach_els from=$form_elements.public key=tab item=tab_elements}
			{assign var=tab_id value=md5($tab)}
			{if $smarty.foreach.tab_foreach_els.iteration==$current_step}
			<div class="form_tab" id="{$tab_id}">
				{foreach from=$tab_elements item=element}
					<div class="form_element" alt="{$element.name}">
						<div class="form_element_title">
							{$element.title}
							{if $element.required eq 1}
								<span style="color: red;">*</span>
							{/if}
							{if $element.hint!=''} <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="{$element.hint}"> <i class="icon-question-sign icon-white"></i></a>{/if}
						</div>
						<div class="form_element_html">{$element.html}</div>
						{if $element.image_list ne ''}
							<div style="clear: both;"></div>
							<div>{$element.image_list}</div>
						{/if}
					</div>
					{/foreach}
				</div>
			{else}
				<div class="form_tab">
					{foreach from=$tab_elements item=element}
					<div class="form_element" alt="{$element.name}">
						<div class="form_element_title">
							{$element.title}
							{if $element.required eq 1}
								<span style="color: red;">*</span>
							{/if}
							{if $element.hint!=''} <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="{$element.hint}"> <i class="icon-question-sign icon-white"></i></a>{/if}
						</div>
						<div class="form_element_html">{$element.html}</div>
						{if $element.image_list ne ''}
							<div style="clear: both;"></div>
							<div>{$element.image_list}</div>
						{/if}
					</div>
					{/foreach}
				</div>
			{/if}
		{/foreach}
	
		
			
		
		
		<!-- .DIVIDED BY STEPS FORM -->
	{else}
		<!-- USUAL FORM WITH TABS -->
		
	
		<ul class="nav nav-tabs" id="form_tab">
		{foreach from=$form_elements.public key=tab item=tab_elements}
			{assign var=tab_id value=md5($tab)}
			<li><a href="#{$tab_id}" data-toggle="tab">{$tab}</a></li>
		{/foreach}
		</ul>
		<div class="tab-content">
		{foreach name=tbf from=$form_elements.public key=tab item=tab_elements}
		
			{assign var=tab_id value=md5($tab)}
			<div class="tab-pane fade in{if $smarty.foreach.tbf.iteration==1} active{/if}" id="{$tab_id}">
			
				<!-- <h1>{$tab}</h1> -->
				{foreach from=$tab_elements item=element}
				<div class="form_element control-group" alt="{$element.name}">
					<label class="control-label">{$element.title}{if $element.required eq 1}<span style="color: red;">*</span>{/if}{if $element.hint!=''} <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="{$element.hint}"> <i class="icon-question-sign icon-white"></i></a>{/if}</label>
					<div class="form_element_html controls">{$element.html}</div>
					{if $element.image_list ne ''}
						<div style="clear: both;"></div>
						<div>{$element.image_list}</div>
					{/if}
					
				</div>
				{/foreach}
			</div>
		{/foreach}
		</div>
	



		{literal}
		
		<script>
		 $(document).ready(function(){
				$('#form_tab a:first').tab('show');
			 //$('#form_tab li:first').addClass('active');
		 });
		  
		  
		</script>
		{/literal}
		<!-- .USUAL FORM WITH TABS -->
	{/if}

	
{/if}






<div class="form_element_control">
{$form_elements.controls.apply.html} {$form_elements.controls.back.html} {$form_elements.controls.submit.html}
</div>
{foreach from=$form_elements.private key=tab item=p_element}
	{$p_element.html}
{/foreach}
{$form_elements.form_footer}
</div>

<div class="contact_info_contactus">
	Санкт-Петербург,<br>
	ВО, 6-линия д.43<br>
	<span class="bold">Тел.: </span> <a href="tel:+78123097979">+7 (812) 309 79 79</a><br>
	<span class="bold">Моб: </span> <a href="tel:+79119260175">+7 (911) 926 01 75</a><br>
	<span class="bold">E-mail: </span> <a href="maitlo:9260175@mail.ru">9260175@mail.ru</a>
</div>


</div>	