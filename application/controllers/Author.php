<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {

	public function index()
	{
		
	}

	 /** Cette fonction permet d'ajouter un auteur 
     *  
     *  @return boolean
     *  FALSE :  (si l'auteur existe ou si il ne repond pas au form validation)
     *  TRUE  :  (Dans le cas contraire) 
     * 
     *  La variable $auteur est un tableau qui contient les infos de l'auteur
     *  (Le nom et l'email ... )
    */
	public function add_author()
	{

	}

	/** Cette fonction supprime le commentaire d'un user
     * 
     *  @return boolean
     *  TRUE  :    (si l'auteur a été supprimé)
     *  FALSE :    (Dans le cas contraire) 
     */
	public function remove_author()
	{

	}

	/** Cette fonction retourne un tableau de toutes les informations d'un auteur
	 *  (Nom, email, et sa bibliographie)
	 *  
	 *  @return Array
	 */
	public function infos_author()
	{
		return NULL;
	}

	/** Cette fonction retourne tous les auteurs de la base
     *  de données sous forme de tableau
     *  
     *  @return Array
     */
	public function list_all_authors()
	{
		return NULL;
	}

	/** Cette fonction va compter le nombre des auteurs
     * dans la base de données
     * 
     * @return INT
     */
	public function count_authors() 
	{
		return 0;
	}
}
