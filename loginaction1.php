<html>
<body bgcolor=wheat>
<table width=983 height=100 bgcolor="#CCCCCC"><tr><td><br><br><br><center><font face=arial color=red><h2>
<b>open hack india '10<b></font></center><br><br></h2></td></tr></table>
<?php
session_start();
$link=mysql_connect("localhost","root","ssn");
$DbName="openhack";
mysql_select_db($DbName,$link);

$login=$_POST['login'];
$pwd=$_POST['pwd'];

//print "$login $pwd<br>"; 
$a==0;

$sql="select username,password,user_id from user";
$result=mysql_query($sql,$link);
$num_rows=mysql_num_rows($result);

print "$user_id";
for($i=0;$i<$num_rows;$i++)
{
$uname=mysql_result($result,$i,'username');
$upwd=mysql_result($result,$i,'password');
$user_id=mysql_result($result,$i,'user_id');
//print "$uname $upwd <br>";
if($uname==$login && $upwd==$pwd)
{
$a==1;
//print $a;
$str2="<center>Welcome <i>$uname</i> , here is your wishlist</center><br>";
$str2.="<td ><a href='wishlist.php?user_id=$user_id'>CONTINUE</a></td>";
print "$str2"; goto w;
//header("Location:view.php");
break;
 }
else
continue;
}
//print "$a";
if($a==0)
{
print "<br><br><br><br><center><h1><font color=red face=arial>Invalid user</font></h1></center>";
$str1="<form action=login.php method=post >";
$str1.="<center><input type=submit name=golog value='GO BACK'></center>";
$str1.="</form>";
print "$str1";
}
w:
?>
</body>
</html>
