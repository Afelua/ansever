<?php
$__server = 'localhost';
$__user = 'root';
$__password = '';
$__db = 'arenda';
$__db_prefix = 're'; // не менять
$__document_root = $_SERVER['DOCUMENT_ROOT'];
define('SITE_ENCODING', 'UTF-8');
define('DB_ENCODING', 'utf8');
if (!isset($__connection))
{
	$__connection = mysql_connect($__server, $__user, $__password) 
		or die('Не удалось поключиться к серверу БД (' . mysql_error() . ')');
	mysql_select_db($__db)
		or die ('Не удалось подключиться к БД(' . mysql_error() . ')');
mysql_query("SET NAMES utf8");
}
?>