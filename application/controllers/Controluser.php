<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Controluser extends CI_Controller {

    public function index()
    {
        $this->load->model('objet_model');
        $this->load->model('categories_model');
        $data=array();
        $data['listeObjets']=$this->objet_model->getObjetsDesAutres($this->session->userdata('id'));
        $data['categories']=$this->categories_model->getAll();
        $this->load->view('accueil',$data);
    }

    public function goToFicheObjet($idObjet)
    {
        $this->load->model('objet_model');
        $data=array();
        $data['listeObjets']=$this->objet_model->getSesObjets($this->session->userdata('id'));
        $data['info']=$this->objet_model->getObjet($idObjet);
        $data['listeProprio']=$this->objet_model->getProprietaires($idObjet);
        // var_dump($data['info']);
        // echo $idObjet;
        $this->load->view('ficheObjet',$data);
    }

    public function proposition()
    {
        $this->load->model('objet_model');
        $p2=$this->input->post('p2');
        $objet1=$this->input->post('objet1');
        $objet2=$this->input->post('objet2');
        $p1=$this->session->userdata('id');
        //   $this->session->userdata('id');
        $this->objet_model->proposer($p1,$objet1,$p2,$objet2);
        // echo "ato";

        $this->index();
    }

    public function goToMonCompte()
    {
        $this->load->model('objet_model');
        $this->load->model('propositions_model');
        $data=array();
        $data['demandes']=$this->propositions_model->listeDemandes($this->session->userdata('id'));
        $data['objets']=$this->objet_model->getSesObjets($this->session->userdata('id'));
        $this->load->view('moncompte',$data);
    }

    public function accepter($idProposition)
    {
        $this->load->model('propositions_model');
        
        // echo $sql;        
        $this->propositions_model->accepter($idProposition);
        echo "tato";
        $this->goToMonCompte();
    }

    public function refuser($idProposition)
    {
        $this->load->model('propositions_model');
        $this->propositions_model->refuser($idProposition);
        $this->goToMonCompte();
    }

    public function recherche()
    {
        $this->load->model('objet_model');
        $mot=$this->input->get('motCle');
        $categorie=$this->input->get('categorie');
        $me=$this->session->userdata('id');
        $tableau=$this->objet_model->recherche($mot,$categorie,$me);
        $data=array();
        $data['resultats']=$tableau;

        $this->load->model('categories_model');
        $data['categories']=$this->categories_model->getAll();
        $this->load->view('accueil',$data);

    }


    public function supprimer($idObjet)
    {
        $this->load->model('objet_model');
        $this->objet_model->supprimer($idObjet);
        $this->goToMonCompte();
    }

    public function modifier($idObjet)
    {
        $this->load->model('objet_model');
        $this->load->model('categories_model');
        $data=array();
        $data['objet']=$this->objet_model->getBYID($idObjet);
        var_dump($data['objet']);
        $data['categories']=$this->categories_model->getAll();
        $this->load->view('formulaire',$data);
        
    }

    public function modifications()
    {
        $id=$this->input->post('id');
        $designation=$this->input->post('designation');
        $categorie=$this->input->post('categorie');
        $prix=$this->input->post('prix');
        $desc=$this->input->post('description');
        $this->load->model('objet_model');
        // echo $id,$designation,$categorie,$prix,$desc;
        $this->objet_model->modifier($id,$designation,$categorie,$prix,$desc);
        $this->goToMonCompte();
    }
}
?>