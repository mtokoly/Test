<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public $current_user = array();

	public function __construct()
	{
		parent::__construct();

		// Auth Filters
		$this->is_admin();

		// Core Filter
		$this->before(); // runs before the application has loaded
	}

	private function is_admin()
	{
		$segment = $this->uri->segment(1);
		if ( $segment == 'admin' )
		{
		}
	}

	// Filters
	private function before()
	{

	}

}