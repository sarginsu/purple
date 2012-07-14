<?
$host="localhost";
$user="root";
$pass="";
//$pass="11111";
$db="ungu";

$koneksi=mysql_connect($host,$user,$pass);
if (!$koneksi)
	die("gagal".mysql_error());

$dbKon=mysql_select_db($db,$koneksi);
if (!$dbKon)
	die("gagal Buka database $db karena".mysql_error());
?>
