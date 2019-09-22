<?php 
	/**
	 * 
	 */
	class MDoan_dang_tochuc extends MY_Model
	{
		public function danhsach($tochuc,$bienche){
			$this->db->select('*');
			$this->db->from('tbl_canbo_doandang');
			$this->db->join('tbl_canbo','tbl_canbo_doandang.id_canbo = tbl_canbo.id_can_bo','inner');
			if(!empty($tochuc)){
				$this->db->like('tbl_canbo_doandang.tochuc',$tochuc);
			}
			if(!empty($bienche)){
				$this->db->like('tbl_canbo.bien_che',$bienche);
			}
			return $this->db->get()->result_array();
		}
	}
 ?>