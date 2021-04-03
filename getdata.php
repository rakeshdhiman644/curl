<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/api/fetchdata.php');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
$result = json_decode($result, true);
// echo "<pre>";
// print_r($result);
curl_close($ch);
if(isset($result['status'])){
	if($result['result'] == 'found'){ ?>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr>
				<th>EmpNo</th>
				<th>Name</th>
				<th>Address</th>
				<th>Salary</th>
			</tr>
			<?php foreach ($result['data'] as $key => $value) { ?>
				<tr>
					<td><?php echo $value['empno'] ?></td>
					<td><?php echo $value['name'] ?></td>
					<td><?php echo $value['adress'] ?></td>
					<td><?php echo $value['salary'] ?></td>
				</tr>
			<?php } ?>
		</table>
		<?php	
	}else{
		echo "data not found";
	}

}else {
	echo "API not found";
}
?>