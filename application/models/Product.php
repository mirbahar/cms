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

        $sql = "SELECT p.name as product_name,p.price,p.id as product_id
                FROM  products p ORDER BY p.id ASC ";

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