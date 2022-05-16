<?php

require_once __dir__.'/../config/config.php';
require_once __dir__.'/../api/swapi.php';
require_once __dir__.'/../config/query.php';

class Planets {
	
	public $planets;
	private $swapi;
	private $planets_api;
	private $db_query;
	private $table;
	
	public function __construct() {		
		
		$this->planets = "planets";
		$this->swapi = new Swapi();
		$this->planets_api = API_URL.$this->planets."/?format=json";
		$this->db_query = new Query();
		$this->table = "sw_planets";
	}
	
	public function getData(){
		try {
			$planets_list = $this->swapi->getApiData($this->planets_api);
			foreach($planets_list['results'] as $pl){				
				$planets_data['planet_id'] = basename($pl['url']);
				$planets_data['planet_name'] = $pl['name'];
				$planets_data['rotation_period'] = $pl['rotation_period'];
				$planets_data['orbital_period'] = $pl['orbital_period'];
				$planets_data['diameter'] = $pl['diameter'];
				$planets_data['climate'] = $pl['climate'];
				$planets_data['gravity'] = $pl['gravity'];
				$planets_data['terrain'] = $pl['terrain'];
				$planets_data['surface_water'] = $pl['surface_water'];
				$planets_data['population'] = $pl['population'];
			
				$pilots = array();
				foreach($pl['residents'] as $pilot){
					$pilots[] = basename($pilot);
				}
				$planets_data['residents'] = implode(",",$pilots);				
				
				if($this->db_query->recordCount(" planet_id = ".$planets_data['planet_id'], 'planet_id', $this->table) == 0)
					$this->db_query->insert($planets_data, $this->table);
				else{					
					$this->db_query->update($planets_data, "planet_id = ".$planets_data['planet_id'], $this->table);
				}				
			}
			
			/*if(!empty($planets_data['next'])){
				$this->planets_api = $planets_data['next'];
				$this->getData();
			}*/
		}catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }  
		
		
	}
}


