<?php
class BooksController extends AppController{
   public $name = "Books";
   function index(){
     $data = $this->Book->find("all");
     /*echo "<pre>";
     print_r($data); exit;
     echo "</pre>";*/
     $this->set("data",$data);
   }
   function index2() {
     //có 2 cách viết
     //Cách 1
     /*$conditions = array(
         'conditions' => array('description LIKE' => "truyện tiên ma%" ),
       );
 
     $data = $this->Book->find("all" , $conditions);
     $this->set("data", $data);*/
 
     //Cách 2
     $data = $this->Book->find("all", array(
          'conditions' => array('title LIKE' => "t%" ),
          'limit' => 2,
          //'fields' => array('title', 'description', 'id'),
          //'order' => array('id DESC'),
     ));
     $this->set("data", $data);
    }

     function index3(){
     	$data = $this->Book->find("first", array(
       'conditions' => array('id' => 5),
     ));
     /*echo "<pre>";
     print_r($data);
     echo "</pre>";*/
     	$this->set("data" , $data);
	}

	function index4(){
		$sql = "select * from books";
		$data = $this->Book->query($sql);
		$this->set("data" , $data);

	}
 }