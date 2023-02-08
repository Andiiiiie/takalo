<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function insertUser($nom,$mail,$mdp)
    {
        $sql="insert into User values(null,'%s','%s','%s')";
        $sql=sprintf($sql,$nom,$mail,$mdp);
        $this->db->query($sql);
    }

    public function isValid($mail,$mdp)
    {
        $sql="select id from User where mail='%s' and mdp='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        if(sizeof($tableau)>0)
        {
            return true;
        }
        return false;
    }

    public function getID($mail,$mdp)
    {
        $sql="select id from User where mail='%s' and mdp='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0]['id'];
    }

    public function isValidMDP($mdp1,$mdp2)
    {
        if( strcmp($mdp1,$mdp2)==0)
        {
            return true;
        }
        return false;
    }

    public function nombreUtilisateur()
    {
        $sql="select count(id) as somme from User";
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0]['somme'];
    }

    public function getAll()
    {
        $sql="select * from User";
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }
}