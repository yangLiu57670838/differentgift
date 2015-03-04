<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Download extends CI_Controller {  

       public function downloadPage()
	   {
	       $this->load->view("page");
	   }

       public function index() {  
			  //				   
	          echo "This is my index function"; 
	   }


       public function one1($p1, $p2) {
	          //
	          echo "This is the one<br>"; 
			  echo "These are the params: $p1, $p2";

	   }
	   
	   public function two(){
	          //
	          echo "This is the two";
	   }
	   
	   public function one($name) {
	   
	          $this->load->view('header');
			                                   
			  
			  $data = array("n" => $name);
	          $this->load->view('one', $data); 
	   }
	   
	   public function oo($name) {
	     
		      $this->load->model("hello_model");
			  $profile = $this->hello_model->getProfile("Yang");
			  
			  print_r($profile);
	   }
	   
	   public function ot($name) {
	     
		      $this->load->model("hello_model");
			  $profile = $this->hello_model->getProfile("Yang");
			  
			  $this->load->view("header");
			  $data = array("n" => $name);
			  $data['profile'] = $profile; 
			   $this->load->view('one', $data);
			  
	   }
	   
}