<?php 
	class Mthongtinnghenghiep extends CI_Model
	{
		public function insert($data,$time){
			$this->db->insert('tbl_chucdanh',$data);
			$this->db->insert('tbl_canbo_chucdanh',$time);
			return $this->db->affected_rows();
		}
		public function getListchucdanh(){
			$this->db->select('chucdanh.*,canbo_chucdanh.tg_batdau,canbo_chucdanh.tg_ketthuc,canbo.ho_ten');
			$this->db->from('tbl_chucdanh AS chucdanh');
			$this->db->join('tbl_canbo_chucdanh AS canbo_chucdanh','chucdanh.id_chuc_danh=canbo_chucdanh.id_chuc_danh','inner');
			$this->db->join('tbl_canbo AS canbo','canbo.id_can_bo=canbo_chucdanh.id_can_bo','inner');
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function getlistcanbo()
		{
			return $this->db->get('tbl_canbo')->result_array();
		}
		public function delete($id_chuc_danh){
			$this->db->where('id_chuc_danh', $id_chuc_danh);
			$this->db->delete('tbl_canbo_chucdanh');
			$this->db->where('id_chuc_danh', $id_chuc_danh);
			$this->db->delete('tbl_chucdanh');
			return $this->db->affected_rows();
		}
		public function getchucdanh($id_chuc_danh){
			$this->db->where('id_chuc_danh',$id_chuc_danh);
			return $this->db->get('tbl_chucdanh')->row_array();
		}
		public function getcanbo($id_can_bo){
			$this->db->where('id_can_bo',$id_can_bo);
			return $this->db->get('tbl_canbo')->row_array();
		}
		public function getcanbo_chucdanh($id_chuc_danh){
			$this->db->where('id_chuc_danh',$id_chuc_danh);
			return $this->db->get('tbl_canbo_chucdanh')->row_array();
		}

		public function update1($id_chuc_danh, $data)
		{
			$this->db->where('id_chuc_danh', $id_chuc_danh);
			$this->db->update('tbl_chucdanh', $data);
			return $this->db->affected_rows();
		}
		public function update2($id_chuc_danh, $time)
		{
			$this->db->where('id_chuc_danh', $id_chuc_danh);
			$this->db->update('tbl_canbo_chucdanh', $time);
			return $this->db->affected_rows();
		}
	}
 ?>