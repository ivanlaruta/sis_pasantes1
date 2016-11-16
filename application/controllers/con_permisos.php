<?php
/**
*
*/
class Con_permisos extends CI_Controller
{

	function __construct()
		{
			parent::__construct();
			$this->load->model('mod_permiso');



		}

		public function index()

		{

			$this->load->view('pasante/solicitudpermiso');


		}


public function enviar()
		{

			echo "hola entre al metodo guardar";
			$param['fecha_permiso'] = $this->input->post('fechasol');
			$param['descripcion'] = $this->input->post('solicitud');


			$this->mod_permiso->enviar($param);

		}	





}