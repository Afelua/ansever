<?php /* Smarty version Smarty-3.0.8, created on 2015-04-28 06:36:53
         compiled from "Z:/home/anseverv2/www/apps/mailbox/admin/template/email.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:9168553eba059920d0-59532675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4f3784120063ca0228d6e886153af495c61a4e' => 
    array (
      0 => 'Z:/home/anseverv2/www/apps/mailbox/admin/template/email.tpl.html',
      1 => 1424158292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9168553eba059920d0-59532675',
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
