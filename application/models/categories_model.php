<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model
{
    public function getAll()
    {
        $sql="select * from Categories";
        //$sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau;
    }

    public function getId($mail,$mdp)
    {
        $sql="select id from Admin where mail='%s' and mdp='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $tableau=$query->result_array();
        return $tableau[0]['id'];
    }

    public function insert($designation)
    {
        $sql="insert into Categories values (null,'%s')";
        $sql=sprintf($sql,$designation);
        $this->db->query($sql);
    }

    public function supprimer($id)
    {
        $sql="delete from Categories where id=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }

    public function modifier($id,$designation)
    {
        $sql="update Categories set designation='%s' where id=%s";
        $sql=sprintf($sql,$designation,$id);
        $this->db->query($sql);
    }
}