<html>
<title>view</title>
<body bgcolor=wheat>
<table width=983 height=100 bgcolor="#CCCCCC"><tr><td><br><br><br><center><font face=arial color=red><h2>
<b>Movie Wishlist<b></font></center><br><br></h2></td></tr></table>
<br>
<?php

$link=mysql_connect("localhost","root","ssn");
$DbName="openhack";
mysql_select_db($DbName,$link);

$sql="select movie_id,name from movie";
$result=mysql_query($sql,$link);
$num_rows=mysql_num_rows($result);



$str="<table border=3 width=600 align=center>";
//$str.="<tr bgcolor=CCCCCC><td ><b>Edit</b></td>";
//$str.="<td><b>Delete</b></td>";
$str.="<td><b>Movie ID</b></td>";
$str.="<td><b>Movie</b></td>";
//$str.="<td><b>State</b></td></tr>";

$states=array();

for($i=0;$i<$num_rows;$i++)
{
$movie_id=mysql_result($result,$i,'movie_id');
$name=mysql_result($result,$i,'name');
}
for($i=0;$i<$num_rows;$i++)
{
$movie_id=mysql_result($result,$i,'movie_id');
$name=mysql_result($result,$i,'name');
/*$color=mysql_result($result,$i,'color');
$state=mysql_result($result,$i,'state');

$states[$i]=$news;*/

$str.="<tr bgcolor=CCCCFF>";
//$str.="<td ><a href='editaction.php?id=$movie_id'>EDIT</a></td>";
//$str.="<td><a href='delaction.php?id=$movie_id'>DEL</a></td>";

$str.="<td><font face=arial >$movie_id</font></td>";
$str.="<td>$name</td>";
//$str.="<td>$state</td></tr>";
}
$str.="</table>";
print $str;

/*$str1="<form action=add.php method=post >";
$str1.="<center><input type=submit name=add value='Add News'></center>";
$str1.="</form>";
print "$str1";
$str2="<form action=news.php method=post >";
$str2.="<center><input type=submit name=news value='See News'></center>";
$str2.="</form>";
print "$str2";

print "<marquee>";
for($i=0;$i<$num_rows;$i++)
{
print " <font face=arial color=blue>$states[$i] &nbsp;</font>";
}
print "</marquee>";*/
?>

</body>
</html>
