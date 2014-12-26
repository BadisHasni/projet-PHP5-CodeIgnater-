<?php

class Form_admin_add extends CI_Controller {

	function index()
	{
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$login = $this->input->post('login');
		$type = $this->input->post('type_admin');
		$pass = $this->input->post('password');
		$confirm = $this->input->post('confirm_password');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		
		$this->form_validation->set_rules('login', 'Login', 'required|is_unique[admin.login]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('type_admin', 'Type', 'required|callback_type_check');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('admin_model/type_annonce_model');
			$this->data = $this->type_annonce_model->getTypeAnnonce();
			$this->load->model('admin_model/admin_model');
			$this->data['type_admin'] = $this->admin_model->getTypeAdmin();
			$this->load->view('admin/new_admin',$this->data);
		}
		else
		{
			$data['login'] = $login; 
			$this->load->library('encrypt');
			$data['pwd'] = $this->encrypt->encode($pass);
			$data['tel'] = $tel;
			$data['mail'] = $email;
			$data['id_type_admin'] = $type;
			
			$this->load->model('admin_model/admin_model');
			$this->admin_model->addAdmin($data);
			
			
			$this->load->model('admin_model/type_annonce_model');
			$this->data = $this->type_annonce_model->getTypeAnnonce();
			$this->data['admins'] = $this->admin_model->getAdmins();
			$this->load->view('admin/admins',$this->data);
		}
	}
	
	public function type_check($str){
		if ($str == 'choisir')
		{
			$this->form_validation->set_message('type_check', 'Veuillez choisir un type d\'Administrateur');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>