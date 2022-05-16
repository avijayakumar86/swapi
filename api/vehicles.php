<?php

require_once __dir__.'/../config/config.php';
require_once __dir__.'/../api/swapi.php';
require_once __dir__.'/../config/query.php';

class Vehicles {
	
	public $vehicle;
	private $swapi;
	private $vehicle_api;
	private $db_query;
	private $table;
	
	public function __construct() {		
		
		$this->vehicle = "vehicles";
		$this->swapi = new Swapi();
		$this->vehicle_api = API_URL.$this->vehicle."/?format=json";
		$this->db_query = new Query();
		$this->table = "sw_vehicle";
	}
	
	public function getData(){
		try {
			$vehicle_list = $this->swapi->getApiData($this->vehicle_api);
			foreach($vehicle_list['results'] as $pl){				
				$vehicle_data['vehicle_id'] = basename($pl['url']);
				$vehicle_data['vehicle_name'] = $pl['name'];
				$vehicle_data['vehicle_model'] = $pl['model'];
				$vehicle_data['manufacturer'] = $pl['manufacturer'];
				$vehicle_data['cost_in_credits'] = $pl['cost_in_credits'];
				$vehicle_data['length'] = $pl['length'];
				$vehicle_data['max_atmosphering_speed'] = $pl['max_atmosphering_speed'];
				$vehicle_data['crew'] = $pl['crew'];
				$vehicle_data['passengers'] = $pl['passengers'];
				$vehicle_data['cargo_capacity'] = $pl['cargo_capacity'];
				$vehicle_data['consumables'] = $pl['consumables'];				
				$vehicle_data['vehicle_class'] = $pl['vehicle_class'];
				$pilots = array();
				foreach($pl['pilots'] as $pilot){
					$pilots[] = basename($pilot);
				}
				$vehicle_data['pilots'] = implode(",",$pilots);				
				
				if($this->db_query->recordCount(" vehicle_id = ".$vehicle_data['vehicle_id'], 'vehicle_id', $this->table) == 0)
					$this->db_query->insert($vehicle_data, $this->table);
				else{					
					$this->db_query->update($vehicle_data, "vehicle_id = ".$vehicle_data['vehicle_id'], $this->table);
				}				
			}
			
			/*if(!empty($starship_data['next'])){
				$this->starship_api = $starship_data['next'];
				$this->getData();
			}*/
		}catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }  
		
		
	}
}


