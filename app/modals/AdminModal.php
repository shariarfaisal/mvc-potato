<?php

  class AdminModal extends DModal{

    function __construct(){
      parent::__construct();
    }

    public function addCategory($table,$data){
      return $this->db->insert($table,$data);
    }

    public function getAllCategory($table){
      $sql = "SELECT * FROM $table";
      return $this->db->select($sql);
    }

    public function updateCat($table,$data,$cond){
      $this->db->update($table,$data,$cond);
    }












  }
