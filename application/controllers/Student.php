<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

   /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    * 		http://example.com/index.php/welcome
    *	- or -
    * 		http://example.com/index.php/welcome/index
    *	- or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see https://codeigniter.com/user_guide/general/urls.html
    */

   public function index()
   {
      $data['page'] = "student";
      $this->load->view('student/index.php', $data);
   }

   public function zhuyin()
   {
      $data['page'] = "student";
      $this->load->model('Student_Model');
      $result1 = $this->Student_Model->query_zhuyin();
      $data['viewClass1'] = $result1;
      $this->load->view('student/zhuyin.php', $data);
   }

   public function textbook()
   {
      $data['page'] = "student";
      $this->load->model('Student_Model');
      $result1 = $this->Student_Model->query_textbook();
      // $result2 = $this->Student_Model->query_textbook($id, '2');
      $data['viewClass1'] = $result1;
      // $data['viewClass2'] = $result2;
      // $data['grade'] = $id;
      $this->load->view('student/textbook.php', $data);
   }

   public function kidsreader($id)
   {
      $data['page'] = "student";
      $this->load->model('Student_Model');
      $result1 = $this->Student_Model->query_query_kidsreader($id, '1');
      $result2 = $this->Student_Model->query_query_kidsreader($id, '2');
      $data['viewClass1'] = $result1;
      $data['viewClass2'] = $result2;
      $data['grade'] = $id;
      $this->load->view('student/kidsreader.php', $data);
   }


   ////


   public function life()
   {
      $data['page'] = "student";
      $this->load->model('Student_Model');
      $result1 = $this->Student_Model->query_life('1');
      $data['viewClass1'] = $result1;
      $result2 = $this->Student_Model->query_life('2');
      $data['viewClass2'] = $result2;
      $result3 = $this->Student_Model->query_life('3');
      $data['viewClass3'] = $result3;
      $this->load->view('student/life.php', $data);
   }

   public function lifelist($id)
   {
      if ($id == "") $id = "1";
      $data['page'] = "student";
      $this->load->model('Student_Model');
      $result = $this->Student_Model->query_lifeDetail($id);
      $data['viewClass'] = $result;
      $data['category'] = $id;
      //$data['row_cnt']=$result->num_rows();
      $this->load->view('student/lifelist.php', $data);
   }

   public function holiday()
   {
      $data['page'] = "student";
      $this->load->model('Student_Model');
      $this->load->view('student/holiday.php', $data);
   }

   public function holidaydetail($id)
   {
      $data['page'] = "student";
      $this->load->model('Student_Model');

      switch ($id) {
         case "1":  //春節
            //簡介
            $data['main'] = '春節';
            $data['main_title'] = '4_1_a_1.png';
            $data['main_img'] = '4_1_a_2.JPG';
            $data['main_content'] = '4_1_a_3.png';
            $data['main_audio'] = '4_1_a_4';
            //習俗
            $data['customs_title'] = array("4_1_b1_1.png", "4_1_b2_1.png", "4_1_b3_1.png", "4_1_b4_1.png", "4_1_b5_1.png");
            $data['customs_img'] = array("4_1_b1_2.JPG", "4_1_b2_2.JPG", "4_1_b3_2.JPG", "4_1_b4_2.JPG", "4_1_b5_2.JPG");
            $data['customs_content'] = array("4_1_b1_3.png", "4_1_b2_3.png", "4_1_b3_3.png", "4_1_b4_3.png", "4_1_b5_3.png");
            $data['customs_audio'] = array("4_1_b1_4", "4_1_b2_4", "4_1_b3_4", "4_1_b4_4", "4_1_b5_4");
            //故事
            $data['story_title'] = "4_1_c_1.png";
            $data['story_youtube'] = "jvqaz6LD4lQ";
            $data['story_content'] = "4_1_c_3.png";
            $data['story_audio'] = "4_1_c_4";
            //遊戲
            $data['game_scratch'] = "629840733";
            break;
         case "2":  //元宵
            //簡介
            $data['main'] = '元宵節';
            $data['main_title'] = '4_2_a_1.png';
            $data['main_img'] = '4_2_a_2.JPG';
            $data['main_content'] = '4_2_a_3.png';
            $data['main_audio'] = '4_2_a_4';
            //習俗
            $data['customs_title'] = array("4_2_b1_1.png", "4_2_b2_1.png", "4_2_b3_1.png");
            $data['customs_img'] = array("4_2_b1_2.JPG", "4_2_b2_2.JPG", "4_2_b3_2.JPG",);
            $data['customs_content'] = array("4_2_b1_3.png", "4_2_b2_3.png", "4_2_b3_3.png");
            $data['customs_audio'] = array("4_2_b1_4", "4_2_b2_4", "4_2_b3_4");
            //故事
            $data['story_title'] = "4_2_c_1.png";
            $data['story_youtube'] = "";
            $data['story_content'] = "4_2_c_3.png";
            $data['story_audio'] = "4_2_c_4";
            //遊戲
            $data['game_scratch'] = "";
            break;
         case "3": //清明節
            //簡介
            $data['main_title'] = '4_3_a_1.png';
            $data['main_img'] = '4_3_a_2.JPG';
            $data['main_content'] = '4_3_a_3.png';
            $data['main_audio'] = '4_3_a_4';
            //習俗
            $data['customs_title'] = array("4_3_b1_1.png", "4_3_b2_1.png", "4_3_b3_1.png");
            $data['customs_img'] = array("4_3_b1_2.JPG", "4_3_b2_2.JPG", "4_3_b3_2.JPG");
            $data['customs_content'] = array("4_3_b1_3.png", "4_3_b2_3.png", "4_3_b3_3.png");
            $data['customs_audio'] = array("4_3_b1_4", "4_3_b2_4", "4_3_b3_4");
            //故事
            $data['story_title'] = "4_3_c_1.png";
            $data['story_youtube'] = "";
            $data['story_content'] = "4_3_c_3.png";
            $data['story_audio'] = "4_3_c_4";
            //遊戲
            $data['game_scratch'] = "";
            break;
         case "4":  //端年節
            //簡介
            $data['main_title'] = '4_4_a_1.png';
            $data['main_img'] = '4_4_a_2.JPG';
            $data['main_content'] = '4_4_a_3.png';
            $data['main_audio'] = '4_4_a_4';
            //習俗
            $data['customs_title'] = array("4_4_b1_1.png", "4_4_b2_1.png", "4_4_b3_1.png", "4_4_b4_1.png");
            $data['customs_img'] = array("4_4_b1_2.JPG", "4_4_b2_2.JPG", "4_4_b3_2.JPG", "4_4_b4_2.JPG");
            $data['customs_content'] = array("4_4_b1_3.png", "4_4_b2_3.png", "4_4_b3_3.png", "4_4_b4_3.png");
            $data['customs_audio'] = array("4_4_b1_4", "4_4_b2_4", "4_4_b3_4", "4_4_b4_4");
            //故事
            $data['story_title'] = "4_4_c_1.png";
            $data['story_youtube'] = "";
            $data['story_content'] = "4_4_c_3.png";
            $data['story_audio'] = "4_4_c_4";
            //遊戲
            $data['game_scratch'] = "";
            break;
         case "5": //七夕
            //簡介
            $data['main_title'] = '4_5_a_1.png';
            $data['main_img'] = '4_5_a_2.JPG';
            $data['main_content'] = '4_5_a_3.png';
            $data['main_audio'] = '4_5_a_4';
            //習俗
            $data['customs_title'] = array("4_5_b1_1.png", "4_5_b2_1.png");
            $data['customs_img'] = array("4_5_b1_2.JPG", "4_5_b2_2.JPG");
            $data['customs_content'] = array("4_5_b1_3.png", "4_5_b2_3.png");
            $data['customs_audio'] = array("4_5_b1_4", "4_5_b2_4");
            //故事
            $data['story_title'] = "4_5_c_1.png";
            $data['story_youtube'] = "pEhSctvtItY";
            $data['story_content'] = "4_5_c_3.png";
            $data['story_audio'] = "4_5_c_4";
            //遊戲
            $data['game_scratch'] = "558149489";
            break;
         case "6": //中元節
            //簡介
            $data['main_title'] = '4_6_a_1.png';
            $data['main_img'] = '4_6_a_2.JPG';
            $data['main_content'] = '4_6_a_3.png';
            $data['main_audio'] = '4_6_a_4';
            //習俗
            $data['customs_title'] = array("4_6_b1_1.png", "4_6_b2_1.png", "4_6_b3_1.png");
            $data['customs_img'] = array("4_6_b1_2.JPG", "4_6_b2_2.JPG", "4_6_b3_2.JPG");
            $data['customs_content'] = array("4_6_b1_3.png", "4_6_b2_3.png", "4_6_b3_3.png");
            $data['customs_audio'] = array("4_6_b1_4", "4_6_b2_4", "4_6_b3_4");
            //故事
            $data['story_title'] = "4_6_c_1.png";
            $data['story_youtube'] = "lZpxpxcc1Pg";
            $data['story_content'] = "4_6_c_3.png";
            $data['story_audio'] = "4_6_c_4";
            //遊戲
            $data['game_scratch'] = "561158055";
            break;

         case "7": //中秋節
            //簡介
            $data['main_title'] = '4_7_a_1.png';
            $data['main_img'] = '4_7_a_2.JPG';
            $data['main_content'] = '4_7_a_3.png';
            $data['main_audio'] = '4_7_a_4';
            //習俗
            $data['customs_title'] = array("4_7_b1_1.png", "4_7_b2_1.png", "4_7_b3_1.png");
            $data['customs_img'] = array("4_7_b1_2.JPG", "4_7_b2_2.JPG", "4_7_b3_2.JPG");
            $data['customs_content'] = array("4_7_b1_3.png", "4_7_b2_3.png", "4_7_b3_3.png");
            $data['customs_audio'] = array("4_7_b1_4", "4_7_b2_4", "4_7_b3_4");
            //故事
            $data['story_title'] = "4_7_c_1.png";
            $data['story_youtube'] = "8LEXaJeyejU";
            $data['story_content'] = "4_7_c_3.png";
            $data['story_audio'] = "4_7_c_4";
            //遊戲
            $data['game_scratch'] = "571077018";
            break;

         case "8": //重陽節
            //簡介
            $data['main_title'] = '4_8_a_1.png';
            $data['main_img'] = '4_8_a_2.JPG';
            $data['main_content'] = '4_8_a_3.png';
            $data['main_audio'] = '4_8_a_4';
            //習俗
            $data['customs_title'] = array("4_8_b1_1.png", "4_8_b2_1.png", "4_8_b3_1.png");
            $data['customs_img'] = array("4_8_b1_2.JPG", "4_8_b2_2.JPG", "4_8_b3_2.JPG");
            $data['customs_content'] = array("4_8_b1_3.png", "4_8_b2_3.png", "4_8_b3_3.png");
            $data['customs_audio'] = array("4_8_b1_4", "4_8_b2_4", "4_8_b3_4");
            //故事
            $data['story_title'] = "4_8_c_1.png";
            $data['story_youtube'] = "mim33WarSQc";
            $data['story_content'] = "4_8_c_3.png";
            $data['story_audio'] = "4_8_c_4";
            //遊戲
            $data['game_scratch'] = "577237303";
            break;
         default:
            //簡介
            $data['main_title'] = '4_1_a_1.png';
            $data['main_img'] = '4_1_a_2.JPG';
            $data['main_content'] = '4_1_a_3.png';
            $data['main_audio'] = '4_1_a_4';
            //習俗
            $data['customs_title'] = array("4_1_b1_1.png", "4_1_b2_1.png", "4_1_b3_1.png", "4_1_b4_1.png", "4_1_b5_1.png");
            $data['customs_img'] = array("4_1_b1_2.JPG", "4_1_b2_2.JPG", "4_1_b3_2.JPG", "4_1_b4_2.JPG", "4_1_b5_2.JPG");
            $data['customs_content'] = array("4_1_b1_3.png", "4_1_b2_3.png", "4_1_b3_3.png", "4_1_b4_3.png", "4_1_b5_3.png");
            $data['customs_audio'] = array("4_1_b1_4", "4_1_b2_4", "4_1_b3_4", "4_1_b4_4", "4_1_b5_4");
            //故事
            $data['story_title'] = "4_1_c_1.png";
            $data['story_youtube'] = "GWnFZI-m-pM";
            $data['story_content'] = "4_1_c_3.png";
            $data['story_audio'] = "4_1_c_4";
            //遊戲
            $data['game_scratch'] = "";
            break;
      }

      $this->load->view('student/holidaydetail.php', $data);
   }

   function queryCurrentLife()
   {
      $category = $this->input->post("c");
      $p = (int)$this->input->post("p");
      // if($p==0) $p=1;
      $page = ($p) * 5;
      $this->load->model('Student_Model');
      $result = $this->Student_Model->query_NewID($category, $page);
      echo json_encode($result->row());
   }
}
