<?php 
	class MNhanSu_DonVi extends My_Model
	{
		public function insertdk($ten_don_vi)
		{
			$this->db->where('ten_don_vi',$ten_don_vi);
			$this->db->select('tbl_donvi.*');
			$this->db->from('tbl_donvi');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
		public function getListdonvi(){
			$this->db->select('donvi.*');
			$this->db->from('tbl_donvi AS donvi');
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function getdonvi($id_don_vi){
			$this->db->where('id_don_vi',$id_don_vi);
			return $this->db->get('tbl_donvi')->row_array();
		}
		public function xdonvi($id_don_vi)
		{
			$this->db->where('id_don_vi',$id_don_vi);
			$this->db->select('tbl_canbo_donvi.*');
			$this->db->from('tbl_canbo_donvi');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
	}
 ?>