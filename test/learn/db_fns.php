<?php
//phpinfo();
function connect_to_db($mysql_db) {
	$link = mysqli_connect('127.0.0.1', 'root', 'Not4you!',$mysql_db);
	if (!$link) { die('Cannot connect to mySQL: '.mysql_error()); }
//	$db_selected = mysql_select_db($mysql_db,$link);
	if (!$db_selected) { die('Cannot select '.$mysql_db); }
	mysql_close($link);
}
connect_to_db('insights');
?>