<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
    private $table="utilisateur";
	
	function construct(){
		
		 parent::__construct();
				
	}
	function getUsers(){
     
        $data = array();
		
		$query = $this->db->select('ville.nom,id_region,id_utilisateur,mail,login,utilisateur.nom,prenom,statut')
					->from($this->table)
					->join('ville', 'ville.id_ville = utilisateur.id_ville')
					->where('type',1)
					->get();
		
		
			  
		$data['users'] = $query;
	    return $data['users'];
		
   }
   
   function getUser($id){
     
        $data = array();
		
		$query = $this->db->select('region.nom,ville.nom,id_utilisateur,login,utilisateur.nom,prenom,mail,tel,utilisateur.id_ville,ville.id_region,adresse,code_postale,sexe')
					->from($this->table)
					->join('ville', 'ville.id_ville = utilisateur.id_ville')
					->join('region', 'ville.id_region = region.id_region')
					->where('id_utilisateur', $id)
					->get();
		
			  
		
		
		$data = $this->getRegion();
		
		$data['user'] = $query;
		
		$query3 = $this->db->select('titre')
					->from('type_annonce')
					->where('statut',1)
					->get();
		
		
			  
		$data['type_annonce'] = $query3;
		
	    return $data;
		
   }
   
   function deleteUser($id){
     
        $this->db->where('id_utilisateur', $id);
		$this->db->delete($this->table);
   }
   
   function statutUser($id){
		$query = $this->db->select('id_utilisateur,statut')
					->from($this->table)
					->where('id_utilisateur',$id)
					->get();
		$row = $query->row();
		$statut = $row->statut;
		if ($statut == 1)
			$data['statut'] = 0;
		else $data['statut'] = 1;
        $this->db->where('id_utilisateur', $id);
		$this->db->update('utilisateur', $data);
   }
   
   function addUser($data){
   
		$this->db->insert($this->table,$data);
   }
   
   function editUser($id,$data){
   
		$this->db->where('id_utilisateur', $id);
		$this->db->update($this->table, $data); 
   }
   
   function getVille($id=""){
		$data = array();
		
		$query2 = $this->db->select('id_ville,nom,id_region')
					->from('ville')
					->where('id_region',$id)
					->get();
		$data['ville'] = $query2;
		
		return $data['ville'];
   }
   
   function getRegion(){
		
		$data = array();
		
		$query2 = $this->db->select('id_region,nom')
					->from('region')
					->get();
					
		$result = $query2->result_array();
		$id_region= $result[0]['id_region'];
		
		$data['region'] = $query2;
		$data['ville'] = $this->getVille($id_region);
		
		return $data;
	
   }
}
?>