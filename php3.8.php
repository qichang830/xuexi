<?php
date_default_timezone_set("UTC");
$q=mktime(12,12,12,8,30,2000);
echo "创建的时间戳是".$q;
echo "<br>";
echo "创建的日期是：".date("Y-m-d h:i:sa",$q);
?>