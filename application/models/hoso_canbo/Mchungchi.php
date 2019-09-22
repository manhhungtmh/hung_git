<?php 
	class Mchungchi extends My_Model
	{
		public function insertdk($chung_chi)
		{
			$this->db->where('chung_chi',$chung_chi);
			$this->db->select('tbl_chungchi.*');
			$this->db->from('tbl_chungchi');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
		public function getListchungchi(){
			$this->db->select('chungchi.*');
			$this->db->from('tbl_chungchi AS chungchi');
			$result=$this->db->get()->result_array();
			return $result;
		}
		public function getchungchi($id_chung_chi){
			$this->db->where('id_chung_chi',$id_chung_chi);
			return $this->db->get('tbl_chungchi')->row_array();
		}
		public function xoachungchi($id_chung_chi)
		{
			$this->db->where('id_chung_chi',$id_chung_chi);
			$this->db->select('tbl_canbo_chungchi.*');
			$this->db->from('tbl_canbo_chungchi');
			$data= $this->db->get()->row_array();
			return (!empty($data))?true:false;
		}
	}
 ?>