<?php
$conn = @mysqli_connect('localhost','root','');
mysqli_set_charset($conn,'utf8');
if (!$conn) {

	die('Não foi possível Conectar: ' . mysql_error());
}

mysqli_select_db($conn,'inusityproject');
?>