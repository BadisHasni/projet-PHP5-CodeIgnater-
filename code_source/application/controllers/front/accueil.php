<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public $data = array();
	
	public function __construct(){

		parent::__construct();
		//Chargement des ressources
		//$this->load->database();
		
		$this->load->helper(array('form', 'url'));
			   //Chargement des ressources 
				$this->load->database();
				$this->load->helper(array('MY_url_helper'));
				$this->load->library('form_validation');
			
	}

	function index(){

		//Chargement du model
		$this->load->model('front/categorie_model');
		
		//On charge les catégorie
		$this->data['categorie'] = $this->categorie_model->getCategorie();

		
		//On envoi les données à la vue !
		$this->load->view('front/front1',$this->data);
	
	}
	
	
	function perso(){
	
	     
	     
		
			$this->load->model('form_insrip/form_inscrip_model');
			
			$this->data = $this->form_inscrip_model->getRegionVille();

		

			
			
			//iput
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
		
			
			//rules
			$this->form_validation->set_rules('login', 'Login', 'required|is_unique[utilisateur.login]');
			$this->form_validation->set_rules('nom', 'Nom', 'required');
			$this->form_validation->set_rules('prenom', 'Prénom', 'required');
			$this->form_validation->set_rules('pwd', 'Password', 'required|matches[pwd_confirm]');
			$this->form_validation->set_rules('pwd_confirm', 'Confirmation du mot de passe', 'required|matches[pwd]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');
			$this->form_validation->set_rules('sexe', 'Sexe', 'required');
			$this->form_validation->set_rules('ville', 'id_ville', 'required|callback_ville_check');
			$this->form_validation->set_rules('adr', 'Adresse', 'required');
			$this->form_validation->set_rules('postale', 'Code Postale', 'required|numeric|xss_clean');
				
			if($this->form_validation->run() == FALSE){
				
				    //Chargement du model
				$this->load->model('front/categorie_model');
				
				//On charge les catégorie
				$this->data['categorie'] = $this->categorie_model->getCategorie();
		
				$this->load->view('front/inscriptionP',$this->data);
			
			}else{
				
				$this->load->model('form_insrip/form_inscrip_model');
				$data = array();
				$data['login'] = $login; 
				$this->load->library('encrypt');
				$data['nom'] = $nom;
				$data['prenom'] = $prenom;
				$data['pwd'] = $this->encrypt->encode($pass);
				$data['tel'] = $tel;
				$data['mail'] = $email;
				$data['adresse'] = $adresse;
				$data['code_postale'] = $code_postale;
				$data['sexe'] = $sexe;
				$data['id_ville'] =$ville;
				
				$data['type'] = '1';
				
				
				$this->data['region'] = $this->form_inscrip_model->getRegion();
				$this->form_inscrip_model->addUtilisateur($data);
				$this->load->view('front/front1',$this->data);
			}
		
		 }
		 
		 
		 
		 function asso(){
		
		
		    $this->load->model('form_insrip/form_inscrip_model');
			
			$this->data = $this->form_inscrip_model->getRegionVille();
			
			
			
		     //iput
			$login = $this->input->post('login');
			$nom_asso = $this->input->post('nom_asso');
			$nom = $this->input->post('nom');
			$pass = $this->input->post('pwd');
			$confirm = $this->input->post('pwd_confirm');
			$email = $this->input->post('email');
			$tel = $this->input->post('tel');
			$tel_fixe = $this->input->post('tel_fixe');
			$adresse = $this->input->post('adr');
			$code_postale = $this->input->post('postale');
			$ville = $this->input->post('ville');	
			$mat_asso = $this->input->post('mat_asso');
		
		
		
			//rules
			$this->form_validation->set_rules('login', 'Login', 'required|is_unique[utilisateur.login]');
			$this->form_validation->set_rules('nom_asso', 'NomA', 'required');
			$this->form_validation->set_rules('nom', 'NomR', 'required');
			$this->form_validation->set_rules('pwd', 'Password', 'required|matches[pwd_confirm]');
			$this->form_validation->set_rules('pwd_confirm', 'Confirmation du mot de passe', 'required|matches[pwd]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('tel', 'Téléphone', 'required|numeric|xss_clean');
			$this->form_validation->set_rules('tel_fixe', 'Téléphone_fixe', 'required|numeric|xss_clean');
			$this->form_validation->set_rules('ville', 'Ville', 'required|callback_ville_check');
			$this->form_validation->set_rules('adr', 'Adresse', 'required');
			$this->form_validation->set_rules('postale', 'Code Postale', 'required|numeric|xss_clean');
			$this->form_validation->set_rules('mat_asso', 'Matricule', 'required|numeric|xss_clean');
				
			if($this->form_validation->run() == FALSE){
				
				//Chargement du model
				$this->load->model('front/categorie_model');
				
				//On charge les catégorie
				$this->data['categorie'] = $this->categorie_model->getCategorie();
				
				
				$this->load->view('front/inscriptionA',$this->data);//data a remplir !!!	
			
			}else{
				
				$this->load->model('form_insrip/form_inscrip_model');
				$data = array();
				$data['login'] = $login; 
				$this->load->library('encrypt');
				$data['nom_asso'] = $nom_asso;
				$data['nom'] = $nom;
				$data['pwd'] = $this->encrypt->encode($pass);
				$data['tel'] = $tel;
				$data['tel_fixe'] = $tel_fixe;
				$data['mail'] = $email;
				$data['adresse'] = $adresse;
				$data['id_ville'] =$ville;
				$data['code_postale'] = $code_postale;
				$data['mat_asso'] = $mat_asso;
				
				$data['type'] = '2';
				
				$this->data['region'] = $this->form_inscrip_model->getRegion();
				$this->form_inscrip_model->addAssociation($data);
				$this->load->view('front/front1',$this->data);
			}
		
			
			
		 }
	

}