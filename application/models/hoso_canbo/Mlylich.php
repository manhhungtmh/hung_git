<?php
	class Mlylich extends MY_Model{

		public function thongtinchitiet(){
			$this->db->from("tbl_canbo");
			
			$this->db->select("tbl_canbo.*,tbl_tongiao.id_ton_giao,tbl_dantoc.id_dan_toc,tbl_hocham.id_hoc_ham,tbl_hocvi.id_hoc_vi,tbl_donvi.id_don_vi,tbl_chucvu.id_chuc_vu");

			$this->db->join("tbl_tongiao","tbl_tongiao.id_ton_giao=tbl_canbo.id_ton_giao","inner");
			$this->db->join("tbl_dantoc","tbl_dantoc.id_dan_toc=tbl_canbo.id_dan_toc","inner");

			$this->db->join("tbl_canbo_hocham","tbl_canbo_hocham.id_can_bo=tbl_canbo.id_can_bo","inner");
			$this->db->join("tbl_hocham","tbl_hocham.id_hoc_ham=tbl_canbo_hocham.id_hoc_ham","inner");

			$this->db->join("tbl_canbo_hocvi","tbl_canbo_hocvi.id_can_bo=tbl_canbo.id_can_bo","inner");
			$this->db->join("tbl_hocvi","tbl_hocvi.id_hoc_vi=tbl_canbo_hocvi.id_hoc_vi","inner");

			$this->db->join("tbl_canbo_chucvu","tbl_canbo_chucvu.id_can_bo=tbl_canbo.id_can_bo","inner");
			$this->db->join("tbl_chucvu","tbl_chucvu.id_chuc_vu=tbl_canbo_chucvu.id_chuc_vu","inner");

			$this->db->join("tbl_canbo_donvi","tbl_canbo_donvi.id_can_bo=tbl_canbo.id_can_bo","inner");
			$this->db->join("tbl_donvi","tbl_donvi.id_don_vi=tbl_canbo_donvi.id_don_vi","inner");
			return $this->db->get()->result_array();
		}

	}

?>