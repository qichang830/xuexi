<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php3.4</title>
</head>
<body>
<?php
$qq=array("高嘉婕","周兴玥","孔美璐","杨若熙","齐雨畅","刘颖");
$len=count($qq);
for($i=0;$i<$len;$i++){
	if($i==$len-1){
	echo $qq[$i];}
	else{echo $qq[$i].",";}
}
echo "<br><br><br><br>";
foreach($qq as $value){
	echo $value."<br>";
	}
?>
</body>
</html>