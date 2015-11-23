<?php

class Orders extends App_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model('order');
        $this->load->library('cart');
    }

    public function index()
    {

        $this->load->model('order');
        $this->data['orders'] = $this->order->getAll();
//var_dump($this->data['orders']);die;
        $this->layout->view('Order/list', $this->data);
    }

    public function orderLogin(){

        $this->layout->setLayout('layout_login');
        $this->layout->view('auth/orderlogin',$this->data);
    }
}