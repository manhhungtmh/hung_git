<?php 
	/**
	 * 
	 */
	class MQuy_hoach extends MY_Model
	{
		public function danhsach(){
			$this->db->select('*');
			$this->db->from('tbl_canbo_quyhoach');
			$this->db->join('tbl_canbo','tbl_canbo_quyhoach.id_canbo = tbl_canbo.id_can_bo','inner');
			return $this->db->get()->result_array();
		}
		public function timkiem($canbo,$nambatdau,$namketthuc){
			if(!empty($canbo)){
				$this->db->like('tbl_canbo.ho_ten',$canbo);
			}
			if(!empty($nambatdau)){
				$this->db->like('tbl_canbo_quyhoach.thoigian_batdau',$nambatdau);
			}
			if(!empty($namketthuc)){
				$this->db->like('tbl_canbo_quyhoach.thoigian_ketthuc',$namketthuc);
			}
			$this->db->from('tbl_canbo_quyhoach');
			$this->db->join('tbl_canbo','tbl_canbo_quyhoach.id_canbo = tbl_canbo.id_can_bo','inner');
			return $this->db->get()->result_array();
		}
		public function get_where_in1($_table_name,$_primary_key,$_array_id) 
		{
			$this->db->distinct();
			$this->db->select('id_quyhoach');
			$this->db->where_in($_primary_key, $_array_id);
			return $this->db->get($_table_name)->result_array();
		}
		public function get_namtn_chuyenmondaotao(){
			$this->db->order_by('ghichu','ASC');
			return $this->db->get('tbl_namtn_chuyenmondaotao')->result_array();
		}
		public function get_cb_khenthuong($macb){
			$this->db->where('macb', $macb);
			$this->db->from('tbl_canbo_khenthuong');
			$this->db->join('tbl_thidua_khenthuong','tbl_thidua_khenthuong.id_thidua_khenthuong = tbl_canbo_khenthuong.id_thidua_khenthuong','LEFT');
			$this->db->join('tbl_canbo','tbl_canbo.id_can_bo = tbl_canbo_khenthuong.macb','LEFT');
			$re = $this->db->get()->result_array();
			return $re;
		}
		public function timkiem_dscb($tencb, $nganh){
			$this->db->from('tbl_canbo');
			$this->db->join('tbl_canbo_nganh','tbl_canbo_nganh.id_can_bo = tbl_canbo.id_can_bo','LEFT');
			if($tencb != ''){
				$this->db->like('tbl_canbo.ho_ten', $tencb);
			}
			if($nganh != ''){
				$this->db->where('tbl_canbo_nganh.id_nganh', $nganh);
			}
			$re = $this->db->get()->result_array();
			return $re;
		}
	}
 ?>