<?php

/**
 * 
 */
class Blog extends CI_controller
{
	public function index()
	{
		$this->load->view('blog/v_tampil');
	}

}