<?php

class Kidsreading_Model extends CI_Model {


	
	
	function query_Reading($id,$s){
	  	$sql= "SELECT * FROM kids_reading  where textbook_reading_grade=? and textbook_reading_semester=? order by textbook_reading_no asc" ; 
			
	    return $this->db->query($sql,array($id,$s)); 

	}
	
	
	
	
}

/* End of file News_Model.php */
/* Location: ./system/application/model/News_Model.php */