<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head> 
  <script src="http://code.jquery.com/jquery-latest.js"></script> 
  <link rel="stylesheet" href="/auto/main.css" type="text/css" /> 
  <link rel="stylesheet" href="http://dev.jquery.com/view/trunk/plugins/autocomplete/jquery.autocomplete.css" type="text/css" /> 
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/lib/jquery.bgiframe.min.js"></script> 
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/lib/jquery.dimensions.js"></script> 
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/jquery.autocomplete.js"></script> 
  <script> 
  $(document).ready(function(){
   var data = "/*<?php $link=mysql_connect("localhost","openhack","password");
$DbName="openhack";
mysql_select_db($DbName,$link);
$name=array();
$sql="select name from movie";
$result=mysql_query($sql,$link);
$num_rows=mysql_num_rows($result);

for($i=0;$i<$num_rows;$i++)
{
$name[$i]=mysql_result($result,$i,'name');
$str=$name[$i];
$str.=';';
print $str;
}

 ?>".split(";");
$("#example").autocomplete(data);
  });
  </script> 
  
</head> 

<body bgcolor=wheat>

<table width=983 height=100 bgcolor="#CCCCCC"><tr><td><br><br><br><center><font face=arial color=red><h2>
<b>open hack india '10<b></font></center><br><br></h2></td></tr></table><br>


  
<?php
$link=mysql_connect("localhost","openhack","password");
$DbName="openhack";
mysql_select_db($DbName,$link);

if (isset($_POST)) {
$login=$_POST['login'];
$pwd=$_POST['pwd'];

$query = "select username, user_id from user where username = '$login' and password = '$pwd'";
$result=mysql_query($query,$link);
$row = mysql_fetch_array($result);
$user_id = $row['user_id'];
if ($result == FALSE) {
    header('Location: login.php');
    die("Invalid user");
}
}

$str4=" <br><form action=submitmovie.php method=post><br>";
$str4.="Enter movie name :<input type=hidden value=$user_id name=userid> <input id=\"example\" type=text name=name /> (try \"C\" or \"E\")<input type=submit name=submitbt value=SUBMIT></form><br><br>";
print "$str4";
 
  ?>
</body>
</html>
