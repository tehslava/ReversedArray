<html>
<head>
<title>This one reverses a php array</title>
</head>
<body>
<?php
   $array = array(1, 5, 7, 9, 2, 4, 6, 8);
   $newArray = array();
   $length = count($array);
   $i = $length - 1;
   while($i >= 0) 
   {
   array_push($newArray, $array[$i]);
   $i = $i - 1;
   }
?>
</body>
</html>
