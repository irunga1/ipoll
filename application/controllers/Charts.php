<?php 
class  Charts extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['view'] = "charts/index";        
        $data['breadcrumb'] = "Inicio,Charts";
        $data['title'] = "Charts";
        $data['menu']  = $this->menu_model->getMenu();
        $this->load->view("template",$data);
    }
}
?>