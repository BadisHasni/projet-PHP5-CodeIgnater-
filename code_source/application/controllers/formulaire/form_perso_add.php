<?php

class Form_perso_add extends CI_Controller {

	function index()
	{
	    echo "Form_perso_add";
		
		$this->load->library('form_validation');
		
		$login = $this->input->post('login');
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$pass = $this->input->post('pwd');
		$confirm = $this->input->post('pwd_confirm');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$sexe = $this->input->post('sexe');
		$adresse = $this->input->post('adr');
		$code_postale = $this->input->post('postale');
		$ville = $this->input->post('ville');	
		
		
		$this->form_validation->set_rules('login', 'Login', 'required|is_unique[utilisateur.login]');
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required|matches[pwd_confirm]');
		$this->form_validation->set_rules('pwd_confirm', 'Confirmation du mot de passe', 'required|matches[pwd]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');
		$this->form_validation->set_rules('sexe', 'Sexe', 'required');
		$this->form_validation->set_rules('ville', 'Ville', 'required|callback_ville_check');
		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
		$this->form_validation->set_rules('code_postale', 'COde Postale', 'required|numeric|xss_clean');		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			echo "test1" ;
			
			$this->load->view('formulaire_inscrp/loginPerso');
		}
		else
		{  
		echo "test123" ;
			$this->load->model('form_insrip/form_inscrip_model');
			$data = array();
			$data['login'] = $login; 
			$this->load->library('encrypt');
			$data['nom'] = $nom;
			$data['prenom'] = $nom;
			$data['pwd'] = $this->encrypt->encode($pass);
			$data['tel'] = $tel;
			$data['mail'] = $email;
			$data['adresse'] = $adresse;
			$data['code_postale'] = $code_postale;
			$data['sexe'] = $sexe;
			
			
			$this->data['region'] = $this->form_inscrip_model->getRegion();
			$this->form_inscrip_model->addUtilisateur($data);
			$this->load->view('formulaire_inscrp/loginPerso',$this->data);
		
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