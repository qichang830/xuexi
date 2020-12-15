<?php
$qq=array(
    "高嘉婕"=>array("201811050511","女","516"),
    "周兴玥"=>array("201811050508","女","516"),
    "孔美璐"=>array("201811050504","女","516"),
    "杨若熙"=>array("201811050506","女","516"),
    "齐雨畅"=>array("201811050507","女","516"),
    "刘颖"=>array("201811050509","女","516")
);
foreach ($qq as $key=>$value){
    echo $key.":";
    foreach ($value as $key1=>$value1){
        echo "$key1=>$value1"."&nbsp;&nbsp;&nbsp;";
    }echo "<br>";
}
?>