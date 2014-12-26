<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class __admin__ extends CI_Controller {
	public $type_admin = "";
	public $login = "";
	public $pass = "";

	public function __construct(){

		parent::__construct();
			
	}
	
	public function index(){
		
		$this->checkAdmin();		
	}
	
	public function checkAdmin(){
	
		$this->login = $this->input->post('login');
		$this->pass = $this->input->post('pwd');
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login', 'Login', 'required|callback_check_login');
		$this->form_validation->set_rules('pwd', 'Mot de passe', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/login_form');
		}
		else
		{
			 
			$this->load->library('encrypt');
			
			$this->load->model('admin_model/admin_model');
			$this->type_admin = (int) $this->admin_model->verifyAdmin($this->login,$this->pass);
			
			$this->session->set_userdata('login', $this->login);
			$this->session->set_userdata('type_admin', $this->type_admin);
				
			if ($this->type_admin == 1)
			{
				//$session_id = $this->session->userdata('session_id');
				
				redirect(my_url('index.php/admin/'), 'refresh');
			}
			
			
		}
	}
	
	public function check_login($l){
			$this->load->library('encrypt');
			
			$this->load->model('admin_model/admin_model');
			$this->type_admin = (int) $this->admin_model->verifyAdmin($this->login,$this->pass);
			
			if ($this->type_admin == 0)
			{
				$this->form_validation->set_message('check_login', 'le Login ou le Mot de passe est incorrect');
				return FALSE;
			}
	}
	
	public function logout(){
	
		$this->session->sess_destroy();
		$this->load->view('admin/login_form');
		
	}
}