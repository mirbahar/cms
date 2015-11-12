<?php

class Orders extends App_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model('order');
    }

    public function index()
    {

        $this->load->model('order');
        $this->data['orders'] = $this->order->getAll();

        $this->layout->view('Order/list', $this->data);
    }
}