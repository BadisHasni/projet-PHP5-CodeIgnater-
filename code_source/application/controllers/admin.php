<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		

class Admin extends CI_Controller {
		
		//Attribut tableau qui va contener les tyes d'annonces
		public $data = array();
		
		public function __construct(){
		    
			parent::__construct();
	        
			//Si l'admin est authentifié!
			if($this->session->userdata('type_admin') == 1){

			   //Chargement des ressources 
				$this->load->database();
				$this->load->helper(array('MY_url_helper'));

				//Chargement du model
				$this->load->model('admin_model/type_annonce_model');
				
				//Importer tous les TypeAnnonce de la table catégorie cad Troc , entraide , ...
				$this->data = $this->type_annonce_model->getTypeAnnonce();
			}
			
			
			else exit ("Accès Interdit");
	    }
	    
		
	
		function index(){
			
			
				
				$this->load->view('admin/index_admin',$this->data);
			
			
		}
		
		
		function troc_actif(){
			
			$this->load->model('admin_model/annonce_model');
			$this->data['annonce'] = $this->annonce_model->getTrocActif();
			$this->load->view('admin/troc_actif',$this->data);
		
		}
		
		
		function troc_inactif(){
			
			$this->load->model('admin_model/annonce_model');
			$this->data['annonce'] = $this->annonce_model->getTrocInactif();
			$this->load->view('admin/troc_inactif',$this->data);
		
		}
	
		
		function don_actif(){
			
			$this->load->model('admin_model/annonce_model');
			$this->data['annonce'] = $this->annonce_model->getDonActif();
			$this->load->view('admin/don_actif',$this->data);
		
		}
		
		
		function don_inactif(){
			
			$this->load->model('admin_model/annonce_model');
			$this->data['annonce'] = $this->annonce_model->getDonInactif();
			$this->load->view('admin/don_inactif',$this->data);
		
		}
		
		
		function entraide_actif(){
			
			$this->load->model('admin_model/annonce_model');
			$this->data['annonce'] = $this->annonce_model->getEntraideActif();
			$this->load->view('admin/entraide_actif',$this->data);
		
		}
		
		
		function entraide_inactif(){
			
			$this->load->model('admin_model/annonce_model');
			$this->data['annonce'] = $this->annonce_model->getEntraideInactif();
			$this->load->view('admin/entraide_inactif',$this->data);
		
		}
		
		
		public function statut_annonce($id){
			$this->load->model('admin_model/annonce_model');
			$this->annonce_model->statutAnnonce($id);
		}
		
		function delete_annonce($id){
			$id = (int)$id;
			$this->load->model('admin_model/annonce_model');
			$this->annonce_model->deleteAnnonce($id);
		}
		
		function editer_annonce($id="",$region=""){
			$id = (int)$id;
			$this->load->model('admin_model/annonce_model');
			$this->data = $this->annonce_model->getAnnonceInfo($id);
			if ($region!="")
				{
					$this->data['ville'] = $this->annonce_model->getVille($region);
				}
				
			$this->load->view('admin/edit_annonce',$this->data);
		}
		
		
		
		function categorie(){
			$this->load->model('admin_model/categorie_model');
			$this->data['categorie'] = $this->categorie_model->getCategorie();
			$this->load->view('admin/categorie',$this->data);
		}

		function annonce(){
			/*$this->load->model('admin_model/annonce_model');
			$this->data = $this->categorie_model->getAnnonce();
			$this->load->view('admin/annonce',$this->data);*/
			echo "HoussemZ";
		}
		
		function new_categorie(){
			$this->load->model('admin_model/categorie_model');
			$this->data['titre_categorie'] = $this->categorie_model->getTitreCategorie();
			$this->load->view('admin/new_categorie',$this->data);
		}
		
		function editer_categorie($id=""){
			$id = (int)$id;
		    $this->load->model('admin_model/categorie_model');
			$this->data = $this->categorie_model->getCategorieInfo($id);
			$this->load->view('admin/edit_categorie',$this->data);
			
		}
		
		function delete_categorie($id){
			$id = (int)$id;
			$this->load->model('admin_model/categorie_model');
			$this->categorie_model->deleteCategorie($id);
		}
		
		function admins(){
			$this->load->model('admin_model/admin_model');
			$this->data['admins'] = $this->admin_model->getAdmins();
			$this->load->view('admin/admins',$this->data);
		}
		
		function editer_admin($id=""){
			$id = (int)$id;
			$this->load->model('admin_model/admin_model');
			$this->data = $this->admin_model->getAdmin($id);
			$this->load->view('admin/edit_admin',$this->data);
		}
		
		function delete_admin($id){
			$id = (int)$id;
			$this->load->model('admin_model/admin_model');
			$this->admin_model->deleteAdmin($id);
		}
		
		function new_admin(){
			$this->load->model('admin_model/admin_model');
			$this->data['type_admin'] = $this->admin_model->getTypeAdmin();
			$this->load->view('admin/new_admin',$this->data);
		}
		
		public function ajouter_admin($data){
			$this->load->model('admin_model/admin_model');
			$this->admin_model->addAdmin($data);
		}
		
		public function statut_admin($id){
			$this->load->model('admin_model/admin_model');
			$this->admin_model->statutAdmin($id);
		}
		
		function Users(){
			$this->load->model('admin_model/users_model');
			$this->data['users'] = $this->users_model->getUsers();
			$this->load->view('admin/Users',$this->data);
		}
		
		function new_user(){
			$this->load->model('admin_model/users_model');
			$this->data['ville'] = $this->users_model->getVille();
			$this->load->view('admin/new_user',$this->data);
		}

		function editer_user($id="",$region=""){
			$id = (int)$id;
			$this->load->model('admin_model/users_model');
			$this->data = $this->users_model->getUser($id);
			if ($region!="")
				{
					$this->data['ville'] = $this->users_model->getVille($region);
				}
				
			$this->load->view('admin/edit_user',$this->data);
		}
		
		function delete_user($id){
			$id = (int)$id;
			$this->load->model('admin_model/users_model');
			$this->users_model->deleteUser($id);
		}
		
		public function statut_user($id){
			$this->load->model('admin_model/users_model');
			$this->users_model->statutUser($id);
		}	


		function Associations(){
			$this->load->model('admin_model/associations_model');
			$this->data['associations'] = $this->associations_model->getAssociations();
			$this->load->view('admin/Associations',$this->data);
		}
		
		function delete_association($id){
			$id = (int)$id;
			$this->load->model('admin_model/associations_model');
			$this->associations_model->deleteAssociations($id);
		}
		
		public function statut_association($id){
			$this->load->model('admin_model/associations_model');
			$this->associations_model->statutAssociations($id);
		}
		
		function editer_association($id="",$region=""){
			$id = (int)$id;
			$this->load->model('admin_model/associations_model');
			$this->data = $this->associations_model->getAssociation($id);
			if ($region!="")
				{
					$this->data['ville'] = $this->associations_model->getVille($region);
				}
				
			$this->load->view('admin/edit_association',$this->data);
		}

		
			
		
		
		
}