<?php
require 'api/vehicles.php';

$query = new Query();

$obj = new Vehicles();

if($_POST['action'] == "getlist"){
	$response_data = $query->getlist('id,vehicle_id, vehicle_name, vehicle_model, vehicle_class','active_status = 0',0,20,'sw_vehicle');
	
	$response['data'] = '<tr><td>No data found </td></tr>';
	$response['message'] = 'failure';
	if($response_data){ 
		$data = '';$k = 1;
		foreach($response_data as $pl_data){
			$data .= '<tr><td>'.$k.'</td><td><i class="bi bi-star"></i> '.$pl_data['vehicle_name'].'</td><td>'.$pl_data['vehicle_model'].'</td><td>'.$pl_data['vehicle_class'].'</td><td><button type="button" class="btn btn-success" title="View"><i class="bi bi-person-square"></i></button> <button type="button" class="btn btn-success" title="Delete"><i class="bi bi-trash"></i></button></td></tr>';
$k++;
		}
		$response['message'] = 'success';
		$response['data'] = $data;
	}
	
	echo json_encode($response);
}

if($_POST['action'] == "getdata"){
	echo $obj->getData();
}