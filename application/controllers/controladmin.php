<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Controladmin extends CI_Controller {

    public function goToProfil()
    {
        $this->load->model('categories_model');
        $liste=$this->categories_model->getAll();
        $this->load->model('propositions_model');
        $this->load->model('user_model');
        $data=array();
        $data['echanges']=$this->propositions_model->nombreEchange();
        $data['nombre']=$this->user_model->nombreUtilisateur();
        $data['liste']=$this->user_model->getAll();

      
        $data['listeCategories']=$liste;
        $this->load->view('profilbob',$data);
    }

    public function saveCategorie()
    {
        $designation=$this->input->post('designation');
        $this->load->model('categories_model');
        $this->categories_model->insert($designation);
        $this->goToProfil();
    }

    public function supprimer($idCat)
    {
        $this->load->model('categories_model');
        $this->categories_model->supprimer($idCat);
        $this->goToProfil();
    }

    public function  formModifier($id)
    {
        $data=array();
        $this->load->model('categories_model');
        $liste=$this->categories_model->getAll();
        $this->load->model('propositions_model');
        $this->load->model('user_model');
        $data=array();
        $data['echanges']=$this->propositions_model->nombreEchange();
        $data['nombre']=$this->user_model->nombreUtilisateur();
        $data['listeCategories']=$liste;
        $data['modifier']=$id;
        $this->load->view('profilbob',$data);
    }

    public function modifier()
    {
        $idCat=$this->input->post('id');
        $new=$this->input->post('new');
        $this->load->model('categories_model');
        $this->categories_model->modifier($idCat,$new);
        $this->goToProfil();
    }


    public function goToStatistique()
    {
        $this->load->model('propositions_model');
        $this->load->model('user_model');
        $data=array();
        $data['echanges']=$this->propositions_model->nombreEchange();
        $data['nombre']=$this->user_model->nombreUtilisateur();
        $this->load->view('statistique',$data);
    }

}
?>