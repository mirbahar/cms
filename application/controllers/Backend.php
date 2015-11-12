<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends App_Controller {

    function __construct()
    {

        parent::__construct();

        $this->layout->setLayout('layout_admin');

    }

    public function index()
    {
        $this->layout->view('Backend/home');
    }
}
