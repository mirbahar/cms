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

        $sql = "SELECT p.name as product_name,p.image,p.price,p.id as product_id,p.description,p.manufacture, categories.name as category_name,
                        product_details.products_detail_id as products_detail_id
                FROM  products p
                INNER JOIN  product_details ON p.id = product_details.product_id
                INNER JOIN  categories ON categories.id = product_details.category_id";

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
        $this->loadTable('product_details','products_detail_id');
       $this->remove($id);
    }


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