<?php

require 'config/query.php';

$query = new Query();


if(!empty($_POST['type'])){
	$response_data = $query->getlist();
}