<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function addCategory(){
		$this->load->view('admin/add-category');
	}

	public function addingCategory(){
		$this->load->database();
		// $sql = "select * from tbl_category";
		$name = $this->input->post('categoryName');
		$description = $this->input->post('description');

		$data['name'] = $name;
		$data['description'] = $description;

		$this->load->model('category_m');
		$is_exist = $this->category_m->is_exist($name);
		if($is_exist > 0){
			$data['message'] = FALSE;
			return $this->load->view('admin/resultAddCategory', $data);
		}
		$data['message'] = $this->category_m->insert_entry($name, $description);
		return $this->load->view('admin/resultAddCategory', $data);
		// //FAIL
		// if(! $this->db->simple_query($sql)){
		// 	$data['message'] = 'fail';
		// }

		// //PASS
		// $query = $this->db->query($sql);
		// // foreach ($query->result_array() as $row)
		// // {
		// //     echo $row['cat_id']."<br>";
		// //     echo $row['cat_name']."<br>";
		// //     echo $row['cat_description']."<br>";
		// // }
		// $data['categories'][] = (object)$query;
		// $this->load->view('admin/resultAddCategory', $data);
		
	}

	public function addProduct(){
		return $this->load->view('admin/add-product');
	}

	public function order(){
		$this->load->view('admin/order');
	}

	public function promotion(){
		$this->load->view('admin/promotion');
	}

	public function product(){
		$this->load->database();
		$this->load->model('category_m');
		$data['categories'] = $this->category_m->get_all_categories();
		// echo $data['categories'];
		print_r($data['categories']);
		$this->load->view('admin/product', $data);
	}

	public function allProduct(){
		return $this->load->view('admin/all-product');
	}

	public function test(){
		$this->load->view('admin/test-pic');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */