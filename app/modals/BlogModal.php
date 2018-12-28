<?php
  class BlogModal extends DModal{

    function __construct()
    {
      parent::__construct();
    }

    public function category($table){
      $sql = "SELECT * FROM $table";
      return  $this->db->select($sql);
    }


    public function post($table){
    //  $sql = "SELECT * FROM $table";

      $sql = "select blog_post.*,blog_category.cat_name from blog_post inner join blog_category on blog_post.post_cat = blog_category.cat_id order by blog_post.post_id desc";



      return $this->db->select($sql);
    }









  }
