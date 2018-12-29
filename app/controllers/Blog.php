<?php

  class Blog extends DController  {

    function __construct(){
      parent::__construct();
    }

  public function home(){
    $this->index();
  }


   public function index(){
     $this->load->view('header');
      $data = array();
      $postTable = 'blog_post';
      $catTable = 'blog_category';
      $blogModal = $this->load->modal('BlogModal');
      $data['blogPost'] = $blogModal->post($postTable);
      $data['blogCat'] = $blogModal->category($catTable);
      $data['latestPost'] = $blogModal->latestPost($postTable,'5');
      $this->load->view('blog/blog',$data);
      $this->load->view('footer');
    }


    public function postByCategory($id){
      $this->load->view('header');
      $data = array();
      $postTable = 'blog_post';
      $catTable = 'blog_category';
      $blogModal = $this->load->modal('BlogModal');
      $cond = 'post_cat ='.$id;
      $data['blogPost'] = $blogModal->postByCond($postTable,$cond);
      $data['blogCat'] = $blogModal->category($catTable);
      $data['latestPost'] = $blogModal->latestPost($postTable,'5');
      $this->load->view('blog/blog',$data);
      $this->load->view('footer');
    }

    public function singlePost($id){
      $this->load->view('header',$data);
      $data = array();
      $postTable = 'blog_post';
      $catTable = 'blog_category';
      $blogModal = $this->load->modal('BlogModal');
      $cond = 'post_id ='.$id;
      $data['blogPost'] = $blogModal->postByCond($postTable,$cond);
      $data['blogCat'] = $blogModal->category($catTable);
      $data['latestPost'] = $blogModal->latestPost($postTable,'5');
      $this->load->view('blog/blog',$data);
      $this->load->view('footer');
    }

    public function fullSinglePost($id){
      $this->load->view('header');
      $data = array();
      $postTable = 'blog_post';
      $catTable = 'blog_category';
      $blogModal = $this->load->modal('BlogModal');
      $cond = 'post_id ='.$id;
      $data['blogPost'] = $blogModal->postByCond($postTable,$cond);
      $data['blogCat'] = $blogModal->category($catTable);
      $data['latestPost'] = $blogModal->latestPost($postTable,'5');
      $this->load->view('blog/postDetails',$data);
      $this->load->view('footer');
    }





  }
