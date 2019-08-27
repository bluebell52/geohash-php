# geohash-php

本API主要是封装php版geohash相关API

//通过经纬度获取geohash
public function encode($lat, $long) 

//通过geohash获取纬度,经度
public function decode($hash)

//通过geohash获取周围8个区块hash值
public function neighbors($srcHash)
  
怎么用看test.php
  
  
  
  
  
