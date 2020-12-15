<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php2.9</title>
</head>

<body>
<?php
$sum=0;
$i=0;
while($i<100){
	$i=$i+2;
	$sum+=$i;
	if($i<100){
		echo $i."+";
		}else if($i==100){
			echo $i."=";
			}
	}
echo $sum;
?>
</body>
</html>