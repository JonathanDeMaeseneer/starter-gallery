<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            $this->data['pagebody'] = 'gallery';
            $this->render();
            //$this->load->view('gallery');
	}

}
