<?php
	class indexController extends Controller{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){

				$this->load->model('posts');

				$vars['title'] = 'Dynamic title';
				$vars['posts'] = $this->posts->getEntries();
				$this->load->view('index',$vars);	
		}
		
		public function create(){
			$this->load->model('posts');

				$vars['title'] = 'Dynamic title';
				$vars['posts'] = $this->posts->getEntries();
				$this->load->view('index/create',$vars);	
		}

	}
