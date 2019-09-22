<?php 
	class MNhanSu_ChucVu extends MY_Model
	{
		public function insertdk($ten_chuc_vu)
		{
			$this->db->where('ten_chuc_vu',$ten_chuc_vu);
			$this->db->select('tbl_chucvu.*');
			$this->db->from('tbl_chucvu');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
		public function getListchucvu(){
			$this->db->select('chucvu.*');
			$this->db->from('tbl_chucvu AS chucvu');
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function getchucvu($id_chuc_vu){
			$this->db->where('id_chuc_vu',$id_chuc_vu);
			return $this->db->get('tbl_chucvu')->row_array();
		}
		public function xchucvu($id_chuc_vu)
		{
			$this->db->where('id_chuc_vu',$id_chuc_vu);
			$this->db->select('tbl_canbo_chucvu.*');
			$this->db->from('tbl_canbo_chucvu');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
	}
 ?>