<?php 
	/**
	 * M
	 */
	class Mchungchi extends MY_Model
	{
		
		public function get_canbo(){
			$this->db->select('id_can_bo, ho_ten, ngay_sinh');
			return $this->db->get('tbl_canbo')->result_array();
		}

		public function check_cb_chungchi($macb, $machungchi){
			$this->db->where_in('id_can_bo', $macb);
			$this->db->where('id_chung_chi', $machungchi);
			$re = $this->db->get('tbl_canbo_chungchi')->result_array();
			return $re;
		}
		public function get_wheren_cb($macb){
			$this->db->select('id_can_bo, ho_ten');
			$this->db->where_not_in('id_can_bo', $macb);
			$this->db->from('tbl_canbo');
			$re = $this->db->get()->result_array();
			return $re;
		}
	}
 ?>