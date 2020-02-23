<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {

	public function index()
	{
		$this -> load -> view('home');
	}

	public function inputs_author_infos() 
	{
		$author = array(
			'id_auteur' => '',
			'nom_auteur' => $this -> input -> post('name'), 
			'date_naissance' => $this -> input -> post('date_naissance'),
			'email_auteur' => $this -> input -> post('email'), 
			'telephone_auteur' => $this -> input -> post('phone'),
			'nationalite' => $this -> input -> post('nationalite'),
			'genre_auteur' => $this -> input -> post('genre')
		);

		return $author;
	}

	/** Cette fonction permet d'ajouter un auteur 
	 * 
	 *  La variable $auteur est un tableau qui contient les infos de l'auteur
	 *  (Le nom et l'email ... )
	 */
	public function add_author()
	{
		$author = $this -> inputs_author_infos();

		$this -> form_validation -> set_values('name', 'nom', 'required', array('' => ''));
		$this -> form_validation -> set_values('date', 'date de naissance', 'required', array('' => ''));
		$this -> form_validation -> set_values('email', 'email', 'required', array('' => ''));
		$this -> form_validation -> set_values('phone', 'téléphone', 'required', array('' => ''));
		$this -> form_validation -> set_values('nationalite', 'nationalité', 'required', array('' => ''));
		$this -> form_validation -> set_values('genre', 'genre', 'required', array('' => ''));
		
		if($this -> form_validation() -> run()) 
		{
			$this -> authormodel -> add($author);
			$this -> load -> view('home');
		} 
		else 
		{
			redirect();
		}
	}

	/** Cette fonction supprime le commentaire d'un user
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
		return $this -> author;
	}
}
