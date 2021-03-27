<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://ip-api.com/json');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
$result = json_decode($result, true);
echo "<pre>";
print_r($result);
curl_close($ch);
// preg_match_all('!//www.bigbasket.com/media/uploads/p/s/(.*).jpg!',$result,$data);

// $finalArr=array_unique($data[0]);

// foreach($finalArr as $list){
// 	echo "<img src='$list'/>";
// }
//https://www.bigbasket.com/media/uploads/p/s/20000911_28-fresho-kiwi-green.jpg
?>
