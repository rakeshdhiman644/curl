<?php
header("Content-type:application/json");
include('database.php');
$Query = "SELECT * FROM tbemp";
$Result = mysqli_query($conn,$Query);
$Count = mysqli_num_rows($Result);
if($Count > 0){
	while ($Row = mysqli_fetch_assoc($Result)) {
		$Arr[] = $Row;
	}
	echo json_encode(['status'=>'true','data'=>$Arr,'result'=>'found']);
}else {
	echo json_encode(['status'=>'true','data'=>'no data found','result'=>'not']);
}

?>