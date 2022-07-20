<?php

class  Links_Model extends CI_Model {


	
	
	function query_linkslist(){
	  	$sql= "SELECT * FROM links      order by links_id " ; 
			
	    return $this->db->query($sql,array()); 

	}
	
    
	
}

/* End of file News_Model.php */
/* Location: ./system/application/model/News_Model.php */