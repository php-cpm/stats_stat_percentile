<?php
if (! function_exists('stats_stat_percentile')) {
function stats_stat_percentile( array $arr , float $perc) : float 
{
$count = count($arr);
sort($arr, SORT_NUMERIC);
$low = floor(0.01 * $perc * $count);
//$max = floor(0.01 * (100 - $perc) * $count);
$percvar = $arr[$low];

return $percvar;
}
}
