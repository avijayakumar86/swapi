<?php
require 'api/films.php';

$query = new Query();

$obj = new Films();

if($_POST['action'] == "getlist"){
	$response_data = $query->getlist('id,film_id, film_name, release_date, film_characters','active_status = 0',0,20,'sw_film');
	
	$response['data'] = '<tr><td>No data found </td></tr>';
	$response['message'] = 'failure';
	if($response_data){ 
		$data = '';$k = 1;
		foreach($response_data as $pl_data){
			$data .= '<tr><td>'.$k.'</td><td><i class="bi bi-camera-reels"></i> '.$pl_data['film_name'].'</td><td>'.$pl_data['release_date'].'</td><td>'.count(explode(",", $pl_data['film_characters'])).' <i class="bi bi-people-fill"></i></td><td><button type="button" class="btn btn-success" title="View" data-id="'.$pl_data['film_id'].'"><i class="bi bi-person-square"></i></button> <button type="button" class="btn btn-success" title="Delete"><i class="bi bi-trash"></i></button></td></tr>';
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