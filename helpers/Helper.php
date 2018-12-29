<?php

  Class Helper{


    public static function cutPost($value){
							 	$text=$value;
                $text = strlen($text)>200 ? substr($text,0,200): $text;
                return $text;

    }











  }
