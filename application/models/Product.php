<?php


class Product extends App_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('products','id');
    }

    public function getAll()
    {
        $sql = "SELECT p.id as product_id,p.name as product_name,
                       p.price as product_price, p.description, p.created_date, u.id as user_id,
                       u.username
                FROM  products p
                LEFT JOIN users u
                ON u.id = p.created_by
                ORDER BY p.id DESC ";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public  function create($data){

        return $this->insert($data);
    }
    public  function delete($id){
        $this->loadTable('products','id');
       $this->remove($id);
    }
    //TODO:
    public function insertProductDetail($data,$product_id){

            $insertMultipleCategory = array();
            $productDetailValue = array();

        foreach($data as $key=>$category){
            $insertMultipleCategory['product_id'] = $product_id;
            $insertMultipleCategory['category_id'] = $category;
            $productDetailValue[$key]= $insertMultipleCategory;
        }

        if (!empty($insertMultipleCategory)) {
            $this->db->insert_batch('product_details', $productDetailValue);
        }
    }
}