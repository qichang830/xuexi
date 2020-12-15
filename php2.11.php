<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php2.11</title>
</head>

<body>
<?php
echo '<table border="1"  cellpadding="0" cellspacing="0" frame="void">';
for($i=1;$i<10;$i++){
	echo "<tr >";
	for($a=1;$a<=$i;$a++){
		echo "<td>".$a."*".$i."=".$i*$a."</td>";
		}
	echo "</tr>";
	}
echo "</table>";
?>
</body>
</html>