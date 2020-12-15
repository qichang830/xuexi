<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php2.10</title>
</head>

<body>
<?php
$sum=0;
$i=0;
do{
	$sum=$sum+$i;
	$i=$i+2;
	if($i<100){echo $i."+";}
	else if($i==100){echo $i."=";}
	}while($i<=100);
echo $sum;
?>
</body>
</html>