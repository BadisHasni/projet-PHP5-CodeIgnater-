<?php

class Form_annonce_edit extends CI_Controller {

	function index()
	{
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$id = $this->input->post('id_annonce');
		$titre = $this->input->post('titre');
		$date_expiration = $this->input->post('date_expiration');
		$categorie = $this->input->post('categorie');
		$ville = $this->input->post('ville');
		$region = $this->input->post('region');
		$desc = $this->input->post('description');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$adresse = $this->input->post('adresse');
		$code_postale = $this->input->post('code_postale');
		$type_annonce = $this->input->post('type_annonce');
		

		
		$this->form_validation->set_rules('titre', 'Titre', 'required');
		$this->form_validation->set_rules('date_expiration', 'Date Expiration', 'required');
		$this->form_validation->set_rules('categorie', 'categorie', 'required|callback_categorie_check');
		$this->form_validation->set_rules('ville', 'Ville', 'required|callback_ville_check');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');
		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
		$this->form_validation->set_rules('code_postale', 'Code Postale', 'required|numeric|xss_clean');
		$this->form_validation->set_rules('type_annonce', 'Type Annonce', 'required|callback_type_annonce_check');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('admin_model/annonce_model');
			$this->data = $this->annonce_model->getAnnonceInfo($id);
			$this->load->view('admin/edit_annonce',$this->data);
		}
		else
		{
			
			$data['titre'] = $titre; 
			$data['date_expiration'] = $date_expiration;
			$data['id_categorie'] = $categorie;
			$data['tel'] = $tel;
			$data['id_ville'] = $ville;
			$data['desc'] = $desc;
			$data['mail'] = $email;
			$data['adresse'] = $adresse;
			$data['code_postale'] = $code_postale;
			$data['id_type_annonce'] = $type_annonce;
			
			
			$this->load->model('admin_model/annonce_model');
			$this->annonce_model->editAnnonce($id,$data);
			
			

			
			$this->load->model('admin_model/type_annonce_model');
			$this->data = $this->annonce_model->getAnnonceInfo($id);
			
			$this->data['ville'] = $this->annonce_model->getVille($region);
			
			$this->load->view('admin/edit_annonce',$this->data);
			echo '<script> modif_annonce = 1;</script>';
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
	
	public function categorie_check($str){
		if ($str == 'choisir')
		{
			$this->form_validation->set_message('ville_check', 'Veuillez choisir une Catégorie');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	public function type_annonce_check($str){
		if ($str == 'choisir')
		{
			$this->form_validation->set_message('ville_check', 'Veuillez choisir un Type Annonce');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>