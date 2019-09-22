<?php 
	class MNhanSu_HopDong extends MY_Model
	{
		public function insertdk($hop_dong)
		{
			$this->db->where('hop_dong',$hop_dong);
			$this->db->select('tbl_hopdong.*');
			$this->db->from('tbl_hopdong');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
		public function getListhopdong(){
			$this->db->select('hopdong.*,loaihopdong.loai_hop_dong');
			$this->db->from('tbl_hopdong AS hopdong');
			$this->db->join('tbl_loaihopdong AS loaihopdong','hopdong.id_loai_hop_dong=loaihopdong.id_loai_hop_dong','inner');
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function getListloaiHopDong(){
			return $this->db->get('tbl_loaihopdong')->result_array();
		}
		public function gethopdong($id_hop_dong){
			$this->db->where('id_hop_dong',$id_hop_dong);
			return $this->db->get('tbl_hopdong')->row_array();
		}

		public function getloaihopdong($id_loai_hop_dong){
			$this->db->where('id_loai_hop_dong',$id_loai_hop_dong);
			return $this->db->get('tbl_loaihopdong')->row_array();
		}
		public function xhopdong($id_hop_dong)
		{
			$this->db->where('id_hop_dong',$id_hop_dong);
			$this->db->select('tbl_canbo_hopdong.*');
			$this->db->from('tbl_canbo_hopdong');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
	}
 ?>