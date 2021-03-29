<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class MWRA extends CI_Controller{

		public function view($page){

			if(!file_exists(APPPATH.'views/pages/'.$page)){
				show_404();
			}
			$this->load->view('templates/head.html');
			$this->load->view('templates/header.html');
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer.html');

		}

	}