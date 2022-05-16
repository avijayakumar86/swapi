<?php

require_once __dir__.'/../config/config.php';
require_once __dir__.'/../api/swapi.php';
require_once __dir__.'/../config/query.php';

class Films {
	
	public $film;
	private $swapi;
	private $film_api;
	private $db_query;
	private $table;
	
	public function __construct() {		
		
		$this->film = "films";
		$this->swapi = new Swapi();
		$this->film_api = API_URL.$this->film."/?format=json";
		$this->db_query = new Query();
		$this->table = "sw_film";
	}
	
	public function getData(){
		try {
			$film_list = $this->swapi->getApiData($this->film_api);
			foreach($film_list['results'] as $pl){				
				$film_data['film_id'] = basename($pl['url']);
				$film_data['film_name'] = $pl['title'];
				$film_data['episode_id'] = $pl['episode_id'];
				$film_data['opening_crawl'] = $pl['opening_crawl'];
				$film_data['film_director'] = $pl['director'];
				$film_data['film_producer'] = $pl['producer'];
				$film_data['release_date'] = $pl['release_date'];
				$characters = array();
				foreach($pl['characters'] as $character){
					$characters[] = basename($character);
				}
				$film_data['film_characters'] = implode(",",$characters);				
				$film_data['created_date'] = date('Y-m-d H:i:s');
				if($this->db_query->recordCount(" film_id = ".$film_data['film_id'], 'film_id', $this->table) == 0)
					$this->db_query->insert($film_data, $this->table);
				else{
					$film_data['modified_date'] = date('Y-m-d H:i:s');
					unset($film_data['created_date']);
					$this->db_query->update($film_data, "film_id = ".$film_data['film_id'], $this->table);
				}				
			}
			
			/*if(!empty($film_list['next'])){
				$this->film_api = $film_list['next'];
				$this->getData();
			}*/
		}catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }  
		
		
	}
}


