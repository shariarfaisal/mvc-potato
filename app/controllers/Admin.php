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
//Category Section start from here ...

    public function category(){
          $this->load->view('admin/header');
          $table = "blog_category";
          $adminModal = $this->load->modal('AdminModal');
          $data['cat'] = $adminModal->getAll($table);
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
          $adminModal->insert($table,$data);
          header("Location:".BASE_URL."Admin/category");
    }

    public function updateCat($id){
          $table = "blog_category";
          $cat = $_POST['category'];
          $data = array(
            'cat_name' => $cat
          );
          $cond = "cat_id=".$id;
          $adminModal = $this->load->modal('AdminModal');
          $adminModal->update($table,$data,$cond);
          header("Location:".BASE_URL."Admin/category");
    }

    public function catDelete($id){
      $table = "blog_category";
      $cond = "cat_id=".$id;
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->delete($table,$cond);
      header("Location:".BASE_URL.'Admin/category');
    }
// Member Section start from hrer ....

    public function member(){
          $this->load->view('admin/header');
          $table = "member";
          $adminModal = $this->load->modal('AdminModal');
          $data['member'] = $adminModal->getAll($table);
          $this->load->view('admin/member',$data);
          $this->load->view('admin/footer');
    }

    public function addMember(){
      $table = "member";
      $name = $_POST['member_name'];
      $work = $_POST['member_work'];
      $facebook = $_POST['member_facebook'];
      $twitter = $_POST['member_twitter'];
      $linkedin = $_POST['member_linkedin'];
      $data = array(
        'member_name' => $name,
        'member_work' => $work,
        'member_facebook' => $facebook,
        'member_twitter' => $twitter,
        'member_linkedin' => $linkedin
      );
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->insert($table,$data);
      header("Location:".BASE_URL."Admin/member");
    }

    public function updateMember($id){
      $table = "member";
      $name = $_POST['member_name'];
      $work = $_POST['member_work'];
      $facebook = $_POST['member_facebook'];
      $twitter = $_POST['member_twitter'];
      $linkedin = $_POST['member_linkedin'];
      $data = array(
        'member_name' => $name,
        'member_work' => $work,
        'member_facebook' => $facebook,
        'member_twitter' => $twitter,
        'member_linkedin' => $linkedin
      );
      $cond = "member_id=".$id;
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->update($table,$data,$cond);
      header("Location:".BASE_URL."Admin/member");
    }

    public function memberDelete($id){
      $table = "member";
      $cond = "member_id=".$id;
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->delete($table,$cond);
      header("Location:".BASE_URL."Admin/member");
    }

// Servic Section start from here ....

    public function service(){
          $this->load->view('admin/header');
          $data = array();
          $table = "home_service";
          $adminModal = $this->load->modal('AdminModal');
          $data['service'] = $adminModal->getAll($table);
          $this->load->view('admin/service',$data);
          $this->load->view('admin/footer');
    }

    public function addService(){
          $this->load->view('admin/header');
          $table = "home_service";
          $serv_name = $_POST['serv_name'];
          $serv_logo = $_POST['serv_logo'];
          $serv_desc = $_POST['serv_desc'];
          $data = array(
            "serv_name" => $serv_name,
            "serv_desc" => $serv_desc,
            "serv_logo" => $serv_logo
          );
          $adminModal = $this->load->modal('AdminModal');
          $adminModal->insert($table,$data);
          header("Location:".BASE_URL."Admin/service");
    }

    public function updateService($id){
          $table = "home_service";
          $serv_name = $_POST['serv_name'];
          $serv_logo = $_POST['serv_logo'];
          $serv_desc = $_POST['serv_desc'];
          $data = array(
            "serv_name" => $serv_name,
            "serv_desc" => $serv_desc,
            "serv_logo" => $serv_logo
          );
          $cond = "serv_id=".$id;
          $adminModal = $this->load->modal('AdminModal');
          $adminModal->update($table,$data,$cond);
          header("Location:".BASE_URL."Admin/service");
    }

    public function deleteService($id){
      $table = "home_service";
      $cond = "serv_id=".$id;
      $adminModal = $this->load->modal('AdminModal');
      $adminModal->delete($table,$cond);
      header("Location:".BASE_URL."Admin/service");
    }









      public function logout(){
          Session::init();
          Session::destroy();
          header("Location:".BASE_URL."Login/home");
      }


  }
