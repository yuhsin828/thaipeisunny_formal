<?php

class Resource_Model extends CI_Model {


	
	
	function query_resource($id){
	  	$sql= "SELECT * FROM resource  where resoure_category=? order by resource_order asc" ; 
			
	    return $this->db->query($sql,array($id)); 

	}
	
	
	
}

/* End of file News_Model.php */
/* Location: ./system/application/model/News_Model.php */