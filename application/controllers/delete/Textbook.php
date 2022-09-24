<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Textbook extends CI_Controller
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
	
	// public function index()
	// {
	// 	$data['page'] = "home";
	// 	$this->load->view('textbook/index.php', $data);
	// }

	// public function detail($id)
	// {
	// 	$data['page'] = "home";
	// 	$this->load->model('Textbook_Model');
	// 	$result1 = $this->Textbook_Model->query_Class($id, '1');
	// 	$result2 = $this->Textbook_Model->query_Class($id, '2');
	// 	//$result = $column->row();
	// 	$data['viewClass1'] = $result1;
	// 	$data['viewClass2'] = $result2;
	// 	$data['grade'] = $id;
	// 	$this->load->view('textbook/detail.php', $data);
	// }
}
