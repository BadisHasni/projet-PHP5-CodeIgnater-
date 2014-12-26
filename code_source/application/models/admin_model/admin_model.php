<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
    private $table="admin";
	private $table2="type_admin";
	
	function construct(){
		
		 parent::__construct();
				
	}
	
	
	public function verifierAdmin($login,$pwd){
	    
		return $this->db->select('id_admin,id_type_admin')
		         ->from($this->table)
				 ->where('login', $login)
				 ->where('pwd',$pwd)
		         -> get();
	}
	
	function getAdmins(){
     
        $data = array();
		
		$query = $this->db->select('id_admin,mail,login,tel,mail,admin.id_type_admin,statut,nom')
					->from($this->table)
					->join('type_admin', 'type_admin.id_type_admin = admin.id_type_admin')
					->get();
		
		
			  
		$data['admins'] = $query;
	    return $data['admins'];
		
   }
   
   function getAdmin($id){
     
        $data = array();
		
		$query = $this->db->select('id_admin,login,tel,mail,admin.id_type_admin,statut,nom')
					->from($this->table)
					->join('type_admin', 'type_admin.id_type_admin = admin.id_type_admin')
					->where('id_admin', $id)
					->get();
		
			  
		
		
		$query2 = $this->getTypeAdmin();
		
		$data['type_admin'] = $query2;
		$data['admin'] = $query;
		
		$query3 = $this->db->select('titre')
					->from('type_annonce')
					->where('statut',1)
					->get();
		
		
			  
		$data['type_annonce'] = $query3;
		
	    return $data;
		
   }
   
   function addAdmin($data){
   
		$this->db->insert($this->table,$data);
   }
   
   function editAdmin($id,$data){
   
		$this->db->where('id_admin', $id);
		$this->db->update($this->table, $data); 
   }
   
   function deleteAdmin($id){
     
        $this->db->where('id_admin', $id);
		$this->db->delete($this->table);
   }
   
   function statutAdmin($id){
		$query = $this->db->select('id_admin,statut')
					->from($this->table)
					->where('id_admin',$id)
					->get();
		$row = $query->row();
		$statut = $row->statut;
		if ($statut == 1)
			$data['statut'] = 0;
		else $data['statut'] = 1;
        $this->db->where('id_admin', $id);
		$this->db->update('admin', $data);
   }
   
   function getTypeAdmin(){
		
		$data = array();
		
		$query2 = $this->db->select('id_type_admin,nom')
					->from($this->table2)
					->get();
		$data['type_admin'] = $query2;
		
		return $data['type_admin'];
	
   }
   
   function verifyAdmin($login,$pass){
		
		
		$query = $this->db->select('login,pwd,id_type_admin')
					->from($this->table)
					->where('login',$login)
					->get();
					
		if ($query->num_rows() == 0)
		{
			return 0;
		}
		else {
			$row = $query->row();
			$password = $this->encrypt->decode($row->pwd);
			if ($pass == $password)
			{
				return $row->id_type_admin;
			}
			else {
				return 0;
			}
		}
		
   }
	
	
}