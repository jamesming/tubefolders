<?php

class Models_Db_Groups_Model extends Database {
	
	
	function __construct() {
		
		parent::__construct();
		
		
	}
		
	public function editGroup($Group_id, $post_array){
		
		return $this->update_table(
			$table = 'Groups',
			$primary_key = $Group_id, 
			$set_what_array = array(
				  'name' => $post_array['Group_name']
			)
		);
		
	}
	
	public function insertGroup($post_array){
		return $this->insert_table(
			$table = 'groups', 
			$insert_what = array(
				   'category_id' => $post_array['category_id']
				  ,'group_id' =>  $post_array['group_id']
			)
		);
		
	}
	


}

