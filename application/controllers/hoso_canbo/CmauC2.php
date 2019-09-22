<?php 
	/**
	 * summary
	 */
	class CmauC2 extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('canbo/Mcanbo');
	    }
	    public function index(){

			header("Content-type: application/vnd.ms-word");
	        header("Pragma: no-cache");
	        header("Expires: 0");
            header("Content-Disposition: attachment;filename=Mau 2C-BNV-2008.doc");
      		$macb = $this->input->get('macb');
      		$data['dangcb']	 	 = $this->Mcanbo->get_where_row('tbl_dangcb','macb', $macb);
      		$data['canbo']	 	 = $this->Mcanbo->get_where_row('tbl_canbo','id_can_bo', $macb);
      		$data['doandang']	 = $this->Mcanbo->get_where_row('tbl_canbo_doandang','id_canbo', $macb);
      		$data['danhmuc']	 = $this->danhmuc();
      		$data['ngach']		 = $this->Mcanbo->get_where_row('tbl_ngach_canbo','id_can_bo', $macb);
      		$data['khenthuong']	 = $this->Mcanbo->get_where_row('tbl_canbo_khenthuong','macb', $macb);
      		$data['quatrinhct']	 = $this->Mcanbo->get_where(' tbl_canbo_qtct','id_canbo', $macb);
      		$data['chucdanh']	 = $this->Mcanbo->get_where_row('  tbl_canbo_chucdanh','id_can_bo', $macb);
      		$data['chucvu']	 	 = $this->Mcanbo->get_where_row('tbl_canbo_chucvu','id_can_bo', $macb);
            $this->parser->parse("mauword/VmauC2", $data);
            
      		

	    }
	
	    public function danhmuc(){
	    	$data['tbl_nganh']  			= $this->Mcanbo->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  		= $this->Mcanbo->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  			= $this->Mcanbo->get('tbl_dantoc');
	    	$data['tbl_quyen']  			= $this->Mcanbo->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  			= $this->Mcanbo->get(' tbl_taikhoan');
	    	$data['tbl_ngachgiangvien'] 	= $this->Mcanbo->get(' tbl_ngachgiangvien');
	    	$data['tbl_thidua_khenthuong']  = $this->Mcanbo->get('tbl_thidua_khenthuong');
	    	$data['tbl_donvi'] 				= $this->Mcanbo->get('tbl_donvi');
	    	$data['tbl_chucdanh'] 			= $this->Mcanbo->get('tbl_chucdanh');
	    	$data['tbl_chucvu'] 			= $this->Mcanbo->get('tbl_chucvu');
	    	$data['tbl_donvi'] 				= $this->Mcanbo->get('tbl_donvi');
	    	foreach ($data['tbl_donvi'] as $key => $value) {
	    		$data['tendonvi'][$value['id_don_vi']] = $value['ten_don_vi'];
	    	}
	    	foreach ($data['tbl_chucvu'] as $key => $value) {
	    		$data['tenchucvu'][$value['id_chuc_vu']] = $value['ten_chuc_vu'];
	    	}
	    	foreach ($data['tbl_chucdanh'] as $key => $value) {
	    		$data['tenchucdanh'][$value['id_chuc_danh']] = $value['chuc_danh'];
	    	}
	    	foreach ($data['tbl_donvi']as $key => $value) {
	    		$data['tendonvi'][$value['id_don_vi']] = $value['ten_don_vi'];
	    	}
	    	foreach ($data['tbl_thidua_khenthuong'] as $key => $value) {
	    		$data['tenkhen_thuong'][$value['id_thidua_khenthuong']] = $value;
	    	}
	    	foreach ($data['tbl_ngachgiangvien'] as $key => $value) {
	    		$data['tenngach'][$value['id_ngach_giang_vien']] = $value['ngach'];
	    	}
	    	foreach ($data['tbl_nganh'] as $key => $value) {
	    		$data['tennganh'][$value['id_nganh']] = $value['nganh'];
	    	}
	    	$nganh 						= $this->Mcanbo->get('tbl_canbo_nganh');
	    	foreach ($nganh as $key => $value) {
	    		$data['get_nganh'][$value['id_can_bo']] = $data['tennganh'][$value['id_nganh']];
	    	}
	    	foreach ($data['tbl_nhomnganh'] as $key => $value) {
	    		$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
	    	}
	    	foreach ($data['tbl_dantoc'] as $key => $value) {
	    		$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
	    	}
	    	$get_tecb = $this->Mcanbo->get('tbl_canbo');
	    	foreach($get_tecb as $key => $val){
	    		$data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
	    	} 
	    	return $data;
	    }

	}
 ?>