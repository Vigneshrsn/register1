<?php 
$host="localhost";
$username="root";
$password="";
$database="registration";
$conn=mysql_connect($host,$username,$password);
if(!$conn)
{
    die('Connection aborted');
}
mysql_select_db($database,$conn);
?>