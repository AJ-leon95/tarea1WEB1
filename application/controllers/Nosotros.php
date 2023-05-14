<?php 
class nosotros extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function mv(){
        $this->load->view('header');
        $this->load->view('nosotros/mv');
        $this->load->view('footer');
    }
}



?>