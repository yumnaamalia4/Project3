<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Dashboard extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->simple_login->cek_login();  
    }  

    //Load Halaman dashboard
    public function index() {  
        $this->load->view('account/v_dashboard');  
        $this->load->view('restoran/editform'); 
        $this->load->view('restoran/myform'); 
        $this->load->view('restoran/list_menu'); 
    }
}  
