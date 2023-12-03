<?php
  

$a=$_POST['name'];
//echo $a;

$b=$_POST['email'];
//echo $b;

$c=$_POST['phone'];
//echo $c;

$d=$_POST['msg'];

$conn=mysqli_connect("localhost","root","","project");
$ins="insert into contact(name,email,phone,message) values('$a','$b','$c','$d')";
if($r=mysqli_query($conn,$ins))
{
        header("location:contact.php");
  }
  else
  {
    echo "password wrong";
  }

?>