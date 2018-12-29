<?php

  class Admin extends DController{

    function __construct(){
      Session::check();
        parent::__construct();
    }






    public function home(){
      $this->index();
    }

    public function index(){
      $this->load->view('admin/header');
      $this->load->view('admin/admin');
      $this->load->view('admin/footer');
    }

    public function category(){
      $this->load->view('admin/header');
      $this->load->view('admin/category');
      $this->load->view('admin/footer');
    }

    public function member(){
      $this->load->view('admin/header');
      $this->load->view('admin/member');
      $this->load->view('admin/footer');
    }


    public function service(){
      $this->load->view('admin/header');
      $this->load->view('admin/service');
      $this->load->view('admin/footer');
    }


      public function logout(){
        Session::init();
        Session::destroy();
        header("Location:".BASE_URL."Login/home");
      }


  }
