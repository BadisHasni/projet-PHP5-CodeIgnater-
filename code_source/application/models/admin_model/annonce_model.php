<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Annonce_model extends CI_Model {
    private $table="annonce";
	
	function construct(){
		
		 parent::__construct();
		 
				
	}
   
   
   function getTrocActif(){
     
        $data = array();
		
		$query = $this->db->select('ville.id_region,id_annonce,titre,desc,img,date_insertion,annonce.id_utilisateur,login,annonce.statut')
					->from($this->table)
					->join('utilisateur', 'utilisateur.id_utilisateur = annonce.id_utilisateur')
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->where('annonce.statut',1)
					->where('id_type_annonce',1)
					->get();
		
		
			  
		$data['annonce'] = $query;
	    return $data['annonce'];
		
   }
   
   
   function getTrocInactif(){
     
        $data = array();
		
		$query = $this->db->select('ville.id_region,id_annonce,titre,desc,img,date_insertion,annonce.id_utilisateur,login,annonce.statut')
					->from($this->table)
					->join('utilisateur', 'utilisateur.id_utilisateur = annonce.id_utilisateur')
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->where('annonce.statut',0)
					->where('id_type_annonce',1)
					->get();
		
		
			  
		$data['annonce'] = $query;
	    return $data['annonce'];
		
   }
   
   
   function getDonActif(){
     
        $data = array();
		
		$query = $this->db->select('ville.id_region,id_annonce,titre,desc,img,date_insertion,annonce.id_utilisateur,login,annonce.statut')
					->from($this->table)
					->join('utilisateur', 'utilisateur.id_utilisateur = annonce.id_utilisateur')
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->where('annonce.statut',1)
					->where('id_type_annonce',2)
					->get();
		
		
			  
		$data['annonce'] = $query;
	    return $data['annonce'];
		
   }
   
   function getDonInactif(){
     
        $data = array();
		
		$query = $this->db->select('ville.id_region,id_annonce,titre,desc,img,date_insertion,annonce.id_utilisateur,login,annonce.statut')
					->from($this->table)
					->join('utilisateur', 'utilisateur.id_utilisateur = annonce.id_utilisateur')
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->where('annonce.statut',0)
					->where('id_type_annonce',2)
					->get();
		
		
			  
		$data['annonce'] = $query;
	    return $data['annonce'];
		
   }
   
   
   function getEntraideActif(){
     
        $data = array();
		
		$query = $this->db->select('ville.id_region,id_annonce,titre,desc,img,date_insertion,annonce.id_utilisateur,login,annonce.statut')
					->from($this->table)
					->join('utilisateur', 'utilisateur.id_utilisateur = annonce.id_utilisateur')
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->where('annonce.statut',1)
					->where('id_type_annonce',3)
					->get();
		
		
			  
		$data['annonce'] = $query;
	    return $data['annonce'];
		
   }
   
   function getEntraideInactif(){
     
        $data = array();
		
		$query = $this->db->select('ville.id_region,id_annonce,titre,desc,img,date_insertion,annonce.id_utilisateur,login,annonce.statut')
					->from($this->table)
					->join('utilisateur', 'utilisateur.id_utilisateur = annonce.id_utilisateur')
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->where('annonce.statut',0)
					->where('id_type_annonce',3)
					->get();
		
		
			  
		$data['annonce'] = $query;
	    return $data['annonce'];
		
   }
   
   function statutAnnonce($id){
		$query = $this->db->select('id_annonce,statut')
					->from($this->table)
					->where('id_annonce',$id)
					->get();
		$row = $query->row();
		$statut = $row->statut;
		if ($statut == 1)
			$data['statut'] = 0;
		else $data['statut'] = 1;
        $this->db->where('id_annonce', $id);
		$this->db->update('annonce', $data);
   }
   
   function getAnnonceInfo($id){
     
        $data = array();
		
		
		$query = $this->db->select('region.nom,ville.nom,id_annonce,annonce.titre,annonce.desc,mail,tel,annonce.id_ville,ville.id_region,adresse,code_postale,date_expiration,id_categorie,id_type_annonce')
					->from($this->table)
					->join('ville', 'ville.id_ville = annonce.id_ville')
					->join('region', 'ville.id_region = region.id_region')
					->where('id_annonce', $id)
					->get();
		
			  
		
		
		$data = $this->getRegion();
		$data['titre_categorie'] = $this->getTitreCategorie();
		$data['annonceInfo'] = $query;
		
		$query3 = $this->db->select('id_type_annonce,titre')
					->from('type_annonce')
					->get();
		
		
			  
		$data['type_annonce'] = $query3;
		
	    return $data;
		
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
   
   
   function editAnnonce($id,$data){
   
		$this->db->where('id_annonce', $id);
		$this->db->update($this->table, $data); 
   }
   
   
   function deleteAnnonce($id){
     
        $this->db->where('id_annonce', $id);
		$this->db->delete($this->table);
   }
   
   function addAnnonce($data){
   
		$this->db->insert($this->table,$data);
   }
   
   function getTitreCategorie(){
		$data = array();
		
		$query = $this->db->select('id_categorie,titre')
					->from('categorie')
					->get();
			  
		$data['titre_categorie'] = $query;
	    return $data['titre_categorie'];
   }

}