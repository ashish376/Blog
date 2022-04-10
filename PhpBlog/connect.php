<?php
ob_start();
session_start();

$dbhost 	= "localhost";
$dbuser 	= "root";
$dbpass 	= "";
$dbname 	= "Db";
$charset 	= "utf8";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$dbcon) {
    die("Connection failed" . mysqli_connect_error());
}
mysqli_select_db($dbcon,$dbname);
mysqli_set_charset($dbcon,$charset);
