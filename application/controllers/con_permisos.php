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

			// copiar esto para id pasante
			$this->load->model('mPasante');


		}

		public function index()

		{

			$this->load->view('pasante/solicitudpermiso');


		}


public function enviar()
		{
			// para id pasante
			$id=$this->input->post('usuario');

			$datos['id_pasante'] = $this->mPasante->getIdPasante($id);

            $aa = $datos['id_pasante'][0];
			//echo "hola entre al metodo guardar";
			$param['fecha_permiso'] = $this->input->post('fechasol');
			$param['descripcion'] = $this->input->post('solicitud');
			$param['cat_estado_per'] =$this->input->post('estado');
			$param['fecha']=$this->input->post('fechaactual');
			$param['id_pasante']=$aa;


			$this->mod_permiso->enviar($param);

			echo'<script language="javascript">alert("Solicitud Enviada");</script>';	

		}	





}