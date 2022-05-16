<?php

class Swapi {
	
	public function getApiData($url, $params = "", $method = 'GET'){
		try {
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch,CURLOPT_HEADER, false);						

			/*$headers = array(
			'Content-Type: application/json',
			'Authorization: Basic '. base64_encode("$username:$password")
			);*/
			

			if($method == "POST"){
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
				curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
			}
			$result=curl_exec($ch);
			curl_close($ch);
			if(empty($result)) {
                throw new Exception("API connection failed.");   
            }		
			
			return json_decode($result, true);
			
		}catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }  
		
		
	}
}