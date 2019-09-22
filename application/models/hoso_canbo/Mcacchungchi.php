<?php
	class Mcacchungchi extends MY_Model{
		public function getListchungchi($macb){
			$this->db->select('chungchi.*,canbo_chungchi.thoi_gian,canbo_chungchi.noi_cap');
			$this->db->from('tbl_chungchi AS chungchi');
			$this->db->join('tbl_canbo_chungchi AS canbo_chungchi','chungchi.id_chung_chi=canbo_chungchi.id_chung_chi','inner');
			$this->db->join('tbl_canbo AS canbo','canbo.id_can_bo=canbo_chungchi.id_can_bo','inner');
			$this->db->where('canbo.id_can_bo',$macb);
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function updatecc($macb,$id_chung_chi,$data)
		{	
			$this->db->where('id_can_bo',$macb);
			$this->db->where('id_chung_chi',$id_chung_chi);
			$this->db->update('tbl_canbo_chungchi',$data);
			return $this->db->affected_rows();
		}
		public function insertdk($id_chung_chi,$macb)
		{
			$this->db->where('id_chung_chi',$id_chung_chi);
			$this->db->where('id_can_bo',$macb);
			$this->db->select('tbl_canbo_chungchi.*');
			$this->db->from('tbl_canbo_chungchi');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
		public function getchungchi($id_chung_chi){
			$this->db->where('id_chung_chi',$id_chung_chi);
			return $this->db->get('tbl_canbo_chungchi')->row_array();
		}

	}

?>