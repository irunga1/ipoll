<?php 
class  Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['view'] = "dashboard/index";        
        $data['breadcrumb'] = "Inicio,Dashboard";
        $data['title'] = "Dashboard";
        $data['menu']  = $this->menu_model->getMenu();
        $this->load->view("template",$data);
    }
}
?>