<?php

  class Login extends DController{

    function __construct()
    {
    parent::__construct();
    }

    public function home(){
      $this->login();
    }

    public function login(){
      Session::init();
      if(Session::get('login') == true){
        header("Location:".BASE_URL.'Admin/home');
      }
      $this->load->view('admin/login');
    }

    public function loginAuth(){
      $table = "potato_admin";
      $username = $_POST['username'];
      $password = $_POST['password'];

      $loginModal = $this->load->modal('LoginModal');
      $count = $loginModal->userControl($table,$username,$password);
      if($count > 0){
        $result = $loginModal->getUserData($table,$username,$password);
        Session::init();
        Session::set("login",true);
        Session::set("username",$result[0]['potato_username']);
        Session::set("id",$result[0]['potato_id']);
        header("Location:".BASE_URL."Admin/home");
      }else{
        header("Location:".BASE_URL."Login/home");
      }

    }



  }
