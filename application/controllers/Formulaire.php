<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Formulaire extends CI_Controller {

    public function index()
    {
        redirect(base_url('formulaire/accueil'));

    }

    public function ajouterproduit()
    {
        $nom =$this->input->post('designation');
        $proprio=$this->session->userdata('id');
        // var_dump($this->session->userdata);
        // echo $this->session->userdata('id');
        //echo $this->session->userdata('id');
        $categ =$this->input->post('categorie');
        echo $this->input->post('categorie');
        $valeur=$this->input->post('prix');
        $desc =$this->input->post('description');
        $this->load->model('objet_model');
        $this->objet_model->insertBase($nom,$categ,$proprio,$valeur,$desc);
        //echo "aonaa";
    }
    
    public function form()
    {
        $this->load->model('categories_model');
        $data=array();
        $data['categories']=$this->categories_model->getAll();
        // var_dump($this->session->userdata);
        // echo $this->session->userdata('id');
        $this->load->view('formulaire',$data);
    }
    public function afficherproduits(){
        $this->load->view('listeproduits');
    }

}
?>