<?php

class Form_categorie_edit extends CI_Controller {

	function index()
	{
		//$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$id = $this->input->post('id_categorie');
		$titre = $this->input->post('titre');
		$parent = $this->input->post('parent');
		$description = $this->input->post('description');
		$position = $this->input->post('position');
		
		$this->form_validation->set_rules('titre', 'Titre', 'required|is_unique[categorie.titre]');
		$this->form_validation->set_rules('parent', 'Parent', '');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required|numeric|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('admin_model/categorie_model');
			$this->data = $this->categorie_model->getCategorieInfo($id);
			$this->load->view('admin/edit_categorie',$this->data);
		}
		else
		{
			$data['titre'] = $titre; 
			$data['position'] = $position;
			$data['desc'] = $description;
			$data['parent'] = $parent;
			
			$this->load->model('admin_model/categorie_model');
			$this->categorie_model->editCategorie($id,$data);
			
			
			$this->load->model('admin_model/type_annonce_model');
			$this->data = $this->type_annonce_model->getTypeAnnonce();
			$this->data['categorie'] = $this->categorie_model->getCategorie();
			$this->load->view('admin/categorie',$this->data);
		}
	}
}
?>