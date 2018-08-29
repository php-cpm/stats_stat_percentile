<?php
include './func.php';
$arra = [3,4,5,4645,32,6547];
$perc = 90;

var_dump(stats_stat_percentile($arra, $perc)); 
var_dump(stats_stat_percentile($arra, 95));
var_dump(stats_stat_percentile($arra, 55));
