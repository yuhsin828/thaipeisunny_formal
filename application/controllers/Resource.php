<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller {

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
		$data['page']="resource";
        $this->load->model('Resource_Model');
        $result1 = $this->Resource_Model->query_resource('1');
        $result2 = $this->Resource_Model->query_resource('2');
        $result3 = $this->Resource_Model->query_resource('3');
        $data['viewResource1']=$result1;
        $data['viewResource2']=$result2;
        $data['viewResource3']=$result3;
        
		$this->load->view('resource/index.php',$data);
	}
	
	
}
