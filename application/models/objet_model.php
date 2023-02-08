<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model
{
    public function insertBase($designation,$categorie,$prorio,$prix,$description)
    {
        $sql="insert into Objets values (null,'%s',%s,%s,%s,'%s')";
        $sql=sprintf($sql,$designation,$categorie,$prorio,$prix,$description);
        $this->db->query($sql);
    }

    public function getBYID($id)
    {
        $sql="select * from Objets where id=%s";
        $sql=sprintf($sql,$id);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0];

    }

    public function getObjetsDesAutres($me)
    {
        $sql="select *, User.nom as name,objetsProprio.id as idObjet from objetsProprio join User on objetsProprio.proprietaire=User.id where proprietaire!=%s";
        $sql=sprintf($sql,$me);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }

    public function getSesObjets($me)
    {
        $sql="select * from objetsProprio where proprietaire=%s";
        $sql=sprintf($sql,$me);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }

    public function getObjet($id)
    {
        $sql="select *,User.nom as name from objetsProprio join User on objetsProprio.proprietaire=User.id  where objetsProprio.id=%s";
        $sql=sprintf($sql,$id);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0];
    }

    public function proposer($p1,$objet1,$p2,$objet2)
    {
        $sql="insert into Propositions values(default,default,%s,%s,%s,%s,0,null)";
        $sql=sprintf($sql,$p1,$p2,$objet1,$objet2);
        echo $sql;
        $this->db->query($sql);
    }


    public function recherche($motCle,$categorie,$me)
    {
        if($categorie==0){
            $sql="select *,User.nom as name from objetsProprio join User on objetsProprio.proprietaire=User.id where proprietaire!=%s and designation like ";
            $sql=sprintf($sql,$me)." '%".$motCle."%'";
        }
        else
        {
            $sql="select *,User.nom as name from objetsProprio join User on objetsProprio.proprietaire=User.id where proprietaire!=%s and designation like ";
            $sql=sprintf($sql,$me)." '%".$motCle."%' and idCategorie=".$categorie;

        }
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }

    public function supprimer($id)
    {
        $sql="delete from Objets where id=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }


    public function modifier($id,$designation,$idCategorie,$prix,$desc)
    {
        $sql="update Objets set designation='%s',idCategorie=%s,prixEstimatif=%s,description='%s' where id=%s";
        $sql=sprintf($sql,$designation,$idCategorie,$prix,$desc,$id);
        $this->db->query($sql);
    }

    public function getProprietaires($id)
    {
        $sql="select *,getPropriotaire(%s,Propositions.id) as u from Propositions join User on User.id=(select getPropriotaire(%s,Propositions.id) ) where (idObjet1=%s or idObjet2=%s) and etat=1;";
        $sql=sprintf($sql,$id,$id,$id,$id);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }

    
}