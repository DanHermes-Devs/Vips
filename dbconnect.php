<?php
/*
	// this will avoid mysql_connect() deprecation error.
	//error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.



	$conn = mysql_connect('127.0.0.1:3306','bn_wordpress','5e601fd753');
	//$dbcon = mysql_select_db(DBNAME);
	// mysql_query("SET NAMES 'utf8'");

	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}

	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}

	$db_host = "127.0.0.1";
	$db_user = "bn_wordpress";
	$db_pass = "5e601fd753";
	$db_name = "vips18";

$mysqli =  @mysqli_connect($db_host, $db_user, $db_pass, $db_name, 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
*/


//$servername = "127.0.0.1";
//$username = "bn_wordpress";
//$password = "5e601fd753";
//$dbname = "vips18";


$servername = "127.0.0.1";
$username = "trafika_vips18";
$password = "z,IQnvUSy]IW";
$dbname = "trafika_vips19";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");

?>
