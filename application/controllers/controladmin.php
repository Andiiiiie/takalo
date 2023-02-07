<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Controladmin extends CI_Controller {

    public function goToProfil()
    {
        $this->load->model('categories_model');
        $liste=$this->categories_model->getAll();
        $data=array();
        $data['listeCategories']=$liste;
        $this->load->view('profil',$data);
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
        $data['listeCategories']=$liste;
        $data['modifier']=$id;
        $this->load->view('profil',$data);
    }

    public function modifier()
    {
        $idCat=$this->input->post('id');
        $new=$this->input->post('new');
        $this->load->model('categories_model');
        $this->categories_model->modifier($idCat,$new);
        $this->goToProfil();
    }

}
?>