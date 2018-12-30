<?php

  class AdminModal extends DModal{

    function __construct(){
      parent::__construct();
    }

    public function insert($table,$data){
      return $this->db->insert($table,$data);
    }

    public function getAll($table){
      $sql = "SELECT * FROM $table";
      return $this->db->select($sql);
    }

    public function update($table,$data,$cond){
      $this->db->update($table,$data,$cond);
    }

    public function delete($table,$cond){
      $this->db->delete($table,$cond);
    }




  }
