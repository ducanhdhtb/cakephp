<?php
class ValidsController extends AppController{
	public $name = "Valid";
	public $helpers = array ('Html','Form') //được sử dụng để tạo form (khai báo trong controller)
	public $components = array('Session') //sử dụng session(khai báo trong controller)

	function vidu1(){
	    //print_r($this->data);
	    $this->Valid->set($this->data);
	    if($this->data){
	    	 /*$this->data là mảng dữ liệu được form submit các bạn có thể dùng print_r($this->data) để xem thành phần của mảng này*/
	      if($this->Valid->valid1()== TRUE){
	      	/*$this->Valid->set($this->data) nó sẽ kích hoạt tính năng validation, sau đó dùng hàm $this->Valid->valid1() đã được định nghĩa trong model để kiểm tra dữ liệu, kết quả TRUE thì hợp lệ, FALSE thì không hợp lệ.*/
	        $this->Session->setFlash("Dữ liệu hợp lệ !");
	      }else{
	        $this->Session->setFlash("Dữ liệu không hợp lệ!");
	      }
	    }
 	}

	function vidu2(){
    $this->Valid->set($this->data);
	    if($this->data){
	       if($this->Valid->valid2()== TRUE){
	           $this->Session->setFlash("Dữ liệu hợp lệ !");
	       }else{
	           $this->Session->setFlash("Dữ liệu không hợp lệ!");
	       }
	    }
 	}

	function vidu3(){
	 	
	 }

	function vidu4(){
	 	
	}

	function vidu5(){
	 	
	}
}