<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Inscription extends CI_Controller {

    public function index()
    {
        redirect(base_url('inscription/accueil'));

    }

    public function accueil(){
        $this->load->view('accueil');
    }
    public function inscrire(){
        $this->load->view('inscription');
    }
    public function inscript(){
        
        $name =$this->input->post('nom');
        //$this->session->set_userdata('nom',$name);
        $password1=$this->input->post('mdp1');
        $password2=$this->input->post('mdp2');
        $mail=$this->input->post('mail');
        $this->load->model('user_model');
        if($this->user_model->isValidMDP($password1,$password2)==false)
        {
            $data=array();
            $data['erreur']="diso";
            $this->load->view('inscription',$data);
        }
        else
        {
            $this->user_model->insertUser($name,$mail,$password1);
            echo "mety";
        }
       // $this->index(); 
    }
}