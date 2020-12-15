<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php2.7</title>
</head>

<body>
<?php
$t=date("H");
echo $t."<br>";
if($t>=0&$t<12){
	echo "齐雨畅早上好！";
	}else if($t>=12&&$t<18){
		echo "齐雨畅下午好！";
		}else if($t>=18&$t<24){
			echo "齐雨畅晚上好！";
			}
?>
</body>
</html>