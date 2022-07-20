<?php

class Textbook_Model extends CI_Model {


	
	
	function query_Class($id,$s){
	  	$sql= "SELECT * FROM textbook_reading  where textbook_reading_grade=? and textbook_reading_semester=? order by textbook_reading_no asc" ; 
			
	    return $this->db->query($sql,array($id,$s)); 

	}
	
	function query_teamname($teamid){
	    $sql= "SELECT * FROM team t1  where t1.teamid=?  "; 
        return $this->db->query($sql,array($teamid)); 
	}
	function query_userDetail($nid=0){
		$sql= "SELECT * FROM tbusers t1  where t1.UserID=?  "; 
		return $this->db->query($sql,array($nid)); 
	}
	
	function update_userDetail($nid,$userClass){
		$this->db->where('UserID', $nid);
	    $this->db->update('tbusers', $userClass);
	}
	
	function delete_userDetail($nid){
		$this->db->where('UserID', $nid);
	    $this->db->delete('tbusers');
	}
	
	function insert_userDetail($userClass){
	    $this->db->insert('tbusers', $userClass);
	}
	
	function check_user($username,$userpassword){
		$sql= "SELECT T2.ADMIN_ID,T2.USER_USERNAME,T2.USER_NAME ,T2.HOSPITAL_ID,T2.USER_ADMIN from  ADMINISTRATOR T2 WHERE ";
        $sql.= " T2.USER_USERNAME='$username' AND  T2.USER_PASSWORD='$userpassword' AND ";
 		$sql.= " T2.USER_STATUS='E' ";
		return $this->db->query($sql); 
		
	}
	
	function insert_adminLog($LogsEntity){
		$this->db->insert('ADMIN_LOG', $LogsEntity);
	}
	
	
}

/* End of file News_Model.php */
/* Location: ./system/application/model/News_Model.php */