<?php 
	class MNhanSu_Ngach extends MY_Model
	{
		public function insertdk($ngach)
		{
			$this->db->where('ngach',$ngach);
			$this->db->select('tbl_ngachgiangvien.*');
			$this->db->from('tbl_ngachgiangvien');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
		public function getListngach(){
			$this->db->select('ngach.*');
			$this->db->from('tbl_ngachgiangvien AS ngach');
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function getngach($id_ngach_giang_vien){
			$this->db->where('id_ngach_giang_vien',$id_ngach_giang_vien);
			return $this->db->get('tbl_ngachgiangvien')->row_array();
		}
		public function xngach($id_ngach_giang_vien)
		{
			$this->db->where('id_ngach_giang_vien',$id_ngach_giang_vien);
			$this->db->select('tbl_ngach_canbo.*');
			$this->db->from('tbl_ngach_canbo');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
	}
 ?>