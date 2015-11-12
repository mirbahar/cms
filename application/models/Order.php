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

        $sql = "SELECT *,status.name as status_name
                FROM  orders
                INNER JOIN  order_detail   ON order_detail.orderid  = orders.customerid
                INNER JOIN  customers   ON customers.serial  = orders.serial
                Left JOIN  status   ON status.id  = order_detail.status
                INNER JOIN  products   ON products.id= order_detail.productid  order by date DESC ";

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