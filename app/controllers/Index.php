<?php

  class Index extends DController{

    public function __construct(){
      parent::__construct();
    }

    public function home(){
      $this->index();
    }

    public function index(){
      $this->load->view('header');
      $data = array();
      $servicTable = 'home_service';
      $member =  'member';
      $indexModal = $this->load->modal('IndexModal');
      $data['service'] = $indexModal->selectAll($servicTable);
      $data['member'] = $indexModal->selectAll($member);
      $this->load->view('index',$data);
      $this->load->view('footer');
    }
  }
