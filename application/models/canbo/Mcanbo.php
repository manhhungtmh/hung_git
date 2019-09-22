<?php
	class Mcanbo extends MY_Model{

		public function get_Nganh(){
			$this->db->from('tbl_canbo');
			$this->db->join('tbl_canbo_nganh','tbl_canbo.id_can_bo = tbl_canbo_nganh.id_can_bo','inner');
			$this->db->join('tbl_nganh','tbl_canbo_nganh.id_nganh = tbl_nganh.id_nganh','inner');
			$this->db->select("tbl_canbo.id_can_bo, tbl_canbo.ho_ten, tbl_nganh.nganh");
			return $this->db->get()->result_array();
		}
		public function get_canbo(){
			$this->db->select('id_can_bo, ho_ten, ngay_sinh');
			return $this->db->get('tbl_canbo')->result_array();
		}
		public function get_khenthuong(){
			$this->db->from('tbl_canbo_khenthuong');
			$this->db->join('tbl_thidua_khenthuong','tbl_thidua_khenthuong.id_thidua_khenthuong = tbl_canbo_khenthuong.id_thidua_khenthuong','LEFT');
			return $this->db->get()->result_array();
		}
		public function timkiem_canbo($data){
			$this->db->from('tbl_canbo_khenthuong');
			$this->db->join('tbl_thidua_khenthuong','tbl_thidua_khenthuong.id_thidua_khenthuong = tbl_canbo_khenthuong.id_thidua_khenthuong','LEFT');
			$this->db->join('tbl_canbo','tbl_canbo.id_can_bo = tbl_canbo_khenthuong.macb','LEFT');
			$this->db->join('tbl_nhom_khenthuong','tbl_nhom_khenthuong.id = tbl_thidua_khenthuong.id_nhomkhenthuong','LEFT');
			if($data['tencb'] != ''){
				$this->db->like('tbl_canbo.ho_ten', $data['tencb']);
			}
			// $re = $this->db->get()->result_array();
			if(!empty(trim($data['thoigian']))){
				$this->db->like('tbl_thidua_khenthuong.thoi_gian', $data['thoigian']);
			}
			if(!empty(trim($data['soqd']))){
				$this->db->like('tbl_thidua_khenthuong.so_quyet_dinh', $data['soqd']);
			}
			if($data['nhomkhenthuong'] != ''){
				$this->db->like('tbl_thidua_khenthuong.id_nhomkhenthuong', $data['nhomkhenthuong']);
			}

			// $re = $this->db->get()->result_array();
			// pr($this->db->last_query());
			$re = $this->db->get()->result_array();
			return $re;
		}

		public function thongtin_khenthuong($makhenthuong){
			$this->db->where('tbl_thidua_khenthuong.id_thidua_khenthuong', $makhenthuong);
			$this->db->from('tbl_canbo_khenthuong');
			$this->db->join('tbl_thidua_khenthuong','tbl_thidua_khenthuong.id_thidua_khenthuong = tbl_canbo_khenthuong.id_thidua_khenthuong','LEFT');
			// $this->db->join('tbl_canbo','tbl_canbo.id_can_bo = tbl_canbo_khenthuong.macb','LEFT');
			$re = $this->db->get()->row_array();
			return $re;
		}

		public function get_wheren_cb($macb){
			$this->db->where_not_in('id_can_bo', $macb);
			$this->db->from('tbl_canbo');
			$re = $this->db->get()->result_array();
			return $re;
		}
	}

?>