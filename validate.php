<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('new') or die(mysql_error());
 $name=$_POST['user'];
 $pwd=$_POST['pass'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from Info where username='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['user']=$name;
    header('location:Homepage.html');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>