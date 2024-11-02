<?php 
defined("BASEPATH") OR exit('No direct script access allowed');

class AuthenticationC extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("KasirM");
        $this->load->library('session');
        $this->load->helper('cookie');
    }

    public function index(){
        if(get_cookie("1lY5m")){
            $this->session->set_userdata("1lY5m",true);

            $data = $this->KasirM->get_all_kasir();
            foreach($data as $item):
                if(hash("sha256",$item->id_kasir)==get_cookie("31dkHtTY")){
                    $this->session->set_userdata("31dkHtTY",$item->id_kasir);
                }
            endforeach;
            redirect($this->session->userdata("path"));
        }if($this->session->userdata("1lY5m")===true){
            redirect($this->session->userdata("path"));
        }else{
            $this->load->view("LoginV");
        }
    }
    
    public function authentication(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
    
        if (is_null($username) || is_null($password) || $username === '' || $password === '') {
            $this->session->set_flashdata('authNull', 'Username atau Password harus terisi!');
            redirect("login");
            return;
        }
    
        $data = $this->KasirM->get_all_kasir();
        $auth = false;    
        foreach($data as $item):
            if($item->username == $username && $item->password == $password){
                $auth = true;
                if($this->input->post("checkbox")){
                    set_cookie([
                        "name"=>"1lY5m",
                        "value"=>"d00bfb47dcf3020e768b6fff96bb722b1c876f2d70ee271de710c5f76f991c66",
                        "expire"=> 3600,
                        "path"=> "/",
                        'secure'   => TRUE,
                        'httponly' => TRUE
                    ]);
                    set_cookie([
                        "name"=>"31dkHtTY",
                        "value"=>hash("sha256",$item->id_kasir),
                        "expire"=> 3600,
                        "path"=> "/",
                        'secure'   => TRUE,
                        'httponly' => TRUE
                    ]);
                }
    
                $dataSession = array(
                    "31dkHtTY" => $item->id_kasir,
                    "1lY5m" => true
                );
                $this->session->set_userdata($dataSession);
                redirect("dashboard");
            }
        endforeach;
    
        if (!$auth) {
            $this->session->set_flashdata('error', 'Username atau Password salah!');
            redirect("login");
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        delete_cookie('1lY5m');
        delete_cookie('31dkHtTY');
        redirect("login");
    }
}

?>