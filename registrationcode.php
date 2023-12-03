<?php
$conn=mysqli_connect("localhost","root","","project");

$a=$_POST['name'];
echo $a;
echo "<br>";

$b=$_POST['email'];
echo $b;
echo "<br>";

$c=$_POST['mob'];
echo $c;
echo "<br>";

$d=$_POST['pass'];
echo $d;
echo "<br>";

$ins="INSERT INTO `register` ( `user`, `email`, `mobile`, `password`) VALUES ('$a', '$b', '$c', '$d')";
if(mysqli_query($conn,$ins))
{
    echo "your data store";
}
else
{
    echo "not inserted";
}

?>