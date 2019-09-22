<?php 
	/**
	 * 
	 */
	class Mlogin extends MY_Model
	{
		
     	public function checkPermission($maquyen, $segment){
       		if($maquyen == 1){
       			return true;
       		}else{
       			$this->db->where('tbl_chucnang.route', $segment);
       			$this->db->where('tbl_chucnang.maquyen', $maquyen);
       			$this->db->from('tbl_chucnang');
       			$result =  $this->db->get()->num_rows();
       			return $result > 0 ? true : false;
       		}
   	 	}
	
	}
 ?>