
<?php


class cPast extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this -> load -> model('mTareaPasante');
        $this -> load->library('encrypt');
    }

    /*public function index(){
        $this->load->view('header');
        $this -> load-> view ('jefe/RegistroEncargado');
        $this->load->view('footer');
    }*/

    public function guardar()
    {

        if (isset($_POST['enviar'])) {
         if (is_array($_POST['ids'])) {
            $selected = '';
            $num = count($_POST['ids']);
            $current = 0;

            foreach ($_POST['ids'] as $key => $value) {
                if ($current != $num-1)
                    $selected .= $value.', ';

                else
                    $selected .= $value.'.';
                $current++;


                $param['id_pasante'] = $value;
                $param['id_actividad'] =75;
                $param['fecha'] ="2016-12-01";
                $param['cat_estado_act'] ="PEN";
                $param['id_encargado'] =1;
                $param['descripcion'] ="hola hola hola";
               
                 $this->mTareaPasante->guardar($param);
               $this->load->view('header');
        $this->load->view('encargado/controlPasantes');
        $this->load->view('footer');
            }
        }
        else {
            $selected = 'Debes seleccionar un pasante';
        }

       
        }
    }   

}    
?>