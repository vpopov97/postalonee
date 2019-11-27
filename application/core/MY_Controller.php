<?php 
	class MY_Controller extends CI_Controller {

		public function __construct() {
			parent::__construct();

			$this->data['title'] = "postalonee - сайт о посылках";

			//$this->load->model('forum_model');
			//$this->data['news'] = $this->news_model->getNews();

			

		}

	}