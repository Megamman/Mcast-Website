<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	// magic method to load the parent class
	function __construct()
	{
		// without this, we won't  be able to...
		// this->build our pages.
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){

		//this command loads a view from the views folder
		$this->build('welcome');
	}
	public function welcome(){

		//this command loads a view from the views folder
		$this->build('welcome');
	}

	public function portofolio(){

		$this->load->model('get_model');

		$data = array(
			'users' 	=> $this->get_model->get_students()
		);
		//this command loads a view from the views folder
		$this->build('portofolio', $data);
	}

	public function resources(){

		//this command loads a view from the views folder
		$this->build('resources');
	}

	public function news(){

		//this command loads a view from the views folder
		$this->build('news');
	}

	public function contact(){

		//this command loads a view from the views folder
		$this->build('contact');
	}

	public function cancel(){

		//this command loads a view from the views folder
		$this->build('cancel');
	}

	public function vacancies(){

		//this command loads a view from the views folder
		$this->build('vacancies');
	}

	public function tools(){

		//this command loads a view from the views folder
		$this->build('tools');
	}




}
