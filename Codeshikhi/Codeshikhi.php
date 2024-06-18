<?php

/**
 * Plugin name: Codeshikhi
 * Description: This is my frist plugin
 * Plugin url: http://codeshikhi.com
 * Version: 0.0.1
 * Author: Muslim Khan
 * Author URL: http://Muslim Khan
 */


 class My_frist_plugin {
     public function __construct() {
          add_action('init', array($this, 'initialize'));
     }

     function initialize() {
          add_action('the_title', array($this, 'ff_change_title'));
          add_action('the_content', array($this, 'ff_change_content'));
     }


     
     function ff_change_title($post_title) {
          return " 123 - ". $post_title;   
     }



     function ff_change_content($post_content)  {
          $content = strip_tags($post_content);
          $word_count = str_word_count($content);
     
          //aprroximate reading time
          $read_time = ceil($word_count / 200);
          return $post_content . "<p>{$word_count} words. aprroximate reading time = {$read_time} minutes <p>";
     }

 }
 
 new My_frist_plugin();



















//  add_filter('the_title','change_title');

//  function change_title($post_title) {
//   return " 123 - ". $post_title;
//  }


//  add_filter('the_content','change_content');

//  function change_content($post_content) {
//      //find word count
//      $content = strip_tags($post_content);
//      $word_count = str_word_count($content);

//      //aprroximate reading time
//      $read_time = ceil($word_count / 200);
//      return $post_content . "<p>{$word_count} words. aprroximate reading time = {$read_time} minutes <p>";
//  }

 
 
 

// qr code ar link
//https://goqr.me/api/doc/


