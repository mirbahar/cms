<?php

class Products extends App_Controller
{
    private $uploadedFile;
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
        $this->load->model('Product');

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->load->model('product');
        $this->load->model('category');

        $this->data['products'] = $this->product->getAll();
        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        $this->layout->view('Product/list', $this->data);
    }
    public function save()
    {
        $data     = $this->input->post();

        $this->load->model('product');
        $this->load->model('category');

        $this->data['categories'] = $this->category->getAll();
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('category_id[]', 'at least one Category', 'required');
        if (!empty($_POST)) {

            if ($this->form_validation->run() == TRUE)
            {
                $this->handleUpload();
                $this->saveData($data);
            }


        }
        $this->layout->view('Product/add', $this->data);
    }

    public function productList(){

        $this->load->model('product');
        $this->data['products'] = $this->product->getAll();
        foreach($this->data['products'] as $productList)
        {

            $values[] = array(
                'id' => $productList['products_detail_id'],
                'name' => $productList['product_name'],
                'description' => $productList['description'],
                'price' => $productList['price'],
                'category_name' => $productList['category_name'],
                'image' => $productList['image']
            );

        }
       // header("content-type: application/json");
        echo  json_encode($values);
    }

    private function handleUpload()
    {
        $config['upload_path']   = './uploads/product';
        $config['allowed_types'] = '*';
        $config['max_size']      = '1024';
        $config['encrypt_name']  = false;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $this->uploadedFile = $this->upload->data();
        }
    }
    public function deleteProductByCategoryWise($id)
    {
        $this->load->model('product');
        $this->product->delete($id);
        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        redirect('Products/index', 'refresh');

    }

    /**
     * @param $data
     */
    public function saveData($data)
    {
        if (empty($data['id'])) {
            $data['image'] = $_FILES['image']['name'];
            $this->data['product_id'] = $this->product->create($data);
             $this->product->insertProductDetail($data['category_id'], $this->data['product_id']);
            redirect('Products/index', 'refresh');
        } else {
            // update product in future
        }
    }
}