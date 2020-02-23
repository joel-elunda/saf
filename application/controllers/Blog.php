<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() 
    {
		
    }
    
    /** Cette fonction permettra à un user de créer un compte 
     *  qui lui donnera la possibilité de bloger
     *  
     */
    public function suscribe()
    {
        
    }

    /** Cette fonction retourne tous les commentaires de la base
     *  de données sous forme de tableau
     *  
     *  @return Array
     */
    public function list_all_comments() 
    {
        return NULL;
    }

    /** Cette fonction permet d'ajouter le commentaire  d'un
     *  utilisateur
     *  
     *  La variable $comment est un tableau qui contient les infos du commentaire
     *  (Date du commentaire, User, Contenu, ...)
    */
    public function add_comment()
    {
         
    }

    /** Cette fonction supprime le commentaire d'un user
     * 
     */
    public function remove_comment() 
    {
        return FALSE;
    }

    /** Cette fonction va compter le nombre des commentaires
     * dans la base de données
     * 
     * @return INT
     */
    public function count_comment()
    {
        return 0;
    }
}
