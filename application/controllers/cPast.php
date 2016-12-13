
<?php


class cPast extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this -> load -> model('mTareaPasante');
        $this -> load -> model('mEncargado');
        $this -> load->library('encrypt');
    }

    /*public function index(){
        $this->load->view('header');
        $this -> load-> view ('jefe/RegistroEncargado');
        $this->load->view('footer');
    }*/

    public function guardar()
    {
        date_default_timezone_set('America/La_Paz');
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
                $param['id_actividad'] =$_POST['idtarea'];
                $param['fecha'] =date('Y-m-d'); 
                $param['cat_estado_act'] ="PENDIENTE";
                $param['id_encargado'] = 1;
               
               
                 $this->mTareaPasante->guardar($param);
                
            }
            
            $this->load->view('header');
            $this->load->view('encargado/controlPasantes');
            $this->load->view('footer');
        }
        else {
            $selected = 'Debes seleccionar un pasante';
        }

       
        }
    }   

}    
?>