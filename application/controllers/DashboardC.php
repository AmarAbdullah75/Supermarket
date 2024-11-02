<?php 
defined("BASEPATH") OR exit('No direct script access allowed');

class DashboardC extends CI_Controller{
    public function index(){
        $this->load->library('session');
        if($this->session->userdata("1lY5m")===true){
            $this->session->set_userdata("path","dashboard");
            $this->load->view("DashboardV");
        }else{
            redirect("login");
        }
    }
}

?>