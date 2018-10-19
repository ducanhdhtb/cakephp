<?php
class UsersController extends AppController{
     var $uses = array('User');
     public $name = "Users"; // tên của Controller User
     function index(){
      $data = $this->User->find("all");
      /*echo "<pre>";
      var_dump($data);
      echo "</pre>";*/
      $this->set("data",$data);
     }
}