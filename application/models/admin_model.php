<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function isValid($mail,$mdp)
    {
        $sql="select id from Admin where mail='%s' and mdp='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        if(sizeof($tableau)>0)
        {
            return true;
        }
        return false;
    }

    public function getId($mail,$mdp)
    {
        $sql="select id from Admin where mail='%s' and mdp='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0]['id'];
    }
}