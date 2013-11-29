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
    
    function get_last_ten_entries()
    {
        $query = $sql = $this->db->query('SELECT cat_id FROM tbl_category ORDER BY cat_id ASC');
        return $query->result();
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

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    function get_all_categories(){
        $sql = "SELECT * FROM tbl_category ORDER BY cat_id";
        $query = $this->db->query($sql);
        // return $this->db->query($sql);

        return $query->result_array();
    }

    function get_allname_categories(){
        $sql = "SELECT cat_name FROM tbl_category ORDER BY cat_id";
        $query = $this->db->query($sql);
        // return $this->db->query($sql);

        return $query->result_array();
    }

}

?>