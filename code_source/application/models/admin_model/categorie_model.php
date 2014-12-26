<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie_model extends CI_Model {
    private $table="categorie";
	
	function construct(){
		
		 parent::__construct();
		 
				
	}
   
   
   function getCategorie(){
     
        $data = array();
		
		$query = $this->db->select('id_categorie,titre,desc,parent,position,statut')
					->from($this->table)
					->where('statut',1)
					->get();
		
		
			  
		$data['categorie'] = $query;
	    return $data['categorie'];
		
   }
   function getCategorieInfo($id){
     
        $data = array();
		
		
		$data['titre_categorie'] = $this->getTitreCategorie();
		
		$query = $this->db->select('id_categorie,titre,desc,parent,position,statut')
					->from($this->table)
					->where('id_categorie',$id)
					->get();
		
		
			  
		$data['categorieInfo'] = $query;
		
		$query3 = $this->db->select('titre')
					->from('type_annonce')
					->where('statut',1)
					->get();
		
		
			  
		$data['type_annonce'] = $query3;
		
	    return $data;
		
   }
   
   function editCategorie($id,$data){
   
		$this->db->where('id_categorie', $id);
		$this->db->update($this->table, $data); 
   }
   
   
   function deleteCategorie($id){
     
        $this->db->where('id_categorie', $id);
		$this->db->delete($this->table);
   }
   
   function addCategorie($data){
   
		$this->db->insert($this->table,$data);
   }
   
   function getTitreCategorie(){
		$data = array();
		
		$query = $this->db->select('id_categorie,titre')
					->from($this->table)
					->get();
			  
		$data['titre_categorie'] = $query;
	    return $data['titre_categorie'];
   }

}