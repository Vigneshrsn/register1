<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','registration');

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
    echo("error");
}


if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
if($_POST["username"]==""||$_POST["password"]=="")
{
    echo"all details required";
}
else{
$sql ="SELECT username,password FROM users WHERE username=:username and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
    echo "<script>alert('valid Details');</script>";
} else{
    echo "<script>alert('Invalid Details');</script>";
}

}
}
?>