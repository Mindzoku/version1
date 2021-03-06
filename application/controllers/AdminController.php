<?php if ( ! defined('BASEPATH')) exit('No direct script access listowed');

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
		$this->load->model('category_m');
		$data['categories'] = $this->category_m->get_all_categories();
		//PRINT
		$this->load->view('admin/index', $data);
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
		$is_exist = $this->category_m->is_exist($name, 0);
		if($is_exist > 0){
			$data['message'] = FALSE;
			return $this->load->view('admin/resultAddCategory', $data);
		}
		$data['message'] = $this->category_m->insert_entry($name, $description);
		return $this->load->view('admin/resultAddCategory', $data);
	}

	public function deleteCategory($id){
		$this->load->model('category_m');
		$data['is_delete'] = FALSE;
		if($this->category_m->delete_category($id)){
			$data['is_delete'] = TRUE;
		}
		return $this->load->view('admin/delete-category', $data);
	}

	public function updateCategory(){
		$name = $this->input->post('categoryName');
		$description = $this->input->post('description');
		$id = $this->input->post('cat-id');

		$data['name'] = $name;
		$data['description'] = $description;

		$this->load->model('category_m');
		$is_exist = $this->category_m->is_exist($name, $id);
		if($is_exist > 0){
			$data['message'] = FALSE;
			return $this->load->view('admin/result-edit-category', $data);
		}
		$data['message'] = $this->category_m->update_category($id ,$name, $description);
		return $this->load->view('admin/result-edit-category', $data);
	}

	public function editCategory($id){
		$this->load->model('category_m');
		$data['category'] = $this->category_m->get_category_data($id);
		return $this->load->view('admin/edit-category', $data);
	}

	public function addProduct($id){
		$data['cat_id'] = $id;
		return $this->load->view('admin/add-product', $data);
	}

	public function addingProduct(){

		$name = $this->input->post('productName');
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		$quantity = $this->input->post('quantity');
		$this->load->model('product_m');
		$is_exist =  $this->product_m->is_exist($name);
		$data['name'] = $name;
		$data['cat_id'] = $this->input->post('cat-id');
		$cat_id = $data['cat_id'];
		// $this->load->model('category_m');
		// $data['cat_name'] = $this->category_m->get_category_name($data['cat_id']);
		if($is_exist > 0){
			$data['is_ok'] = FALSE;
			return $this->load->view('admin/result-add-product', $data);
		}

		// $cat_name = $data['cat_name'];
		$data['is_ok'] = TRUE;

		//Upload image
		$path = './uploads/'.$cat_id."/".$name;
		
		if(!file_exists($path)){
				mkdir($path,0777,true);
		}
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$this->load->library('upload', $config);

		// if ( !($this->upload->do_upload('image1') && $this->upload->do_upload('image2') && $this->upload->do_upload('image3') ))
		// {
		// 	$data['upload'] = $this->upload->display_errors();

		// 	return $this->load->view('admin/result-add-product', $data);
		// }
		// else
		// {
		$this->upload->do_upload('image1');
		$this->upload->do_upload('image2');
		$this->upload->do_upload('image3');
			$filename1 = $path."/".$_FILES["image1"]["name"];
			$filename2 = $path."/".$_FILES['image2']['name'];
			$filename3 = $path."/".$_FILES['image3']['name'];
			// $upload = $filename1."--".$filename2."--".$filename3;
			// $path .= "/".$filename1;
			$data['upload'] = "Success";
			$date = date("Y-m-d H:i:s");
			$data['is_ok'] = $this->product_m->insert_entry($cat_id ,$name, $description, $price, $quantity, $filename1, $filename2, $filename3, $date);
			return $this->load->view('admin/result-add-product', $data);
		// }

		/////////////////////////////////////////////
	}

	public function editProduct($id){
		$name = $this->input->post('productName');
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		$quantity = $this->input->post('quantity');
		$this->load->model('product_m');
		$data['product'] = $this->product_m->get_product_data($id);

		return $this->load->view('admin/edit-product', $data);
	}

	public function edittingProduct(){
		$this->load->model('product_m');
		$pd_id = $this->input->post('pd-id');
		$product = $this->product_m->get_product_data($pd_id);
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		$quantity = $this->input->post('quantity');


		if($_FILES['image1']['name'] == null)
			$_FILES['image1']['name'] = basename($product['pd_image1']);
		if($_FILES['image2']['name'] == null)
			$_FILES['image2']['name'] = basename($product['pd_image2']);
		if($_FILES['image3']['name'] == null)
			$_FILES['image3']['name'] = basename($product['pd_image3']);

		$cat_id = $product['cat_id'];
		$this->load->model('category_m');
		$cat_name = $this->category_m->get_category_name($cat_id);
		//Upload image
		$path = './uploads/'.$product['cat_id']."/".$product['pd_name'];
		
		if(!file_exists($path)){
				mkdir($path,0777,true);
		}
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$this->load->library('upload', $config);
		$this->upload->do_upload('image1');
		$this->upload->do_upload('image2');
		$this->upload->do_upload('image3');
		$filename1 = $path."/".$_FILES["image1"]["name"];
		$filename2 = $path."/".$_FILES['image2']['name'];
		$filename3 = $path."/".$_FILES['image3']['name'];
		$data['upload'] = "Success";
		$date = date("Y-m-d H:i:s");
		$data['is_ok'] = $this->product_m->update_product($product['pd_id'] ,$product['pd_name'], $description, $price, $quantity, $filename1, $filename2, $filename3, $date);
		$data['cat_id'] = $product['cat_id'];
		return $this->load->view('admin/result-edit-product', $data);
	}


	public function deleteProduct($id){
		$this->load->model('product_m');
		$paths = $this->product_m->get_product_files_path($id);
		$this->load->helper("file");
		$directory_name = dirname($paths['pd_image1']);
		$data['cat_id'] = $paths['cat_id'];
		delete_files($directory_name);
		rmdir($directory_name);
		if(!$this->product_m->delete_product($id)){
			$data['is_delete'] = FALSE;
			return $this->load->view('admin/delete-product', $data);
		}
		$data['is_delete'] = TRUE;
		return $this->load->view('admin/delete-product', $data);
	}

	public function order(){
		return $this->load->view('admin/order');
	}

	public function promotion(){
		$this->load->model('promotion_m');
		$data['promotions'] = $this->promotion_m->get_all_promotion();
		$this->load->view('admin/promotion', $data);
	}

	public function editPromotion($id){
		$this->load->model('promotion_m');
		$data['promotion'] = $this->promotion_m->get_promotion_data($id);
		$this->load->view('admin/edit-promotion', $data);
	}

	public function updatePromotion(){
		$id = $this->input->post('prom-id');
		$name = $this->input->post('promotionName');
		$description = $this->input->post('description');
		$this->load->model('promotion_m');
		$promotion = $this->promotion_m->get_promotion_data($id);

		$path = './uploads/promotion/'.$promotion['prom_id'];
		if(!file_exists($path)){
				mkdir($path,0777,true);
		}
		if($_FILES['image']['name'] == null){
			$_FILES['image']['name'] = basename($promotion['prom_image']);
		}
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$filename = $path."/".$_FILES['image']['name'];
		$date = date("Y-m-d H:i:s");
		$data['is_ok'] = $this->promotion_m->update_promotion($promotion['prom_id'] ,$name, $description, $filename, $date);
		
		$data['message'] = $this->upload->display_errors();
		$this->load->view('admin/result-edit-promotion', $data);
	}

	public function product(){
		$this->load->model('category_m');
		$data['categories'] = $this->category_m->get_all_categories();
		$this->load->view('admin/product', $data);
	}

	public function listProduct(){
		$data['is_ok'] = TRUE;
		$data['cat_id'] = $this->input->post('cat-id');
		if(is_null($data['cat_id'])){
			$data['is_ok'] = FALSE;
		}
		$this->load->model('product_m');
		$this->load->model('category_m');
		
		$cat_name = $this->category_m->get_category_name($data['cat_id']);
		$data['cat_name'] = $cat_name;
		$data['products'] = $this->product_m->get_all_product($data['cat_id']);
		// print_r($data['cat_name']);
		return $this->load->view('admin/list-product', $data);
	}

	public function test(){
		$this->load->view('admin/test-pic');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */