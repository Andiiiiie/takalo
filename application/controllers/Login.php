<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller {
    public function index(){
        if($this->session->has_userdata('id')){
            //$data=array();
            //$data['id']=$this->session->userdata('id');
            //$this->load->view('profil',$data);
            redirect("controladmin/goToProfil/");
        }else{
            
            redirect(base_url('login/connecter'));
        }
        
    }
    public function connection(){
        $this->load->model('admin_model');
        $mail=$this->input->post('log');
        $mdp=$this->input->post('mdp');
        if($this->admin_model->isValid($mail,$mdp)==true)
        {
            //valide
            $this->session->set_userdata('id',$this->admin_model->getId($mail,$mdp));
            $this->index(); 
        }
        else
        {
            $data=array();
            $data['error']='erreur';
            $this->load->view('login',$data);
        } 
    }
    public function connecter(){
        $this->load->view('login');
    }
    public function deconnecter(){
        $this->session->unset_userdata('nom');
        redirect(base_url(''));
    }
    public function profil(){
        $this->load->view('profil');
    }

    
}