<?php 
	/**
	 * 
	 */
	class Mdats extends MY_Model
	{
		public function get_where_in1($_table_name,$_primary_key,$_array_id) 
		{
			$this->db->distinct();
			$this->db->select('id_deantuyensinh');
			$this->db->where_in($_primary_key, $_array_id);
			return $this->db->get($_table_name)->result_array();
		}
		
	}
 ?>