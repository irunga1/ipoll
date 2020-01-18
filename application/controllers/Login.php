<?php 
class  Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library("randomize");
        // $this->load->model("menu_model");
    }
    public function index(){        
        $data['title'] = "i-pollgt.com|login";
        $this->load->view("templatel",$data);
    }

    public function codigo(){
        $strRnd = $this->randomize->genWord();        
        $data['view'] = "cuestionario/codigo";
        $data['codigo'] = $strRnd;
        $data['breadcrumb'] = "Inicio,Codigo";
        $data['title'] = "Generar Codigo";
        $data['menu']  = $this->menu_model->getMenu();
        $this->load->view("template",$data);
    }


}
?>