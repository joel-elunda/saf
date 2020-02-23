<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function index() 
    {
		
    }
    

    public function inputs_email_infos()
    {
        $email = array(
            'nom' => $this -> input -> post('nom'),
            'email' => $this -> input -> post('email'),
            'sujet' => $this -> input -> post('sujet'),
            'message' => $this -> input -> post('message');
        );

        return $email;
    }

    public function send_mail() 
    {
        $email = $this -> inputs_email_infos();

        if($this -> form_validation -> run()) 
        {
            $this -> emailmodel -> add($email);
            /**
             * Cette partie est réservée pour l'API d'envoie
             * d'emails
             */
        }
        else 
        {
            redirect();
        }
    }


    public function remove()
    {
        return
    }

    public function count_emails()
    {
        return $this -> mainmodel -> count('mails');
    }

}