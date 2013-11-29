<?
class Product_m extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry($cat_id, $name, $description, $price, $quantity, $filename1, $filename2, $filename3, $date)
    {
        $sql = "INSERT INTO tbl_product (cat_id,pd_name,pd_description, pd_price, pd_qty, pd_image1, pd_image2, pd_image3, pd_date) VALUES (?,?,?,?,?,?,?,?,?);"; 
        return $this->db->query($sql, array($cat_id,$name, $description,$price,$quantity,$filename1,$filename2,$filename3,$date));
    }

    function is_exist($name){
        $sql = "SELECT pd_name FROM tbl_product WHERE pd_name = ?";
        $query = $this->db->query($sql, array($name));
        echo $query->num_rows(); 
        return $query->num_rows(); 
    }

    function get_all_product($cat_id){
        $sql = "SELECT * FROM tbl_product WHERE cat_id = ? ORDER BY pd_name";
        $query = $this->db->query($sql, array($cat_id));
        return $query->result_array();
    }

    function get_product_name($cat_id){
        $sql = "SELECT pd_name FROM tbl_product WHERE cat_id = ?";
        return $this->db->query($sql, array($cat_id));
        // $query = $this->db->get_where('tbl_product', array('cat_id' => $cat_id));
        // return $query->result_array();

        // return $query;
    }

    // function get_category_id($pd_id){
    //     $sql = "SELECT cat_id FROM tbl_product WHERE pd_id = ?";
    //     return 
    // }

    function get_product_files_path($id){
        $sql = "SELECT cat_id ,pd_image1, pd_image2, pd_image3 FROM tbl_product WHERE pd_id = ?";
        $query = $this->db->query($sql, array($id));
        return $query->row_array();
        $path = $query->row_array();
        echo $path['cat_id'];
    }

    function delete_product($id){
        $sql = "DELETE FROM tbl_product WHERE pd_id = ?";
        return $this->db->query($sql, array($id));
    }

    function update_product($id, $name, $description){
        $sql = "UPDATE tbl_product SET pd_name = ?, pd_description = ? WHERE pd_id = ?";
        return $this->db->query($sql, array($name, $description, $id));
    }

}

?>