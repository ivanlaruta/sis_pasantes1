<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainhorario extends CI_Controller{
    
    
    public function index(){
        $this->load->model('mod_horarios');
        $data['horario'] = $this->mod_horarios->getEstados();
        
        $this->load->view('registrarhorario', $data);
    }
}
