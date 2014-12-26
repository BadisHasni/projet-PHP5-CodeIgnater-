<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Associations_model extends CI_Model {
    private $table="utilisateur";
	
	function construct(){
		
		 parent::__construct();
				
	}
	function getAssociations(){
     
        $data = array();
		
		$query = $this->db->select('ville.nom,id_region,id_utilisateur,mail,login,nom_asso,mat_asso,statut')
					->from($this->table)
					->join('ville', 'ville.id_ville = utilisateur.id_ville')
					->where('type',2)
					->get();
		
		
			  
		$data['associations'] = $query;
	    return $data['associations'];
		
   }
   
   function getAssociation($id){
     
        $data = array();
		
		$query = $this->db->select('region.nom,ville.nom,id_utilisateur,login,nom_asso,mat_asso,mail,tel,utilisateur.id_ville,ville.id_region,adresse,code_postale')
					->from($this->table)
					->join('ville', 'ville.id_ville = utilisateur.id_ville')
					->join('region', 'ville.id_region = region.id_region')
					->where('id_utilisateur', $id)
					->get();
		
			  
		
		
		$data = $this->getRegion();
		
		$data['association'] = $query;
		
		$query3 = $this->db->select('titre')
					->from('type_annonce')
					->where('statut',1)
					->get();
		
		
			  
		$data['type_annonce'] = $query3;
		
	    return $data;
		
   }
   
   function deleteAssociations($id){
     
        $this->db->where('id_utilisateur', $id);
		$this->db->delete($this->table);
   }
   
   function statutAssociations($id){
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
   
   function addAssociation($data){
   
		$this->db->insert($this->table,$data);
   }
   
   function editAssociation($id,$data){
   
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