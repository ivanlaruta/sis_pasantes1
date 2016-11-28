<?php
class Con_horarios extends CI_Controller{
    

    function __construct()
    {
        parent:: __construct();
        $this->load->model('mod_horarios');
    }


    public function index(){


// obtenemos el array de dias y lo preparamos para enviar
$datos['arrDias'] = $this->mod_horarios->get_dias();
    
// cargamos  la interfaz y le enviamos los datos
$this->load->view('registrarhorario', $datos);

    }


    