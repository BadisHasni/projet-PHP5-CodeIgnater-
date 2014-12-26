<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_inscrip_model extends CI_Model {
    
	private $table="utilisateur";

	
	function construct(){
		
		 parent::__construct();
				
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
   
   
   function getRegionVille(){
		$data = array();
		
		$data['ville']= $this->db->select('id_ville,nom,id_region')
					->from('ville')
					->get();
					
		$data['region'] = $this->db->select('id_region,nom')
					->from('region')
					->get();
		
	
		return $data;
		
   }
	
	function addUtilisateur($data){
		
		$query = $this->db->select('id_ville')
					->from('ville')
					->where('nom',$data['id_ville'])
					->get();
					
		foreach ($query->result() as $row) {
												
			$data['ville'] = $row2->nom;
																	
		}
		
		
		
		$this->db->insert($this->table,$data);
   }
   
   function addAssociation($data){
			
			$query = $this->db->select('id_ville')
					->from('ville')
					->where('nom',$data['id_ville'])
					->get();
					
		foreach ($query->result() as $row) {
												
			$data['ville'] = $row2->nom;
																	
		}
			
			
			
		$this->db->insert($this->table,$data);
   }
   
   
	
}