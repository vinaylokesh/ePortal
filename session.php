<?php
$connection = mysql_connect("localhost", "root", "123");
$db = mysql_select_db("company", $connection);
session_start();// Starting Session
$user_check=$_SESSION['login_user'];
echo "$user_check";
$ses_sql=mysql_query("select email from register where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session))
{
mysql_close($connection); 
header('Location: index.php'); 
}
?>
