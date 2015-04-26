<?php /* Smarty version Smarty-3.0.8, created on 2015-04-26 20:11:22
         compiled from "Z:/home/anseverv2/www/apps/admin/admin/template/data_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12230553cd5e9f3fe33-17146764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0789099be98f4ff376774961d5d61c4ede4230e6' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/admin/admin/template/data_form.tpl',
      1 => 1430050275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12230553cd5e9f3fe33-17146764',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">

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

</script>

<div class="tabbed_form_block">
<?php if ($_smarty_tpl->getVariable('form_error')->value!=''){?>
	<p class="error"><?php echo $_smarty_tpl->getVariable('form_error')->value;?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getVariable('form_elements')->value['form_header'];?>


<?php if (isset($_smarty_tpl->getVariable('form_elements',null,true,false)->value['scripts'])&&count($_smarty_tpl->getVariable('form_elements')->value['scripts'])>0){?>
	<?php  $_smarty_tpl->tpl_vars['form_element_script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['scripts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['form_element_script']->key => $_smarty_tpl->tpl_vars['form_element_script']->value){
?>
		<?php echo $_smarty_tpl->tpl_vars['form_element_script']->value;?>

	<?php }} ?>
<?php }?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/form_tabs.js"></script>
<?php if (count($_smarty_tpl->getVariable('form_elements')->value['public'])==1){?>
    <?php  $_smarty_tpl->tpl_vars['tab_elements'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab_elements']->key => $_smarty_tpl->tpl_vars['tab_elements']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['tab_elements']->key;
?>
		<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
		<div class="form_element control-group" alt="<?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
">
			<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['element']->value['required']==1){?><span style="color: red;">*</span><?php }?><?php if ($_smarty_tpl->tpl_vars['element']->value['hint']!=''){?> <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="<?php echo $_smarty_tpl->tpl_vars['element']->value['hint'];?>
"> <i class="icon-question-sign icon-white"></i></a><?php }?></label>
			
			<div class="form_element_html controls"><?php echo $_smarty_tpl->tpl_vars['element']->value['html'];?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['element']->value['image_list']!=''){?>
				<div style="clear: both;"></div>
				<div><?php echo $_smarty_tpl->tpl_vars['element']->value['image_list'];?>
</div>
			<?php }?>
			
		</div>
		<?php }} ?>
	<?php }} ?>




<?php }else{ ?>

	<?php if ($_smarty_tpl->getVariable('divide_by_step')->value==1){?>
		<!-- DIVIDED BY STEPS FORM -->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/js/form_tabs.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/css/form_tabs.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/apps/system/css/form_tabs_divided.css" />
		
		<div id="form_tab_switcher" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['tab_elements'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_foreach']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab_elements']->key => $_smarty_tpl->tpl_vars['tab_elements']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['tab_elements']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_foreach']['iteration']++;
?>
			<?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['tab']->value), null, null);?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration']>$_smarty_tpl->getVariable('current_step')->value){?>
				<span><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</span>
			<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration']==$_smarty_tpl->getVariable('current_step')->value){?>
				<a href="<?php echo $_smarty_tpl->getVariable('tab_id')->value;?>
" class="active_tab"><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->getVariable('tab_id')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</a>
			<?php }?>
		<?php }} ?>
		</div>
		
		<div class="steps">
		<?php  $_smarty_tpl->tpl_vars['tab_elements'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_foreach']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab_elements']->key => $_smarty_tpl->tpl_vars['tab_elements']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['tab_elements']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_foreach']['iteration']++;
?>
			<?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['tab']->value), null, null);?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration']>$_smarty_tpl->getVariable('current_step')->value){?>
				<div class="future"><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</div>
			<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration']==$_smarty_tpl->getVariable('current_step')->value){?>
				<div class="current"><a class="go_to_step" alt="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration'];?>
" href="/add/step<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</a></div>
			<?php }else{ ?>
				<div class="done"><a class="go_to_step" alt="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration'];?>
" href="/add/step<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</a></div>
			<?php }?>
		<?php }} ?>
		</div>
		
		<?php  $_smarty_tpl->tpl_vars['tab_elements'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_foreach_els']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab_elements']->key => $_smarty_tpl->tpl_vars['tab_elements']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['tab_elements']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab_foreach_els']['iteration']++;
?>
			<?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['tab']->value), null, null);?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tab_foreach_els']['iteration']==$_smarty_tpl->getVariable('current_step')->value){?>
			<div class="form_tab" id="<?php echo $_smarty_tpl->getVariable('tab_id')->value;?>
">
				<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
					<div class="form_element" alt="<?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
">
						<div class="form_element_title">
							<?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>

							<?php if ($_smarty_tpl->tpl_vars['element']->value['required']==1){?>
								<span style="color: red;">*</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['element']->value['hint']!=''){?> <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="<?php echo $_smarty_tpl->tpl_vars['element']->value['hint'];?>
"> <i class="icon-question-sign icon-white"></i></a><?php }?>
						</div>
						<div class="form_element_html"><?php echo $_smarty_tpl->tpl_vars['element']->value['html'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['element']->value['image_list']!=''){?>
							<div style="clear: both;"></div>
							<div><?php echo $_smarty_tpl->tpl_vars['element']->value['image_list'];?>
</div>
						<?php }?>
					</div>
					<?php }} ?>
				</div>
			<?php }else{ ?>
				<div class="form_tab">
					<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
					<div class="form_element" alt="<?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
">
						<div class="form_element_title">
							<?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>

							<?php if ($_smarty_tpl->tpl_vars['element']->value['required']==1){?>
								<span style="color: red;">*</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['element']->value['hint']!=''){?> <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="<?php echo $_smarty_tpl->tpl_vars['element']->value['hint'];?>
"> <i class="icon-question-sign icon-white"></i></a><?php }?>
						</div>
						<div class="form_element_html"><?php echo $_smarty_tpl->tpl_vars['element']->value['html'];?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['element']->value['image_list']!=''){?>
							<div style="clear: both;"></div>
							<div><?php echo $_smarty_tpl->tpl_vars['element']->value['image_list'];?>
</div>
						<?php }?>
					</div>
					<?php }} ?>
				</div>
			<?php }?>
		<?php }} ?>
	
		
			
		
		
		<!-- .DIVIDED BY STEPS FORM -->
	<?php }else{ ?>
		<!-- USUAL FORM WITH TABS -->
		
	
		<ul class="nav nav-tabs" id="form_tab">
		<?php  $_smarty_tpl->tpl_vars['tab_elements'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab_elements']->key => $_smarty_tpl->tpl_vars['tab_elements']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['tab_elements']->key;
?>
			<?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['tab']->value), null, null);?>
			<li><a href="#<?php echo $_smarty_tpl->getVariable('tab_id')->value;?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</a></li>
		<?php }} ?>
		</ul>
		<div class="tab-content">
		<?php  $_smarty_tpl->tpl_vars['tab_elements'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['public']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tbf']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab_elements']->key => $_smarty_tpl->tpl_vars['tab_elements']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['tab_elements']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tbf']['iteration']++;
?>
		
			<?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['tab']->value), null, null);?>
			<div class="tab-pane fade in<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tbf']['iteration']==1){?> active<?php }?>" id="<?php echo $_smarty_tpl->getVariable('tab_id')->value;?>
">
			
				<!-- <h1><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</h1> -->
				<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tab_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
				<div class="form_element control-group" alt="<?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
">
					<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['element']->value['required']==1){?><span style="color: red;">*</span><?php }?><?php if ($_smarty_tpl->tpl_vars['element']->value['hint']!=''){?> <a href="javascript:void(0);" rel="popover" class="tooltipe_block btn btn-info btn-mini" data-content="<?php echo $_smarty_tpl->tpl_vars['element']->value['hint'];?>
"> <i class="icon-question-sign icon-white"></i></a><?php }?></label>
					<div class="form_element_html controls"><?php echo $_smarty_tpl->tpl_vars['element']->value['html'];?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['element']->value['image_list']!=''){?>
						<div style="clear: both;"></div>
						<div><?php echo $_smarty_tpl->tpl_vars['element']->value['image_list'];?>
</div>
					<?php }?>
					
				</div>
				<?php }} ?>
			</div>
		<?php }} ?>
		</div>
	



		
		
		<script>
		 $(document).ready(function(){
				$('#form_tab a:first').tab('show');
			 //$('#form_tab li:first').addClass('active');
		 });
		  
		  
		</script>
		
		<!-- .USUAL FORM WITH TABS -->
	<?php }?>

	
<?php }?>






<div class="form_element_control">
<?php echo $_smarty_tpl->getVariable('form_elements')->value['controls']['apply']['html'];?>
 <?php echo $_smarty_tpl->getVariable('form_elements')->value['controls']['back']['html'];?>
 <?php echo $_smarty_tpl->getVariable('form_elements')->value['controls']['submit']['html'];?>

</div>
<?php  $_smarty_tpl->tpl_vars['p_element'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form_elements')->value['private']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p_element']->key => $_smarty_tpl->tpl_vars['p_element']->value){
 $_smarty_tpl->tpl_vars['tab']->value = $_smarty_tpl->tpl_vars['p_element']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['p_element']->value['html'];?>

<?php }} ?>
<?php echo $_smarty_tpl->getVariable('form_elements')->value['form_footer'];?>

</div>



</div>	