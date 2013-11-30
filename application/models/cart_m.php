<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cart_m extends CI_Model {


	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function checkCart($pd_id)
    {
    	$query = $this->db->query('SELECT pd_id FROM tbl_cart WHERE pd_id = '.$pd_id);
    	return ($query->num_rows() > 0);
    }

    public function addCartQty($cart)
    {
    	$query = $this->db->query('SELECT ct_qty FROM tbl_cart
    							 WHERE pd_id = ? AND ct_user_id = ?', array($cart['pd_id'], $cart['ct_user_id']));
    	$qty = $query->row()->ct_qty;
    	$ct_qty = (int)$qty+$cart['ct_qty'];

    	$query = $this->db->query('UPDATE tbl_cart SET ct_qty = ? WHERE pd_id = ? AND ct_user_id = ?',
    								array($ct_qty , $cart['pd_id'], $cart['ct_user_id'] ));
    }

    public function addCart($cart)
    {
    	$this->db->insert( 'tbl_cart' ,$cart);
    }

    public function getCart($userid)
    {
    	// $query = $this->db->get_where('tbl_cart', $userid);
    	$this->db->select('pd_name,ct_qty, pd_image1, pd_image2, pd_image3, pd_price');
    	$this->db->from('tbl_cart');
    	$this->db->join('tbl_product', 'tbl_cart.pd_id = tbl_product.pd_id');
    	$this->db->where('ct_user_id', $userid);

    	$query = $this->db->get();
    	return $query->result_array();
    }

}