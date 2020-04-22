<?php
$conn = @mysql_connect('localhost','root','');
mysql_set_charset('utf8', $conn);
if (!$conn) {

	die('Não foi possível Conectar: ' . mysql_error());
}

mysql_select_db('inusityproject', $conn);
?>