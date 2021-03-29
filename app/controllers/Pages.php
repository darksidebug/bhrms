<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends CI_Controller{

		public function index(){
			redirect('pages/view/home');
		}

		public function view($page = null){

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$this->load->view('template/head');
			$this->load->view('template/navigation-bar');
			$this->load->view('pages/'.$page);
			$this->load->view('template/footer');

		}

		public function form($page = null){
			
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php') || !$page == 'sign-in' || !$page == 'sign-up'){
				show_404();
			}

			$this->load->view('template/head');
			$this->load->view('template/navigation-bar');
			$this->load->view('pages/'.$page);
			$this->load->view('template/footer');

		}

	}