<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pages extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
		public function view($page = 'github')
		{
			 if ( ! file_exists(FCPATH.'application/views/'.$page.'.php')){
				// Oh, oh.. te has colado vete a casa!!
			 	show_404();
			 	//echo FCPATH.'application/views'.$page.'.php';
			 }

			$data['title']= ucfirst($page); //Pone mayuscula la primera letra

			// $this->load->view('header', $data);
			$this->load->view($page, $data);
			// $this->load->view('footer', $data);
			
		}
}