<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends App_Controller {

    function __construct()
    {

        parent::__construct();

        $this->layout->setLayout('layout_main');

    }

    public function index()
    {
        $this->layout->view('Frontend/home');
    }
}
