<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() 
    {
		
    }
    
    /** Cette fonction permettra à un user de créer un compte 
     *  qui lui donnera la possibilité de bloger
     *  
     *  Il retourne un boolean TRUE si le user a bien été
     *  ajouté et FALSE au cas contraire (Par exemple si
     *  le user existe déjà dans la base de données)
     *  @return boolean
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
     *  @return boolean
     *  FALSE :  (si le commentaire existe ou si il ne repond pas au form validation)
     *  TRUE  :  (Dans le cas contraire) 
     * 
     *  La variable $comment est un tableau qui contient les infos du commentaire
     *  (Date du commentaire, User, Contenu, ...)
    */
    public function add_comment()
    {
        return FALSE;
    }

    /** Cette fonction supprime le commentaire d'un user
     * 
     *  @return boolean
     *  TRUE :  (si le commentaire a été supprimé)
     *  FALSE :   (Dans le cas contraire) 
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
