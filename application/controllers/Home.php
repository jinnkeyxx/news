<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Admin_model');
        // $this->load->model('User_model');
    }



    public function index()
    {
        
        $data['title'] = "Home";
        // $this->load->view('template/header', $data);
        $this->load->view('home/home');
        // $this->load->view('template/footer'); 
      
    }
}