<?
class Category_m extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_entry($name, $description)
    {
        // $this->load->database();
        $sql = "INSERT INTO tbl_category (cat_name,cat_description)
            VALUES (?,?);"; 

        return $this->db->query($sql, array($name, $description));
    }

    function is_exist($name){
        $sql = "SELECT cat_name FROM tbl_category WHERE cat_name = '".$name."'";
        $query = $this->db->query($sql);
        return $query->num_rows(); 
        // $query = $this->db->get_where('tbl_category', array('cat_name' => $name));
        // return $query_array_result();
        // return $this->db->get_where('tbl_category', array('cat_name' => $name));
    }

    function get_all_categories(){
        $sql = "SELECT * FROM tbl_category ORDER BY cat_id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_category_name($id){
        $sql = "SELECT cat_name FROM tbl_category WHERE cat_id = ?";
        $category = $this->db->query($sql, array($id))->row_array();
        $name = $category['cat_name'];
        return $name;
        // $query = $this->db->get_where('tbl_category', array('cat_id' => $id));
        // echo $id;
        // $query = $this->db->select('cat_name')->get_where('tbl_category', array('cat_id' => $id));
        // return $query->result_array();
    }

    function delete_category($id){
        $sql = "DELETE FROM tbl_category WHERE cat_id = ?";
        return $this->db->query($sql, array($id));
    }

    function update_category($id, $name, $description){
        $sql = "UPDATE tbl_category SET cat_name = ?, cat_description = ? WHERE cat_id = ?";
        return $this->db->query($sql, array($name, $description, $id));
    }

}

?>