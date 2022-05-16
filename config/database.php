<?php

class Database {
	
	public $db = null;
 
    public function __construct()
    {
        try {
            $this->db = mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASSWORD, DATABASE);
         
            if ( mysqli_connect_errno()) {
                throw new Exception("Database connection failed.");   
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }           
    }
	
}