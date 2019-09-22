<?php 
	/**
	 * summary
	 */
	class Ckhenthuong extends MY_Controller
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
	    	if($this->input->post('themkhenthuong')){
	    		$this->themkhenthuong();
	    	}
	    	$makhenthuong 		= $this->input->get('id');
	    	$canbo_khenthuong   = $this->Mcanbo->get_where('tbl_canbo_khenthuong', 'id_thidua_khenthuong', $makhenthuong);
	    	foreach ($canbo_khenthuong as $key => $value) {
	    		$arr[] = $value['macb'];
	    	}
		    $tt_khenthuong = [];
		    $canbo_khenthuong_where_not_in = [];
	    	if(!empty($arr)){
		    	$canbo_khenthuong_where_not_in = $this->Mcanbo->get_wheren_cb($arr);
	    	}
	    	if($this->input->post('capnhat')){
	    		$this->capnhat($makhenthuong);
	    	}
	    	switch ( $this->input->get('trangthai')) {
	    		case 1:
	    			$tt_khenthuong = $this->get_khenthuong($makhenthuong);
	    			break;
	    		case 2:
	    			$this->xoa_khenthuong($makhenthuong);
	    			break;
	    		default:
	    			# code...
	    			break;
	    	}
	    	
	    	$tbl_canbo_khenthuong = $this->Mcanbo->get('tbl_canbo_khenthuong');
	    	$tbl_thidua_khenthuong = $this->Mcanbo->get('tbl_thidua_khenthuong');
	    	$data['khenthuong'] = [];
	    	foreach ($tbl_thidua_khenthuong as $key => $value) {
	    		$data['khenthuong'][$value['id_thidua_khenthuong']] = $value;
    			$data['khenthuong'][$value['id_thidua_khenthuong']]['socb_khenthuong'] = count($this->Mcanbo->get_where('tbl_canbo_khenthuong', 'id_thidua_khenthuong', $value['id_thidua_khenthuong']) );
	    	}
	    	$temp = array(
	    			'template' =>  'danhmuc/Vkhenthuong',
    				'data'     => array(
    					'message'        			=> getMessages(),
    					'danhmuc'  					=> $this->danhmuc(),
    					'khenthuong'				=> $data['khenthuong'],
    					'tt_khenthuong' 			=> $tt_khenthuong,
    					'canbo_khenthuong'			=> $canbo_khenthuong,
    					'canbo_khenthuong_not_in'	=> $canbo_khenthuong_where_not_in,
    				),
	    	);
        	$this->load->view('layout/content', $temp);
	    }
	    public function xoa_khenthuong($makhenthuong){
	    	$delete = $this->Mcanbo->delete(' tbl_canbo_khenthuong', 'id_thidua_khenthuong', $makhenthuong);
	   		$delete = $this->Mcanbo->delete(' tbl_thidua_khenthuong', 'id_thidua_khenthuong', $makhenthuong);
	   		if($delete > 0){
	    		setMessages("success","Xóa khen thưởng thành công");
	    		return redirect('khenthuong?id='.$data['id_thidua_khenthuong'].'&trangthai=1');
	    	}else{
	    		setMessages("error","Xóa khen thưởng thất bại");
	    		return redirect('khenthuong?id='.$data['id_thidua_khenthuong'].'&trangthai=1');
	    	}
	    }
	    public function get_khenthuong($makhenthuong){
	    	$khenthuong = $this->Mcanbo->thongtin_khenthuong($makhenthuong);
	    	return $khenthuong;
	    }
	   public function capnhat($makhenthuong){
	   		$this->Mcanbo->delete(' tbl_canbo_khenthuong', 'id_thidua_khenthuong', $makhenthuong);
	   		$this->Mcanbo->delete(' tbl_thidua_khenthuong', 'id_thidua_khenthuong', $makhenthuong);
	   		$data 							= $this->input->post('data');
	    	$data['id_thidua_khenthuong']	= time();
	    	$hotencb = $this->input->post('hotencb');
	    	for ($i=0; $i < count($hotencb) ; $i++) { 
	    		$data1[] = array(
	    			'macb' 					=> $hotencb[$i],
	    			'id_thidua_khenthuong'  => $data['id_thidua_khenthuong'],
	    		);
	    	}
	    	$insert 						= $this->Mcanbo->insert('tbl_thidua_khenthuong',$data);
	    	$insert1 = $this->Mcanbo->insert_batch('tbl_canbo_khenthuong',$data1);
	    	
	    	if($insert > 0 && $insert1 > 0){
	    		setMessages("success","Cập nhật khen thưởng thành công");
	    		return redirect('khenthuong?id='.$data['id_thidua_khenthuong'].'&trangthai=1');
	    	}else{
	    		setMessages("error","Cập nhật khen thưởng thất bại");
	    		return redirect('khenthuong?id='.$data['id_thidua_khenthuong'].'&trangthai=1');
	    	}
	   }
	    public function themkhenthuong(){
	   		$data 							= $this->input->post('data');
	    	$data['id_thidua_khenthuong']	= time();
	    	$insert 						= $this->Mcanbo->insert('tbl_thidua_khenthuong',$data);
	    	$hotencb = $this->input->post('hotencb');
	    	for ($i=0; $i < count($hotencb) ; $i++) { 
	    		$data1[] = array(
	    			'macb' => $hotencb[$i],
	    			'id_thidua_khenthuong' => $data['id_thidua_khenthuong'],
	    		);
	    	}
	    	
	    	$insert1 = $this->Mcanbo->insert_batch('tbl_canbo_khenthuong',$data1);
	    	
	    	if($insert > 0 && $insert1 > 0){
	    		setMessages("success","Thêm khen thưởng thành công");
	    		return redirect('khenthuong');
	    	}else{
	    		setMessages("error","Thêm khen thưởng thất bại");
	    		return redirect('khenthuong');
	    	}
	    }


	    public function danhsachkhenthuong(){
	    	$result = array();
	    	$dulieu = "";
	    	if($this->input->post('timkiem')){
	    		$result = $this->timkiem();
	    	}
	    	$khenthuong = $this->Mcanbo->get_khenthuong();
	    	if(!empty($result)){
	    		$khenthuong = $result['result'];
	    		$dulieu     = $result['dulieu_timkiem'];
	    	}
	    	$temp = array(
	    		'template' =>  'danhmuc/Vdanhsachkhenthuong',
	    		'data'     => array(
	    			'message'        			=> getMessages(),
	    			'danhmuc'  					=> $this->danhmuc(),
	    			'khenthuong'  				=> $khenthuong,
	    			'dulieu_tk'					=> $dulieu,
	    		),
	    	);
	    	$this->load->view('layout/content', $temp);
	    }
	      public function timkiem(){
	    	$data 		= $this->input->post('data');
	    	$timkiem 	= $this->Mcanbo->timkiem_canbo($data);
	    	$data1 = array(
	    		'dulieu_timkiem' => $data,
	    		'result'		 => $timkiem,
	    	);
	    	return $data1;
	    }


	    public function danhmuc(){
	    	$data['tbl_nganh']  		= $this->Mcanbo->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  	= $this->Mcanbo->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  		= $this->Mcanbo->get('tbl_dantoc');
	    	$data['tbl_dantoc']  		= $this->Mcanbo->get('tbl_dantoc');
	    	$data['tbl_quyen']  		= $this->Mcanbo->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  		= $this->Mcanbo->get(' tbl_taikhoan');
	    	$data['canbo']				= $this->Mcanbo->get_canbo();
	    	$data['tbl_congtac']		= $this->Mcanbo->get(' tbl_congtac');
	    	$data['tbl_nhom_khenthuong']= $this->Mcanbo->get(' tbl_nhom_khenthuong');
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
	    		$data['ngaysinh'][$val['id_can_bo']] = $val['ngay_sinh'];
	    	} 
	    	$tbl_congtac = $this->Mcanbo->get('tbl_congtac');
	    	foreach($tbl_congtac as $key => $val){
	    		$data['tenct'][$val['id_cong_tac']] = $val['cong_tac'];
	    	} 
	    	$tbl_nhom_khenthuong = $this->Mcanbo->get('tbl_nhom_khenthuong');
	    	foreach($tbl_nhom_khenthuong as $key => $val){
	    		$data['tennhomkhenthuong'][$val['id']] = $val['tieudekhenthuong'].'('. $val['nambd'].'-'. $val['namkt'].')';
	    	}
	    	return $data;
	    }
	}
 ?>