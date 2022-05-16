<?php

require_once __dir__.'/../config/config.php';
require_once __dir__.'/../api/swapi.php';
require_once __dir__.'/../config/query.php';

class People {
	
	public $people;
	private $swapi;
	private $people_api;
	private $db_query;
	public $people_id, $fullname, $height, $mass, $hair_color, $skin_color, $eye_color, $birth_year, $gender, $active_status, $created_date, $modified_date;
	private $table;
	
	public function __construct() {		
		
		$this->people = "people";
		$this->swapi = new Swapi();
		$this->people_api = API_URL.$this->people."/?format=json";
		$this->db_query = new Query();
		$this->table = "sw_people";
	}
	
	public function getData(){
		try {
			$people_list = $this->swapi->getApiData($this->people_api);
			foreach($people_list['results'] as $pl){				
				$people_data['people_id'] = basename($pl['url']);
				$people_data['fullname'] = $pl['name'];
				$people_data['height'] = $pl['height'];
				$people_data['mass'] = $pl['mass'];
				$people_data['hair_color'] = $pl['hair_color'];
				$people_data['skin_color'] = $pl['skin_color'];
				$people_data['eye_color'] = $pl['eye_color'];
				$people_data['birth_year'] = $pl['birth_year'];
				$people_data['gender'] = $pl['gender'];
				$people_data['created_date'] = date('Y-m-d H:i:s');
				if($this->db_query->recordCount(" people_id = ".$people_data['people_id'], 'people_id', $this->table) == 0)
					$this->db_query->insert($people_data, $this->table);
				else{
					$people_data['modified_date'] = date('Y-m-d H:i:s');
					unset($people_data['created_date']);
					$this->db_query->update($people_data, "people_id = ".$people_data['people_id'], $this->table);
				}				
			}
			
			/*if(!empty($people_list['next'])){
				$this->people_api = $people_list['next'];
				$this->getData();
			}*/
		}catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }  
		
		
	}
}


