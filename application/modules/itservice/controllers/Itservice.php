<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itservice extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('user/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->database();
        $this->load->model('model_itservice');
        $this->load->helper(['form', 'url']);
    }
 
	public function index()
	{
		//$this->load->helper('url');
		//$this->load->model('model_user');
		$data['itservice'] = $this->model_itservice->list_itservice()->result();
               
        //$config['total_rows'] = count($this->User_model->get());
        //pencarian
        $pencarian = $this->input->post('pencarian');
        $result = $this->model_itservice->cari_itservice($pencarian);
        $data['itservice'] = $result['hasil'];

		$data['main'] = 'itservice/view_itservice'; 
		$this->load->view('template/layout', $data);
	}


	public function Input()
	{
		//$this->load->helper('form');
		$data['type']= "Input";
		$data['main'] = 'itservice/form_itservice'; 
		$this->load->view('template/layout', $data);
	}

	public function add()
	{
		
		//$this->load->model('model_user');
		$create = array(
			'nama_pemesan' 			=> $this->input->post('nama_pemesan'),
			'departement' 		=> $this->input->post('departement'),
			'tanggal_buat' 		=> $this->input->post('tanggal_buat'),
			'tanggal_selesai' 		=> $this->input->post('tanggal_selesai'),
			'category' 		=> $this->input->post('category'),
			'keluhan' 	=> $this->input->post('keluhan'),
			'status' 	=> $this->input->post('status'),
			'pic' 	=> $this->input->post('pic')
			);
		if ($this->input->post('simpan')=="Input") {
			$this->model_itservice->input($create);
		}else if ($this->input->post('simpan')=="Edit"){
			$id = $this->input->post('id');
			$this->model_itservice->edit($create, $id);
		}
		//$this->load->helper('url');
		redirect('itservice','refresh');
	}


	public function Edit(){
		$id = $this->input->get('itservice');
		$data['itservice'] = $this->model_itservice->getEdit($id);
		$data['type'] = "Edit";
		$data['main'] = 'itservice/form_itservice';
		$this->load->view('template/layout', $data);
	}	

	public function Delete(){
		$id = $this->input->get('itservice');
		$this->model_itservice->delete($id);
		redirect('itservice','refresh');
	}


}

/* End of file User.php */
/* Location: ./application/modules/admin/controllers/User.php */