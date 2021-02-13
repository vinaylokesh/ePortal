<?php
session_start();
$con=mysql_connect('localhost','root','123');

if(!$con)
{
die("could not connect".mysql_error());
}
mysql_select_db('company',$con);

$id=$_GET['id'];

$res=mysql_query("delete from register where id='$id'");
header("Location:listusers.php");
?>
