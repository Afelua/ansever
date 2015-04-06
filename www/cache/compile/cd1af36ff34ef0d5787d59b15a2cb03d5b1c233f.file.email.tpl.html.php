<?php /* Smarty version Smarty-3.0.8, created on 2015-03-29 22:40:48
         compiled from "Z:/home/sever-arenda/www/apps/mailbox/admin/template/email.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1065755180ef07c0815-34103083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1af36ff34ef0d5787d59b15a2cb03d5b1c233f' => 
    array (
      0 => 'Z:/home/sever-arenda/www/apps/mailbox/admin/template/email.tpl.html',
      1 => 1424158292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065755180ef07c0815-34103083',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Здравствуйте</h1>
Вам пришло личное сообщение связанное с объявлением <a href="http://<?php echo $_smarty_tpl->getVariable('server_name')->value;?>
<?php echo $_smarty_tpl->getVariable('estate_folder')->value;?>
<?php echo $_smarty_tpl->getVariable('realty_href')->value;?>
">ID=<?php echo $_smarty_tpl->getVariable('realty_id')->value;?>
</a>

<table cellpadding="5" style="border: 1px solid gray;">
	<tr>
		<td>Тема</td><td><?php echo $_smarty_tpl->getVariable('theme')->value;?>
</td>
	</tr>
	<tr>
		<td>Содержание</td><td><?php echo $_smarty_tpl->getVariable('message')->value;?>
</td>
    </tr>
    <tr>
		<td>Контакты</td><td>Имя: <?php echo $_smarty_tpl->getVariable('name')->value;?>
<br> Email: <?php echo $_smarty_tpl->getVariable('email')->value;?>
<br> Телефон:<?php echo $_smarty_tpl->getVariable('phone')->value;?>
</td>
	</tr>
</table>
<?php echo $_smarty_tpl->getVariable('email_signature')->value;?>
