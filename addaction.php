<?php
$link=mysql_connect("localhost","root","ssn");
$DbName="openhack";
mysql_select_db($DbName,$link);

$news=$_POST['news'];
$color=$_POST['color'];
$state=$_POST['state'];

$sql="insert into enotice (news,color,state) values ('$news','$color',$state)";
$result=mysql_query($sql,$link);
$num_rows=mysql_num_rows($result);

header("location:view.php");

?>
