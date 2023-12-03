<?php
 $conn=mysqli_connect("localhost","root","","project");
 
$a=$_POST['name'];
echo $a;
echo "<br>";

$b=$_POST['email'];
echo $b;
echo "<br>";

$c=$_POST['phone'];
echo $c;
echo "<br>";

$d=$_POST['adult'];
echo $d;
echo "<br>";

$e=$_POST['children'];
echo $e;
echo "<br>";

$f=$_POST['ch'];
echo $f;
echo "<br>";

$g=$_POST['out'];
echo $g;
echo "<br>";

$h=$_POST['preference'];
echo $h;
echo "<br>";

$i=$_POST['mesg'];
echo $i;
echo "<br>";



//$qr=mysqli_connect($conn,$ins);
// if(mysqli_connect($conn,$ins))
// {
//     echo "form"
// }
// echo
// {
//     else{
//     echo "not";
//     }
// }
//if(!$conn)
//{
 //  echo "connection failed";
//}
//else
//{
  // echo "connection ok";
//}

$ins="insert into booking(name,email,phone,adult,children,ch,outs,preference,mesg) values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

// $r=mysqli_connect($conn,$ins);
if(mysqli_query($conn,$ins))
{
   echo "data store";
 // header("location:book.php?msg=1");
 //echo "<script>window.location.href='book.php';alert('data store');</script>";
}
else{
   echo "data not store";
   //header("location:book.php?msg=2");
}
?>