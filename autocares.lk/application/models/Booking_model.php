<?php
class Booking_model extends CI_Model {
        public function shop($shop_id){
                $sql = "SELECT * FROM shops WHERE id = $shop_id";
                $query = $this->db->query($sql);
                $result = $query->first_row();

                return $result;
        }

        public function services($shop_id){
                $sql = "SELECT * FROM services WHERE shop_id = $shop_id";
                $query = $this->db->query($sql);
                $rows = $query->result();

                return $rows;
        }

        public function insert($shop_id,$name,$v_no,$mobile,$service,$time,$email){
                $data = array(
                        'shop_id' => $shop_id,
                        'customer_name' => $name,
                        'customer_mobile' => $mobile,
                        'customer_email' => $email,
                        'vehicle_no' => $v_no,
                        'service' => $service,
                        'time' => $time
                );

                $this->db->insert('booking', $data);
        }

}
?>