<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	/**
	 * Index Page for the static contacts controller.
	 *
	 *
	 */
	public function index()
	{	
		$d['title'] = 'contacts';
		$d['section_title'] = 'Contacts';
		$d['v'] = 'contacts_view';
		$this->load->view('template', $d);
	}
}