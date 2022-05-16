<?php
require_once __dir__.'/../config/database.php';

class Query {
	
	private $db = null;	

    public function __construct()
    {
		$this->db = new Database();
    }
	
	public function insert(Array $input, $table)
    {
      
        try {
			$table_columns = implode(", ",array_keys($input));			
			$values  = implode(', ', $this->escapeValues($input));
			
			$query = "INSERT INTO $table ($table_columns) VALUES ($values)";
            $statement = mysqli_query($this->db->db,$query);
            return $this->db->db->insert_id;
        } catch (Exception $e) {
            exit($e->getMessage());
        }    
    }    

    public function update(Array $input, $condition, $table)
    {
        try {
			$data = '';
			
			foreach($input as $k => $value){
				$data .= $k ." = '".mysqli_real_escape_string($this->db->db,$value). "', ";
			}
			$data = rtrim($data, ", ");
			$query = "UPDATE $table set $data where $condition";
            $statement = mysqli_query($this->db->db,$query);
            return mysqli_affected_rows($this->db->db);
        } catch (Exception $e) {
            exit($e->getMessage());
        }  
    }

    public function getlist($column, $where = '', $offset = 0, $limit = 20, $table)
    {
		$limit = " limit $offset, $limit";
		if($where) $where = " where ".$where;
        $query = "select $column from $table $where $limit";
        $statement = mysqli_query($this->db->db,$query);
		$result = mysqli_fetch_all($statement, MYSQLI_ASSOC);
		return $result;
    }
	
	public function recordCount($input, $column, $table)
    {
      
        try {			
			$query = "select $column from $table where $input";
            $statement = mysqli_query($this->db->db,$query);
            return mysqli_num_rows($statement);
        } catch (Exception $e) {
            exit($e->getMessage());
        }    
    }
	
	public function escapeValues($insData){
		
		$escaped_values = array_map(
						function($value) {
							if (is_string($value)) {
								return "'" . mysqli_real_escape_string($this->db->db,$value) . "'";
							}
							if (is_null($value)) {
								return 'null';
							}
							return $value;
						},
						array_values($insData)
					);
		return $escaped_values;
	}
	
}