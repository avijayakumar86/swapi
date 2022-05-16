<?php

require_once __dir__.'/../config/config.php';
require_once __dir__.'/../api/swapi.php';
require_once __dir__.'/../config/query.php';

class Starships {
	
	public $starship;
	private $swapi;
	private $starship_api;
	private $db_query;
	private $table;
	
	public function __construct() {		
		
		$this->starship = "starships";
		$this->swapi = new Swapi();
		$this->starship_api = API_URL.$this->starship."/?format=json";
		$this->db_query = new Query();
		$this->table = "sw_starship";
	}
	
	public function getData(){
		try {
			$starship_list = $this->swapi->getApiData($this->starship_api);
			foreach($starship_list['results'] as $pl){				
				$starship_data['starship_id'] = basename($pl['url']);
				$starship_data['starship_name'] = $pl['name'];
				$starship_data['starship_model'] = $pl['model'];
				$starship_data['manufacturer'] = $pl['manufacturer'];
				$starship_data['cost_in_credits'] = $pl['cost_in_credits'];
				$starship_data['length'] = $pl['length'];
				$starship_data['max_atmosphering_speed'] = $pl['max_atmosphering_speed'];
				$starship_data['crew'] = $pl['crew'];
				$starship_data['passengers'] = $pl['passengers'];
				$starship_data['cargo_capacity'] = $pl['cargo_capacity'];
				$starship_data['consumables'] = $pl['consumables'];
				$starship_data['hyperdrive_rating'] = $pl['hyperdrive_rating'];
				$starship_data['mglt'] = $pl['MGLT'];
				$starship_data['starship_class'] = $pl['starship_class'];
				$pilots = array();
				foreach($pl['pilots'] as $pilot){
					$pilots[] = basename($pilot);
				}
				$starship_data['pilots'] = implode(",",$pilots);				
				
				if($this->db_query->recordCount(" starship_id = ".$starship_data['starship_id'], 'starship_id', $this->table) == 0)
					$this->db_query->insert($starship_data, $this->table);
				else{					
					$this->db_query->update($starship_data, "starship_id = ".$starship_data['starship_id'], $this->table);
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


