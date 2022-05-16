<?php
require 'api/people.php';

$query = new Query();

$obj = new People();

if($_POST['action'] == "getlist"){
	$response_data = $query->getlist('id,people_id,fullname,birth_year,gender','active_status = 0',0,20,'sw_people');
	
	$response['data'] = '<tr><td>No data found </td></tr>';
	$response['message'] = 'failure';
	if($response_data){ 
		$data = '';$k = 1;
		foreach($response_data as $pl_data){
			$data .= '<tr><td>'.$k.'</td><td><i class="bi bi-person-fill"></i> '.$pl_data['fullname'].'</td><td>'.$pl_data['birth_year'].'</td><td>'.ucfirst($pl_data['gender']).'</td><td><button type="button" class="btn btn-success pdata" title="View" data-id="'.$pl_data['people_id'].'"><i class="bi bi-person-square"></i></button> <button type="button" class="btn btn-success" title="Edit"><i class="bi bi-person-lines-fill"></i></button>
<button type="button" class="btn btn-success" title="Delete"><i class="bi bi-trash"></i></button></td></tr>';
$k++;
		}
		$response['message'] = 'success';
		$response['data'] = $data;
	}
	
	echo json_encode($response);
}

if($_POST['action'] == "detaildata"){
	$response_data['pl_data'] = $query->getlist('fullname,birth_year,gender,height,mass,hair_color,skin_color,eye_color','people_id = '.$_POST['id'],0,1,'sw_people');
	$response_data['pl_film'] = $query->getlist('film_name, episode_id,opening_crawl, film_director,film_producer','film_characters like "%'.$_POST['id'].'%"',0,50,'sw_film');
	$response_data['pl_vehicle'] = $query->getlist('vehicle_name, vehicle_model,manufacturer,cost_in_credits,length, max_atmosphering_speed,crew,passengers,cargo_capacity,consumables,vehicle_class','pilots like "%'.$_POST['id'].'%"',0,50,'sw_vehicle');
	$response_data['pl_planets'] = $query->getlist('planet_name, rotation_period,orbital_period,diameter,climate, gravity,terrain,surface_water,population','residents like "%'.$_POST['id'].'%"',0,50,'sw_planets');
	$response_data['pl_species'] = $query->getlist('species_name, classification,designation,average_height,skin_colors','people like "%'.$_POST['id'].'%"',0,50,'sw_species');
	$response_data['pl_starship'] = $query->getlist('starship_name','pilots like "%'.$_POST['id'].'%"',0,50,'sw_starship');
	
	$response_data['message'] = 'failure';
	
	
	echo json_encode($response_data);
}

if($_POST['action'] == "getdata"){
	echo $obj->getData();
}


        