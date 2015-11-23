<?php


class Order extends App_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('order_detail','orderid');
    }

    public function getAll()
    {

        $sql = "SELECT * FROM orders
                INNER JOIN order_detail
                ON order_detail.orderid  = orders.serial
                 INNER JOIN users
                 ON users.id = orders.customerid
                 INNER JOIN products
                 ON products.id = order_detail.productid ";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public  function delete($id){
        $this->loadTable('product_details','products_detail_id');
       $this->remove($id);
    }

}