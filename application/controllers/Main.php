<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
    {
    	parent::__construct();
        // Call the Model constructor
        $this->load->model('category_m');
        $this->load->model('product_m');
    }

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
		$data['menu'] = "home";
		$data['title'] = "shop";
		$data['categories'] = $this->category_m->get_all_categories();
		$this->load->view('home', $data);
	}

	public function login()
	{
		// $this->load->view('auth/login', $data);
		redirect('auth');

	}

	public function product($catid, $pdid)
	{
		$data['product'] = $this->product_m->getProduct($catid, $pdid);
		$data['catid'] = $catid;
		// $data['cat_name'] = $cat_name;
		$data['categories'] = $this->category_m->get_all_categories();
		$this->load->view('user/product',$data);
	}

	public function categories($catid)
	{
		$data['categories'] = $this->category_m->get_all_categories();
		$data['catid'] = $catid;
		$data['products'] = $this->product_m->get_all_product($catid);
		if(count($data['products']) < 4) {
			$data['height'] = "283px";
		}
		elseif (count($data['products']) < 7) $data['height'] = "566px";
		elseif (count($data['products']) < 10) {
			$data['height'] = "850px";
		}
		$this->load->view('user/categories', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */