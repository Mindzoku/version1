<?
class promotion_m extends CI_Model {

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
        $sql = "INSERT INTO tbl_promotion (cat_id,prom_name,prom_description, prom_price, prom_qty, prom_image1, prom_image2, prom_image3, prom_date, prom_last_upromate) VALUES (?,?,?,?,?,?,?,?,?,?);"; 
        return $this->db->query($sql, array($cat_id,$name, $description,$price,$quantity,$filename1,$filename2,$filename3,$date, $date));
    }

    function get_all_promotion(){
        $query = $this->db->query("SELECT * FROM tbl_promotion ORDER BY prom_id");
        return $query->result_array();
    }

    function get_promotion_name($cat_id){
        $sql = "SELECT prom_name FROM tbl_promotion WHERE cat_id = ?";
        return $this->db->query($sql, array($cat_id));
    }

    function delete_promotion($id){
        $sql = "DELETE FROM tbl_promotion WHERE prom_id = ?";
        return $this->db->query($sql, array($id));
    }

    function update_promotion($id, $name, $description, $filename, $date){
        $sql = "UPDATE tbl_promotion SET prom_name = ?, prom_description = ?, prom_image = ?, prom_date = ?  WHERE prom_id = ?";
        return $this->db->query($sql, array($name, $description, $filename, $date, $id));
    }


    function get_promotion_data($id){
        $query = $this->db->query("SELECT * FROM tbl_promotion WHERE prom_id = ?", array($id));
        return $query->row_array();
    }

}

?>