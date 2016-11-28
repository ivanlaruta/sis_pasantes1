<?php
class Con_horarios extends CI_Controller{
   

    public function index(){
    	$this->load->model('mod_horarios');
    	$data['dias']=$this->mod_horarios->devolver_dias();
    }


   }