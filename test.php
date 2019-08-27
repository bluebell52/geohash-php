<?php
include_once ("GeoHashApi.php");

$lat = 39.903999328613;
$lng = 116.40799713135;

$geoHashObj = new MGeoHashApi();

$sGeoHash = $geoHashObj->encode($lat, $lng);

//wx4g0bm9wutggtpkyzpx
echo $sGeoHash."\n";

//一般截取5位 大概 25平方公里大小
//wx4g0
$prefix = substr($sGeoHash, 0, 5);

$aNearGeoHash = $geoHashObj->neighbors($prefix);
/**
Array
(
[top] => wx4g2
[bottom] => wx4fb
[right] => wx4g1
[left] => wx4ep
[topleft] => wx4er
[topright] => wx4g3
[bottomright] => wx4fc
[bottomleft] => wx4dz
)
 */
print_r($aNearGeoHash);

foreach ($aNearGeoHash as $key => $sGeoHash) {
	//通过geohash获取经纬度
	$aLatLng = $geoHashObj->decode($sGeoHash);
	//获取距离
	$dis = $geoHashObj->getDistance($lat, $lng, $aLatLng[0], $aLatLng[1]);

	echo $key."\t".$sGeoHash."\t".$aLatLng[0]."\t".$aLatLng[1]."\t".$dis."\n";

}

/**
方位	hash 	纬度     		经度	 	距离
top	wx4g2	39.96826	116.38916	7.3319334148948
bottom	wx4fb	39.88037	116.38916	3.0834287457097
right	wx4g1	39.92432	116.43311	3.1168347185923
left	wx4ep	39.92432	116.34521	5.8186522062934
topleft	wx4er	39.96826	116.34521	8.9383048669275
topright	wx4g3	39.96826	116.43311	7.4677128678354
bottomright	wx4fc	39.88037	116.43311	3.3940538573775
bottomleft	wx4dz	39.88037	116.34521	5.9730349817748
 */
