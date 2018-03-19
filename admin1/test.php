<?php 

function getDistance($lng1, $lat1, $lng2, $lat2) {
    $EARTH_RADIUS = 6378.137;
    $radLat1 = rad($lat1);
    $radLat2 = rad($lat2);
    $a = $radLat1 - $radLat2;
    $b = rad($lng1) - rad($lng2);
    $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2)));
    $s = $s * $EARTH_RADIUS;
    if ($s < 1) {
        $s = round($s * 1000);
        $s.='m';
    } else {
        $s = round($s, 2);
        $s.='km';
    }
    return $s;
}
function rad($d) {
    return $d * 3.1415926535898 / 180.0;
}
$lng1=126.63;
$lat1=45.75;
$lng2=116.46;
$lat2=39.92;
echo getDistance($lng1, $lat1, $lng2, $lat2);