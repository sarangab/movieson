<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 

  <script src="http://code.jquery.com/jquery-latest.js"></script> 
  <link rel="stylesheet" href="http://dev.jquery.com/view/trunk/plugins/autocomplete/demo/main.css" type="text/css" /> 
  <link rel="stylesheet" href="http://dev.jquery.com/view/trunk/plugins/autocomplete/jquery.autocomplete.css" type="text/css" /> 
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/lib/jquery.bgiframe.min.js"></script> 
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/lib/jquery.dimensions.js"></script> 
  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/autocomplete/jquery.autocomplete.js"></script> 
  <script> 
  $(document).ready(function(){
   var data = "/*<?php $link=mysql_connect("localhost","root","ssn");
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
<body> 
  Enter movie name : <input id="example" /> (try "C" or "E")
  <form action=wishlist.php method=post><input type=submit name=name value=SUBMIT></form>
</body> 
</html> 
