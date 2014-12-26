<?php

class Form_user_edit extends CI_Controller {

	function index()
	{
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$id = $this->input->post('id_utilisateur');
		$login = $this->input->post('login');
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$ville = $this->input->post('ville');
		$pass = $this->input->post('password');
		$adresse = $this->input->post('adresse');
		$code_postale = $this->input->post('code_postale');
		$sexe = $this->input->post('sexe');

		
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
		$this->form_validation->set_rules('password', 'Password', 'matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirmation', 'matches[password]');
		$this->form_validation->set_rules('ville', 'Ville', 'required|callback_ville_check');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');
		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
		$this->form_validation->set_rules('code_postale', 'COde Postale', 'required|numeric|xss_clean');
		$this->form_validation->set_rules('sexe', 'Sexe', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('admin_model/users_model');
			$this->data = $this->users_model->getUser($id);
			$this->load->view('admin/edit_user',$this->data);
		}
		else
		{
			
			$data['login'] = $login; 
			$data['nom'] = $nom;
			$data['prenom'] = $prenom;
			$this->load->library('encrypt');
			if ($pass!="")
				$data['pwd'] = $this->encrypt->encode($pass);
			$data['tel'] = $tel;
			$data['id_ville'] = $ville;
			$data['mail'] = $email;
			$data['adresse'] = $adresse;
			$data['code_postale'] = $code_postale;
			$data['sexe'] = $sexe;
			
			
			$this->load->model('admin_model/users_model');
			$this->users_model->editUser($id,$data);
			
			

			
			$this->load->model('admin_model/type_annonce_model');
			$this->data = $this->type_annonce_model->getTypeAnnonce();
			$this->data['users'] = $this->users_model->getUsers();
			$this->load->view('admin/Users',$this->data);
			
			echo '<script> modif_user = 1;</script>';
		}
	}
	
	public function ville_check($str){
		if ($str == 'choisir')
		{
			$this->form_validation->set_message('ville_check', 'Veuillez choisir une Ville');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>