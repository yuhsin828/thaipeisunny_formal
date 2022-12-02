<?php

class  Student_Model extends CI_Model
{
  // function query_zhuyin()
  // {
  //   $sql = "SELECT * FROM zhuyin order by zhuyin_row asc, zhuyin_order asc ";
  //   return $this->db->query($sql, array());
  // }

  // function query_textbook()
  // {
  //   $sql = "SELECT * FROM textbook_reading order by textbook_reading_no asc";
  //   return $this->db->query($sql, array());
  // }

  // function query_kidsreader()
  // {
  //   $sql = "SELECT * FROM kids_reading  where textbook_reading_grade=? and textbook_reading_semester=? order by textbook_reading_no asc";
  //   return $this->db->query($sql, array());
  // }

  ////

  function query_life($id)
  {
    $sql = "SELECT * FROM life_category where life_categoryId=? order by life_order asc ";
    return $this->db->query($sql, array($id));
  }

  function query_lifeDetail($id)
  {
    $sql = "SELECT * FROM life_detail where life_id=? order by life_order asc ";
    return $this->db->query($sql, array($id));
  }

  function query_NewID($id, $page)
  {
    $sql = "SELECT * FROM life_detail where life_id=? order by life_order asc limit $page ,1";
    return $this->db->query($sql, array($id));
  }
}

/* End of file Student_Model.php */
/* Location: ./system/application/model/Student_Model.php */