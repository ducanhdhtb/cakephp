<?php
class Valid extends AppModel{
	var $name = "Valid";//Model name
	public $useTable = false; // Don't use database if use turn on true;
	public $validate = array(); // Namespace default in model;
	function valid1(){
	   $this->validate = array(
	      "name" => array(
	           "rule" => "notBlank",
	           "message" => "Name not empty !",
	       ),
	       "email" => array(
	           "rule" => "notBlank", // tập luật là không rỗng
	           "message" => "Email not empty !", // thông báo khi có lỗi
	        ),
	 
	    );
		 if($this->validates($this->validate)) // nếu dữ liệu đã được validate (hợp lệ)
		 return TRUE;
		 else
		 return FALSE;
 	}

 	function valid2(){
	    $this->validate = array(
	       "name" => array(
	           "dk1" => array(
	               "rule" => "notBlank",
	               "message" => "Name không rỗng !",
	            ),
	            "dk2" => array(
	                "rule"=> array('lengthBetween', 6, 10),
	                "message" => "Name trong khoảng 6 đến 10 kí tự"
	            ), 
	 
	         ),
	         "email" => array(
	             "dk1" => array(
	                  "rule" => "notBlank",
	                  "message" => "Email không rỗng !",
	              ),
	              "dk2" => array(
	                  'rule' => array('email', true),
	                  "message" =>"Vui lòng nhập đúng định dạng",
	               ),
	          ),
	          "website" => array(
	              "dk1" => array(
	                  "rule" => "notBlank",
	                  "message" => "Website không rỗng !",
	              ),
	              "dk2" =>array(
	                  "rule" =>"url",
	                  "message" => "Vui lòng nhập đúng định dạng website",
	              )
	          ),
	 	);
	 	if($this->validates($this->validate))
	 	return TRUE;
	 	else
	 	return FALSE;
	 }

}
