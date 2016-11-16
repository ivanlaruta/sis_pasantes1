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


			echo'<script language="javascript">alert("Solicitud Enviada");</script>';
			//echo "hola entre al metodo guardar";
			$param['fecha_permiso'] = $this->input->post('fechasol');
			$param['descripcion'] = $this->input->post('solicitud');
			$param['cat_estado_per'] =$this->input->post('estado');
			$param['fecha']=$this->input->post('fechaactual');
			$param['id_pasante']=$this->input->post('usuario');


			$this->mod_permiso->enviar($param);

		}	





}