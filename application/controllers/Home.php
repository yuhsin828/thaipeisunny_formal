<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
        $data['page'] = "home";
        $this->load->view('home/home.php', $data);
    }

    public function contact()
    {
        $data['page'] = "home";
        $this->load->view('home/contact.php', $data);
    }

    public function copyright()
    {
        $data['page'] = "home";
        $this->load->view('home/copyright.php', $data);
    }

    public function sitemap()
    {
        $data['page'] = "home";
        $this->load->view('home/sitemap.php', $data);
    }

}
