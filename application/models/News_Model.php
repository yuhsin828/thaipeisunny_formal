<?php

class News_Model extends CI_Model {


	
	
	function query_newslist(){
	  	$sql= "SELECT * FROM news  where  news_actived='1'  order by news_date desc" ; 
			
	    return $this->db->query($sql,array()); 

	}
	
    function query_news($id){
        $sql= "SELECT * FROM news  where news_id=? and news_actived='1'  order by news_date desc" ; 
            
        return $this->db->query($sql,array($id)); 

    }	
	
}

/* End of file News_Model.php */
/* Location: ./system/application/model/News_Model.php */