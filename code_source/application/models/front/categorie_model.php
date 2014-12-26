<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie_model extends CI_Model {
    
    private $table="categorie";
	
	
	function construct(){
		
		 parent::__construct();
				
	}

	 function getCategorie(){
     
        $data = array();
		
		return $data['categorie'] = $this->db->select('id_categorie,titre,desc,parent,position,statut')
											->from($this->table)
											->where('statut',1)
											->where('parent',0)
											// ->order_by('position', 'asc') 
											->get();
	
		
   }



	function getSousCategorie($id_categorie=''){
		
		$data = array();
		return  $data =  $this->db->select('titre','position')
											 ->from($this->table)
											 ->where('statut',1)
											 ->where('parent',$id_categorie)
									         ->get();
		 
		        
	}

	
}