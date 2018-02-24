<?php
	namespace app\logfile;
	
	class logcreator{
				
		public function create_path(){
			$year	=	date("Y");
			$month	=	date("m");
			$date	=	date("d");
			$log_path	=	$year."/".$month."/".$date."/";
			$log_dir	=	APPLICATION_LOG_PATH.$log_path;
			if(!file_exists($log_dir)){
				mkdir($log_dir, 777, true);
				return $log_dir;
			}else{
				return $log_dir;
			}
		}
		
		public function console($logtext){
			$current_time	=	date("h:i:s");
			$visitor_ip		=	$this->getuserip();
			$final_log		=	$current_time." - ".$visitor_ip." - ".$logtext;
			$log_dir		=	$this->create_path();
			$log_name		=	"rgp_action.log";
			$log_open		=	fopen($log_dir.$log_name,"a");
			fwrite($log_open, $final_log);
			fclose($log_open);
		}
		
		private function getuserip(){
			$ip			=	'';
			$client		=	@$_SERVER['HTTP_CLIENT_IP'];
			$forwarded	=	@$_SERVER['HTTP_X_FORWARDED_IP'];
			$remote_ip	=	$_SERVER['REMOTE_ADDR'];
			if(filter_var($client, FILTER_VALIDATE_IP)){
				$ip	=	$client;
			}else if(filter_var($forwarded,	FILTER_VALIDATE_IP)){
				$ip	=	$forwarded;
			}else{
				$ip	=	$remote_ip;
			}
			return $ip;
		}
	}
?>