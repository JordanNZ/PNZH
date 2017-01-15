<?php

/**
 *
 * @author Jordan Diamond
 *
 */

ini_set('display_errors', '0'); 


// MySQL Details //
$mysql_host = "localhost";
$mysql_user = "";
$mysql_pass = "";
$mysql_db = "";

$db = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if($db->connect_errno > 0){
	die($db->connect_error);
}
