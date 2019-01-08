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
      $sql = "select blog_post.*,blog_category.cat_name from blog_post inner join blog_category on blog_post.post_cat = blog_category.cat_id order by blog_post.post_id desc";
      return $this->db->select($sql);
    }



    public function latestPost($table,$limit){
      $sql = "SELECT * FROM $table order by post_id desc limit $limit";
      return $this->db->select($sql);
    }

    public function postByCond($table,$cond){
      $sql = "select * from $table where $cond";
      return $this->db->select($sql);
    }





  }
