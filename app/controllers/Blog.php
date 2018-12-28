<?php

  class Blog extends DController  {

    function __construct()
    {
      parent::__construct();
      $this->index();
    }


    public function index(){
      $data = array();
      $postTable = 'blog_post';
      $catTable = 'blog_category';
      $blogModal = $this->load->modal('BlogModal');
      $data['blogPost'] = $blogModal->post($postTable);
      $data['blogCat'] = $blogModal->category($catTable);
      $this->load->view('blog',$data);
    }








  }
