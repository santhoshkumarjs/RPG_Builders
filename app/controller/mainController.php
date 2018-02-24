<?php
	namespace app\controller;
	
	class mainController{
		private $return_data	=	array();
		
		public function getLocationDetails($project_type){
			global $db_obj;
			if($project_type != ''){
				$all_project_query	=	"SELECT * FROM project WHERE project_status='".$project_type."' AND status='active'";
				$project_list 	=	$db_obj->getResult($all_project_query);
				if($project_list != ''){
					foreach($project_list as $list_index => $list_val){
						$inner_location_id		=	$list_val['inner_location_id'];
						$location_id			=	$list_val['location_id'];
						$project_status			=	$list_val['project_status'];
						$location_query			=	"select pl.location_name, pl.img_file from project_location as pl left join project as p on (pl.location_id = p.location_id) where  p.project_status='".$project_status."' and pl.location_id='".$location_id."'and pl.status='active'";
						$location_result		=	$db_obj->getResult($location_query);
						//print_r($location_result);
						$sub_location_query		=	"select count(*) as count from project_innerlocation as pin left join project as p on (pin.inner_location_id = p.inner_location_id) where p.project_status='".$project_status."' and p.location_id='".$location_id."'";
						$sub_location_result	=	$db_obj->getResult($sub_location_query);
						$data_array				=	array("name"=> $location_result[0]['location_name'], "img"=>$location_result[0]['img_file'],"count"=>$sub_location_result[0]['count'],"inner_location"=>$inner_location_id);
						$return_data[$location_id]	=	$data_array;
					}
					return $return_data;
				}else{
					$return_data['status_code'] = "R101";
					$return_data['status_msg'] = "project list empty";
				}
			}else{
				$return_data['status_code'] = "R101";
				$return_data['status_msg'] = "project list empty";
			}
			return $return_data;
		}
		
		public function getProjectLocation($location_id, $project_status){
			global $db_obj;
			
			if($location_id !='' && $project_status != ''){
				$project_query	=	"select p.*, pin.location_id, pin.innerlocation_name, pl.location_name from project as p left join project_innerlocation as pin on(pin.inner_location_id=p.inner_location_id) left join project_location as pl on (pl.location_id = p.location_id) where p.location_id='".$location_id."' and p.project_status='".$project_status."'";
				$project_q_result	=	$db_obj->getResult($project_query);
				if($project_q_result != ''){
					return $project_q_result;
				}else{
					$return_data['status_code'] = "R101";
					$return_data['status_msg'] = "No more projects available";
				}
			}else{
				$return_data['status_code'] = "R101";
				$return_data['status_msg'] = "Location and Project status is empty";
			}
			return $return_data;
		}
		
		public function getProjectDetail($projectid){
			global $db_obj;
			
			$detail_query	=	"select detail_id, plot, plot_sqft, plot_status from project_detail where project_id='".$projectid."'";
			return $db_obj->getResult($detail_query);
		}
	}
?>