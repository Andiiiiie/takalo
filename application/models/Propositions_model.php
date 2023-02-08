<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propositions_model extends CI_Model
{
    public function nombreEchange()
    {
        $sql="select count(*) as nombre from Propositions where etat=1";
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0]['nombre'];
    }


    public function listeDemandes($id)
    {
        // $sql="select *,User.nom as name,Propositions.id as proposition from Propositions join objetsProprio on Propositions.idObjet2=objetsProprio.id join User on Propositions.idUser1=User.id where objetsProprio.proprietaire=%s and Propositions.etat=0";
        $sql="select * from Propositions join objetsProprio on Propositions.idObjet2=objetsProprio.id where objetsProprio.proprietaire=%s and Propositions.etat=0";
        $sql=sprintf($sql,$id);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }

    public function accepter($id)
    {
        $sql="update Propositions set etat=1 where id=%s";
        $sql=sprintf($sql,$id);

        $this->db->query($sql);
    }

    public function refuser($id)
    {
        $sql="update Propositions set etat=-1 where id=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }

    

    
}