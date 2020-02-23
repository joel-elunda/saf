<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Controller {

	public function index()
	{
		
    }

    
	 /** Cette fonction permet d'ajouter un abonné
     *  
     *  La variable $abonné est un tableau qui contient les infos de l'abonné
     *  (Le nom et l'email ... )
    */
	public function add_subscriber()
	{

	}

	/** Cette fonction supprime un abonné 
     */
	public function remove_subscriber()
	{

	}

	/** Cette fonction retourne un tableau de toutes les informations d'un abonné
	 *  (Nom, email, et un tableu des tous ses commentaires)
	 *  
	 *  @return Array
	 */
	public function infos_subscriber()
	{
		return NULL;
	}

	/** Cette fonction retourne tous les abonnés de la base
     *  de données sous forme de tableau
     *  
     *  @return Array
     */
	public function list_all_subscribers()
	{
		return NULL;
	}

	/** Cette fonction va compter le nombre des abonnés
     * dans la base de données
     * 
     * @return INT
     */
	public function count_subscribers() 
	{
		return 0;
	}
    
}