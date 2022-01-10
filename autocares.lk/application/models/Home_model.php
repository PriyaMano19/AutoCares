<?php
class Home_model extends CI_Model {
        function shops(){
                $sql = "SELECT * FROM shops";
                $query = $this->db->query($sql);
                $result = $query->result();

                return $result;
        }

        function services($shop_id){
                $sql = "SELECT * FROM services WHERE shop_id = $shop_id LIMIT 3";
                $query = $this->db->query($sql);
                $result = $query->result();

                return $result;
        }

        function service_available($shop_id){
                $sql = "SELECT * FROM services WHERE shop_id = $shop_id LIMIT 3";
                $query = $this->db->query($sql);
                $result = $query->num_rows();

                return $result;
        }

        function locations(){
                $sql = "SELECT district FROM shops GROUP BY district";
                $query = $this->db->query($sql);
                $result = $query->result();

                return $result;
        }

        function showservices(){
                $sql = "SELECT service FROM services GROUP BY service";
                $query = $this->db->query($sql);
                $result = $query->result();

                return $result;
        }
}
?>