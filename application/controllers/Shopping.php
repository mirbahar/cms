<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends App_Controller {

	public function __construct()
	{
		parent::__construct();

        $this->layout->setLayout('layout_main');

        $this->load->model('Product');
        $this->load->model('BillingModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('cart');
	}

	public function index()
	{
        $this->load->model('product');
        $this->data['products'] = $this->product->getAll();
		$this->layout->view('Shopping/shopping_view', $this->data);
	}
	
	
	 function add()
	{
              // Set array for send data.
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

                 // This function add items into cart.
		$this->cart->insert($insert_data);
	      
                // This will show insert data in cart.
		redirect('shopping');
	     }
	
		function remove($rowid) {
                    // Check rowid value.
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('shopping');
	}
	
	    function update_cart(){
                
                // Recieve post values,calcute them and update
                $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('shopping');        
	}	
        function billing_view(){

		$this->layout->view('Shopping/billing_view');
        }
        
        	public function save_order()
	{

          // This will store all values which inserted  from user.
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone'),

		);
                 // And store user imformation in database.
		$cust_id = $this->BillingModel->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id,

		);		

		$ord_id = $this->BillingModel->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price'],
                    'status' 	    => 1,
                    'delivery_type' => $this->input->post('delivery_type')

				);		

                            // Insert product imformation with order detail, store in cart also store in database. 
                
		         $cust_id = $this->BillingModel->insert_order_detail($order_detail);
			endforeach;
		endif;
	      
                // After storing all imformation in database load "billing_success".
                $this->layout->view('Shopping/billing_success');
	}
}