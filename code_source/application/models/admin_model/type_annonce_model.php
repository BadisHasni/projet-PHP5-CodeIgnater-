<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type_annonce_model extends CI_Model {
    private $table="type_annonce";
	
	function construct(){
		
		 parent::__construct();
				
	}
   
   
   function getTypeAnnonce(){
     
        $data = array();
		
		$query = $this->db->select('titre')
					->from($this->table)
					->where('statut',1)
					->get();
		
		
			  
		$data['type_annonce'] = $query;
	    return $data;
		
   }

}