<?php
	namespace app\db;
	
	class db_connect{
		 const DB_HOST	=	'localhost';
		 const DB_USER	=	'root';
		 const DB_PASS	=	'';
		 const DB_NAME	=	'rgb_builders';
		
		private $db_obj;
		public function __construct(){
			global $log;
			try{
				$this->db_obj	=	new \mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
				if($this->db_obj->connect_errno){
					$exception_error = "['ERROR']Mysql not connected. error number ::".$this->db_obj->connect_errno ." :: error text :: ".$this->db_obj->connect_error;
					$log->console($exception_error);
					throw new \Exception($exception_error);
				}else{
					$log->console("['INFO']successfully db connected DB name ::".self::DB_NAME);
				}
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
		
		public function getResult($query){
			global $log;
			
			$log_query  = '[QUERY_LOG]'.$query;
			$log->console($log_query);
			$query_result	=	$this->db_obj->query($query);
			$final_data		=	array();
			while($row_result	=	$query_result->fetch_array(MYSQLI_ASSOC)){
				$final_data[] 	=	$row_result;
			}
			return $final_data;
		}
		
		public function ExecuteQuery($query){
			global $log;
			
			$log_query  = '[QUERY_LOG]'.$query;
			$log->console($log_query);
			$this->db_obj->query($query);
		}
		
		public function getLastId(){
			return $this->db_obj->insert_id;
		}
		
	}
	
	
?>