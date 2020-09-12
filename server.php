<?php
$dbusername="root";
$dbpassword="";
$dbname="registration";
$host="localhost";
$con=new mysqli($host,$dbusername,$dbpassword,$dbname);


if($con->connect_error)
{
    die("connection_aborted".$con->connnect_error);
}

$errors=array();


$name=isset($_POST['name']);
$email=isset($_POST['email']);
$password_1=isset($_POST['password']);
$password_2=isset($_POST['cpassword']);
$username=isset($_POST['username']);


if(empty($username))
{
array_push($errors,"username required");
}
if(empty($name))
{
array_push($errors,"name required");
}
if(empty($email))
{
array_push($errors,"email required");
}
if(empty($password_1))
{
array_push($errors,"password required");
}
if(empty($password_2))
{
array_push($errors,"retype the password required");
}
if($password_1 != $password_2)
{
array_push($errors,"passwords not matching");
}
if(count($errors)==0)
{   $password=md5($password_1);
    $sql="INSERT INTO users(username,name,email,password)
    VALUES('$username','$name','$email','$password')";
    if(mysqli_query($con,$sql))
    {
        echo"new record added";

    }
    else{
        echo"error".$sql."";
    }
    
    
    
    
}


?>