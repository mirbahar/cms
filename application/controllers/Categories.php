<?php

class Categories extends App_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model('Category');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->model('category');

        $this->data['categories'] = $this->category->getAll();

        $this->layout->view('Category/list', $this->data);
    }
    public function save()
    {
        $data     = $this->input->post();

        if (!empty($_POST)) {
            $this->saveData($data);
        }
        $this->layout->view('Category/add');
    }
    /**
     * @param $data
     */
    public function saveData($data)
    {
        $this->load->model('category');
        if (empty($data['id'])) {
             $this->category->create($data);
            redirect('Categories/index', 'refresh');
        } else {
            // update categories in future
        }
    }

    public function deleteCategory($id)
    {
        $this->load->model('category');
        $this->category->delete($id);
        redirect('Categories/index', 'refresh');

    }
}