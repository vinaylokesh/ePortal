<?php

$conn=mysql_connect('localhost','root','123');

if(!$conn)
{
die("could not connect".mysql_error());
}

$id=$_GET['id'];

$res="insert into images select * from images1 where id='$id'";
$res1="delete from images1 where id='$id'";
mysql_select_db('company');
$retval = mysql_query( $res, $conn );
$retval1 = mysql_query( $res1, $conn );
if(!$retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{
echo "Entered data successfully\n";
}
header("Location:revSearch.php");
?>


