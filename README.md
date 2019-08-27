# geohash-php

本API主要是封装php版geohash相关API

	 * @param $lat 纬度
	 * @param $long 精度
	 * @return string geohash值
	 */
	public function encode($lat, $long) 
  
   * @param $hash geohash值
	 * @return array （纬度，经度）
	 */
	public function decode($hash)
  
	 * @param $srcHash geohash值
	 * @return mixed 获取hash附近8个区块
	 */
	public function neighbors($srcHash)
  
  
  下面为test代码:
  
  
  
  
  
