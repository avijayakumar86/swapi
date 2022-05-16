<?php

require_once __dir__.'/../config/config.php';
require_once __dir__.'/../api/swapi.php';
require_once __dir__.'/../config/query.php';

class Species {
	
	public $species;
	private $swapi;
	private $species_api;
	private $db_query;
	private $table;
	
	public function __construct() {		
		
		$this->species = "species";
		$this->swapi = new Swapi();
		$this->species_api = API_URL.$this->species."/?format=json";
		$this->db_query = new Query();
		$this->table = "sw_species";
	}
	
	public function getData(){
		try {
			$species_list = $this->swapi->getApiData($this->species_api);
			foreach($species_list['results'] as $pl){				
				$species_data['species_id'] = basename($pl['url']);
				$species_data['species_name'] = $pl['name'];
				$species_data['classification'] = $pl['classification'];
				$species_data['designation'] = $pl['designation'];
				$species_data['average_height'] = $pl['average_height'];
				$species_data['skin_colors'] = $pl['skin_colors'];
				$species_data['hair_colors'] = $pl['hair_colors'];
				$species_data['eye_colors'] = $pl['eye_colors'];
				$species_data['homeworld'] = $pl['homeworld'];
				$species_data['average_lifespan'] = $pl['average_lifespan'];
				$species_data['language'] = $pl['language'];				
				
				$pilots = array();
				foreach($pl['people'] as $pilot){
					$pilots[] = basename($pilot);
				}
				$species_data['people'] = implode(",",$pilots);				
				
				if($this->db_query->recordCount(" species_id = ".$species_data['species_id'], 'species_id', $this->table) == 0)
					$this->db_query->insert($species_data, $this->table);
				else{					
					$this->db_query->update($species_data, "species_id = ".$species_data['species_id'], $this->table);
				}				
			}
			
			/*if(!empty($species_data['next'])){
				$this->species_api = $species_data['next'];
				$this->getData();
			}*/
		}catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }  
		
		
	}
}


