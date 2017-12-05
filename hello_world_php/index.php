<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><?php
     $var = 6;
     echo $var;
     $new_var = &$var;
     echo $new_var;
     $var = 7;
     echo $var;
     echo $new_var;
?>
</p>
 </body>
</html>
