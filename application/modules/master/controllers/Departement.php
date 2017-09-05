<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departement extends CI_Controller {

	public function __construct() {
        parent::__construct();
         if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->database();
        $this->load->model('model_departement');
        $this->load->helper(['form', 'url']);
    }
 
	public function index()
	{
		//$this->load->helper('url');
		//$this->load->model('model_user');
		$data['departement'] = $this->model_departement->list_departement()->result();
               
        //$config['total_rows'] = count($this->User_model->get());
        //pencarian
        $pencarian = $this->input->post('pencarian');
        $result = $this->model_departement->cari_departement($pencarian);
        $data['departement'] = $result['hasil'];

		$data['main'] = 'master/view_departement'; 
		$this->load->view('template/layout', $data);
	}


	public function Input()
	{
		//$this->load->helper('form');
		$data['type']= "Input";
		$data['main'] = 'master/form_departement'; 
		$this->load->view('template/layout', $data);
	}

	public function add()
	{
		
		//$this->load->model('model_departement');
		$create = array(
			'departement_name' => $this->input->post('departement_name'));
		if ($this->input->post('simpan')=="Input") {
			$this->model_departement->input($create);
		}else if ($this->input->post('simpan')=="Edit"){
			$departement_id = $this->input->post('departement_id');
			$this->model_departement->edit($create, $departement_id);
		}
		//$this->load->helper('url');
		redirect('master/departement','refresh');
	}


	public function Edit(){
		$departement_id = $this->input->get('departement');
		$data['departement'] = $this->model_departement->getEdit($departement_id);
		$data['type'] = "Edit";
		$data['main'] = 'master/form_departement';
		$this->load->view('template/layout', $data);
	}	

	public function Delete(){
		$departement_id = $this->input->get('departement');
		$this->model_departement->delete($departement_id);
		redirect('master/departement','refresh');
	}


}

/* End of file User.php */
/* Location: ./application/modules/admin/controllers/User.php */