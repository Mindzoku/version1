<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_m extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getAllProduct($catid)
    {
    	$query = $this->db->get_where('tbl_product', array('cat_id' => $catid ));
    	return $query->result_array();
    }

    public function getProduct($catid, $pdid)
    {
    	$query = $this->db->get_where('tbl_product', array('cat_id' => $catid, 'pd_id' => $pdid ));
    	return $query->row_array();
    }
}