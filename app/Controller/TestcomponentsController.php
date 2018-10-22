<?php class TestcomponentsController extends AppController{
	 public $components = array('Data');// Declare component 
	  function test1(){
	   $data = $this->Data->randd(6);//Sử dụng function randd(6),randdom 6 số
       $this->set("data",$data);
    }
}