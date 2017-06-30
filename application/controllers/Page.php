<?php
/**
* Page Controller
*/
class Page extends Frontend_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('page_m');
	}

	public function index(){
		$pages = $this->page_m->get(1);
		var_dump($pages);
	}
}