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
//Category Section ...
    public function category(){
      $this->load->view('admin/header');
      $table = "blog_category";
      $adminModal = $this->load->modal('AdminModal');
      $data['cat'] = $adminModal->getAllCategory($table);
      $this->load->view('admin/category',$data);
      $this->load->view('admin/footer');
    }

    public function addCategory(){

      $this->load->view('admin/header');
      $table = "blog_category";
      $cat = $_POST['category'];
      $data = array(
        'cat_name' => $cat
      );
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->addCategory($table,$data);
      $this->load->view('admin/category');
      $this->load->view('admin/footer');
    }

    public function updateCat(){
      $this->load->view('admin/header');
      $table = "blog_category";
      $cat = $_POST['category'];
      $id = $_POST['catId'];
      $data = array(
        'cat_name' => $cat
      );
      $cond = "cat_id=".$id;
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->updateCat($table,$data,$cond);
      header("Location:".BASE_URL."Admin/category");
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
