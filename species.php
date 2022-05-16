<?php
require 'api/species.php';

$query = new Query();

$obj = new Species();

if($_POST['action'] == "getlist"){
	$response_data = $query->getlist('id,species_id, species_name, classification, designation','active_status = 0',0,20,'sw_species');
	
	$response['data'] = '<tr><td>No data found </td></tr>';
	$response['message'] = 'failure';
	if($response_data){ 
		$data = '';$k = 1;
		foreach($response_data as $pl_data){
			$data .= '<tr><td>'.$k.'</td><td><i class="bi bi-snow"></i> '.$pl_data['species_name'].'</td><td>'.$pl_data['classification'].'</td><td>'.$pl_data['designation'].'</td><td><button type="button" class="btn btn-success" title="View"><i class="bi bi-person-square"></i></button> <button type="button" class="btn btn-success" title="Delete"><i class="bi bi-trash"></i></button></td></tr>';
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