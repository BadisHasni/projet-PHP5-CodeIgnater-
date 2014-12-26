<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// -----------------------------------------------------------------------------

class MY_Model extends CI_Model
{



	/**
	 *	Insère une nouvelle ligne dans la base de données.
	 */
	public function create($options_echappees = array(), $options_non_echappees = array())
{
	//	Vérification des données à insérer
	if(empty($options_echappees) AND empty($options_non_echappees))
	{
		return false;
	}
	
	return (bool) $this->db->set($options_echappees)
                               ->set($options_non_echappees, null, false)
                               ->insert($this->table);
}

	/**
	 *	Récupère des données dans la base de données.
	 */
	public function read()
	{
		
	}
	
	/**
	 *	Modifie une ou plusieurs lignes dans la base de données.
	 */
	public function update()
	{		
		
	}
	
	/**
	 *	Supprime une ou plusieurs lignes de la base de données.
	 */
	public function delete()
	{
		
	}

	/**
	 *	Retourne le nombre de résultats.
	 */
	public function count($champ = array(), $valeur = null) // Si $champ est un array, la variable $valeur sera ignorée par la méthode where()
{
	return (int) $this->db->where($champ, $valeur)
                              ->from($this->table)
                              ->count_all_results();
}
}

/* End of file MY_Model.php */
/* Location: ./system/application/core/MY_Model.php */