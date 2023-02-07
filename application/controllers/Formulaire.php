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
        $this->session->set_userdata('bob',$nom);
        $categ =$this->input->post('categorie');
        $valeur=$this->input->post('prix');
        $desc =$this->input->post('description');
        echo $nom;
        $this->index(); 
    }
    public function form()
{
    $this->load->view('formulaire');
}
public function afficherproduits(){
    $this->load->view('listeproduits');
}

}
?>