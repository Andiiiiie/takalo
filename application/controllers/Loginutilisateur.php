<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Loginutilisateur extends CI_Controller {
    public function index(){
        if($this->session->has_userdata('id')){
            redirect("Controluser/index/");
            //echo $this->session->userdata('id');
        }else{
            
            redirect(base_url('loginutilisateur/connecter'));
        }
        
    }
    public function connect(){
        $mail=$this->input->post('log');
        $mdp=$this->input->post('mdp');
        $this->load->model('user_model');
        if($this->user_model->isValid($mail,$mdp)==true)
        {
            $this->session->set_userdata('id',$this->user_model->getID($mail,$mdp));
            // $_SESSION['id']=$this->user_model->getID($mail,$mdp);
            $this->index();
        }
        else
        {
            //miverina
            $data=array();
            $data['erreur']=0;
            $this->load->view('loginutilisateur',$data);
        }
        // if($this->input->post('log')=="admin"&&$this->input->post('mdp')=="pass"){
            
        // }
         
    }
    public function connecter(){
        $this->load->view('loginutilisateur');
    }
    public function deconnecter(){
        $this->session->unset_userdata('id');
        redirect(base_url('loginutilisateur/index'));
    }
    

    
}