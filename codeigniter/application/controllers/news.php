<?php 
class News extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
	}
	public function index(){
		$data['news']=$this->news_model->get_news();
		$this->load->view('header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('footer');
	}
	public function view($slug){

		$data['news_item']=$this->news_model->get_news($slug);
		if(empty($data['news_item'])){
			//show_404();
			echo 'Fallo';
		}
		// echo $data["news_item"]["text"];
		$data['title']=$data["news_item"]["title"];
		$this->load->view('header',$data);
		$this->load->view('news/view',$data);
		$this->load->view('footer');
		

	}

}