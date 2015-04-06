<?php /* Smarty version Smarty-3.0.8, created on 2015-03-13 03:25:32
         compiled from "Z:/home/sever-arenda/www/template/frontend/agency\login_register.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:129625501e82c8c50e6-75421003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb001f5bea67728113dda8581e0eb7e45dc0571c' => 
    array (
      0 => 'Z:/home/sever-arenda/www/template/frontend/agency\\login_register.tpl.html',
      1 => 1424158314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129625501e82c8c50e6-75421003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal fade" id="prettyRegisterOk" tabindex="-1" role="dialog" aria-labelledby="prettyRegisterOk" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel"><?php echo $_smarty_tpl->getVariable('L_AUTH_REGISTER_COMPLETE')->value;?>
</h3>
  </div>
  <div class="modal-body">
    <?php echo $_smarty_tpl->getVariable('L_AUTH_REGISTER_COMPLETE')->value;?>

  </div>
  <div class="modal-footer">
    <button class="btn let_me_login"><?php echo $_smarty_tpl->getVariable('L_LOGIN_BUTTON')->value;?>
</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $_smarty_tpl->getVariable('L_CLOSE')->value;?>
</button>
  </div>
</div>

<div class="modal fade" id="prettyLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel"><?php echo $_smarty_tpl->getVariable('L_AUTH_WELLCOME')->value;?>
</h3>
  </div>
  <div class="modal-body">
  
    <ul class="nav nav-tabs">
      <?php if ($_smarty_tpl->getVariable('allow_register_account')->value==1){?><li><a href="#register" data-toggle="tab"><?php echo $_smarty_tpl->getVariable('L_AUTH_REGISTRATION')->value;?>
</a></li><?php }?>
      <li class="active"><a href="#profile" data-toggle="tab"><?php echo $_smarty_tpl->getVariable('L_AUTH_TITLE')->value;?>
</a></li>
    </ul>
    <div class="tab-content">
    <?php if ($_smarty_tpl->getVariable('allow_register_account')->value==1){?>
      <div class="tab-pane" id="register">
            <form action="#" class="form-horizontal">
            
                <div class="row error">
                    
                </div>
                <?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('register_form_elements')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value){
?>
                <div class="control-group el">
                    <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['elt']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['elt']->value['required']==1){?> <span class="required">*</span><?php }?></label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->tpl_vars['elt']->value['html'];?>
 <a class="btn btn-danger error_mark"><i class="icon-exclamation-sign icon-white"></i></a>
                    </div>
                </div>
                
                <?php }} ?>
                
                <div class="row">
                    <input type="submit" id="register_button" class="btn btn-primary" value="<?php echo $_smarty_tpl->getVariable('L_AUTH_REGISTRATION')->value;?>
" />
                </div>
            </form>
      </div>
      <?php }?>
      <div class="tab-pane active" id="profile">
            <form action="#" class="form-horizontal">
                <div class="row">
                    <h3><?php echo $_smarty_tpl->getVariable('L_HAVE_LOGIN_YET')->value;?>
</h3>
                    <p><?php echo $_smarty_tpl->getVariable('L_AUTH_PLEASE')->value;?>
</p>
                </div>
                <?php if (isset($_smarty_tpl->getVariable('vk_url',null,true,false)->value)&&$_smarty_tpl->getVariable('vk_url')->value!=''){?>
                <div class="row">            
                    
                </div>
                <?php }?>
                <div class="row error">
                    <?php echo $_smarty_tpl->getVariable('L_AUTH_WRONG_LOGIN_PASSWORD')->value;?>

                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->getVariable('L_LOGIN')->value;?>
 <span class="required">*</span></label>
                    <div class="controls">
                        <input name="login" type="text" value="" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->getVariable('L_PASSWORD')->value;?>
 <span class="required">*</span></label>
                    <div class="controls">
                        <input name="password" type="password" value="" />
                    </div>
                </div>
                
                <div class="control-group">
	                <div class="controls">
	                    <label class="checkbox">
							<input type="checkbox" name="rememberme"> <?php echo $_smarty_tpl->getVariable('L_AUTH_REMEMBERME')->value;?>

						</label>
					</div>
                </div>
                
                
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" id="login_button" class="btn btn-primary" value="<?php echo $_smarty_tpl->getVariable('L_LOGIN_BUTTON')->value;?>
" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <a href="<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
/remind/"><?php echo $_smarty_tpl->getVariable('L_AUTH_FORGOT_PASS')->value;?>
</a>
                    </div>
                </div>
				
				<?php if ($_smarty_tpl->getVariable('vk_login_enable')->value!=''||$_smarty_tpl->getVariable('ok_login_enable')->value!=''||$_smarty_tpl->getVariable('tw_login_enable')->value||$_smarty_tpl->getVariable('gl_login_enable')->value!=''||$_smarty_tpl->getVariable('fb_login_enable')->value!=''){?>
                <div class="control-group">
					<p>Войти через соц.сеть</p>
					<?php echo $_smarty_tpl->getVariable('socialauth_panel')->value;?>

                </div>
				<?php }?>               
                
            </form>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $_smarty_tpl->getVariable('L_CLOSE')->value;?>
</button>
  </div>
</div>

