<?php

class Form_asso_edit extends CI_Controller {

	function index()
	{
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$id = $this->input->post('id_utilisateur');
		$login = $this->input->post('login');
		$nom_asso = $this->input->post('nom_asso');
		$mat_asso = $this->input->post('mat_asso');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$ville = $this->input->post('ville');
		$pass = $this->input->post('password');
		$adresse = $this->input->post('adresse');
		$code_postale = $this->input->post('code_postale');

		
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('nom_asso', 'Nom Association', 'required');
		$this->form_validation->set_rules('mat_asso', 'Matricule', 'required');
		$this->form_validation->set_rules('password', 'Password', 'matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirmation', 'matches[password]');
		$this->form_validation->set_rules('ville', 'Ville', 'required|callback_ville_check');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');
		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
		$this->form_validation->set_rules('code_postale', 'Code Postale', 'required|numeric|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('admin_model/associations_model');
			$this->data = $this->associations_model->getAssociation($id);
			$this->load->view('admin/edit_association',$this->data);
		}
		else
		{
			
			$data['login'] = $login; 
			$data['nom_asso'] = $nom_asso;
			$data['mat_asso'] = $mat_asso;
			$this->load->library('encrypt');
			if ($pass!="")
				$data['pwd'] = $this->encrypt->encode($pass);
			$data['tel'] = $tel;
			$data['id_ville'] = $ville;
			$data['mail'] = $email;
			$data['adresse'] = $adresse;
			$data['code_postale'] = $code_postale;
			
			
			$this->load->model('admin_model/associations_model');
			$this->associations_model->editAssociation($id,$data);
			
			

			
			$this->load->model('admin_model/type_annonce_model');
			$this->data = $this->type_annonce_model->getTypeAnnonce();
			$this->data['associations'] = $this->associations_model->getAssociations();
			$this->load->view('admin/Associations',$this->data);
			
			echo '<script> modif_asso = 1;</script>';
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