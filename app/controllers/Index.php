<?php

  class Index extends DController{

    public function __construct(){
      parent::__construct();
    }

    public function home(){
      $this->index();
    }

    public function index(){
      $this->load->view('index');
    }
  }
