<?php
class Home_model extends CI_Model {
        function shops(){
                $sql = "SELECT * FROM shops";
                $query = $this->db->query($sql);
                $result = $query->result();

                return $result;
        }

        function services($shop_id){
                $sql = "SELECT * FROM services WHERE shop_id = $shop_id";
                $query = $this->db->query($sql);
                $result = $query->result();

                return $result;
        }
}
?>