<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

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
		$data['page']="download";
        //$this->load->model('News_Model');
        //$result= $this->News_Model->query_newslist();
        //$data['viewNews']=$result;
        
		$this->load->view('download/index.php',$data);
	}
	public function detail($id)
    {
        $data['page']="news";
        $this->load->model('News_Model');
        $result= $this->News_Model->query_news($id);
        $data['viewNews']=$result->row();
        
        $this->load->view('news/detail.php',$data);
    }
	
}
