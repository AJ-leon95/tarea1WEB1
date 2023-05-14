<?php 

class menus extends CI_Controller
{
    // Constructor
    function __construct(){
        parent::__construct();

    }
    public function desayunos(){
        $this->load->view('header');
        $this->load->view('menus/desayunos'); //cuando invoque a la funcion se me va a presentar la vista
        $this->load->view('footer');
    }
    public function almuerzos(){
        $this->load->view('header');
        $this->load->view('menus/almuerzos'); //cuando invoque a la funcion se me va a presentar la vista
        $this->load->view('footer');
    }
    public function meriendas(){
        $this->load->view('header');
        $this->load->view('menus/meriendas'); //cuando invoque a la funcion se me va a presentar la vista
        $this->load->view('footer');
    }
    public function cartas(){
        $this->load->view('header');
        $this->load->view('menus/cartas'); //cuando invoque a la funcion se me va a presentar la vista
        $this->load->view('footer');
    }
   
}



?>