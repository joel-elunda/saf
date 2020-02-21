<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    /*************************************************
     * Les attributs d'un livre sont : 
     * 
     * $id_livre    : un entier 
     * $titre       : une chaine de caractère
     * $id_auteur   : un entier
     * $pages        : un entier
     * $edition     : une chaine de caractère
     * $date_publication : une chaine de caractère
     * 
    */

	public function index()
	{
		
    }
    
    
	 /** Cette fonction permet d'ajouter un livre
     *  
     *  @return boolean
     *  FALSE :  (si le livre existe ou si il ne repond pas au form validation)
     *  TRUE  :  (Dans le cas contraire) 
     * 
     *  La variable $livre est un tableau qui contient les infos du livre
     *  $id_livre    
     *  $titre       
     *  $id_auteur   
     *  $pages       
     *  $edition   
     *  $date_publication 
     */
	public function add_book()
	{

	}

	/** Cette fonction supprime un livre de la base de données
     * 
     *  @return boolean
     *  TRUE  :    (si le livre a été supprimé)
     *  FALSE :    (Dans le cas contraire) 
     */
	public function remove_book()
	{
        return FALSE;
	}

	/** Cette fonction retourne un tableau de toutes les informations d'un livre
     * $id_livre    
     * $titre       
     * $id_auteur   
     * $pages       
     * $edition   
     * $date_publication 
	 *  
	 *  @return Array
	 */
	public function infos_book()
	{
		return NULL;
	}

	/** Cette fonction retourne tous les livres de la base
     *  de données sous forme de tableau
     *  
     *  @return Array
     */
	public function list_all_books()
	{
		return NULL;
    }
    
    /** Cette fonction retourne sous forme de tableau
     *  tous les livres de la base
     *  de données publié par un certain auteur
     * 
     *  @return Array
     */
    public function list_author_books()
    {

    }

	/** Cette fonction va compter le nombre des livres
     * dans la base de données
     * 
     * @return INT
     */
	public function count_books() 
	{
		return 0;
    }
    

    /** Cette fonction permettra d'effectuer le paiement d'un livre */
    public function buy_one_book() 
    {

    }

    /** Cette fonction permettra d'effectuer le paiement 
     * de plusieurs livres à la fois 
     */
    public function buy_several_books()
    {

    }

}