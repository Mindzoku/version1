<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('cart_m');
		$this->load->model('category_m');
	}

	public function addToCart($pdid)
	{
		$user = $this->ion_auth->user()->row();
		
		$cart = array('pd_id' => $pdid,
				'ct_qty' =>  $this->input->post('qty'),
				'ct_user_id' => $user->id);	

		if(!$this->cart_m->checkCart($pdid)){
			$this->cart_m->addCart($cart);
		} else {
			$this->cart_m->addCartQty($cart);
		}

		redirect('Main');
	}

	public function getCart()
	{
		$user = $this->ion_auth->user()->row();
		$data['carts'] = $this->cart_m->getCart($user->id);
		$data['menu'] = 'cart';
		$data['categories'] = $this->category_m->get_all_categories();
		// print_r($data['carts']);
		$this->load->view('user/cart', $data);
	}

	public function getCart2()
	{
		$data['menu'] = 'cart';
		$data['categories'] = $this->category_m->get_all_categories();
		$this->load->view('user/cart2', $data);
	}
}