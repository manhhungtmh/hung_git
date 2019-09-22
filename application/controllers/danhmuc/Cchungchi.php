<?php 
	/**
	 * summary
	 */
	class Cchungchi extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('danhmuc/Mchungchi');
	    }
	    public function index(){
	    	$timkiem = [];
	    	if($this->input->post('themchungchi')){
	    		$this->themchungchi();
	    	}
	    	$machungchi = $this->input->get('id');
	    	if($this->input->get('trangthai') == 'sua'){
	    		$data = $this->get_Chungchi($machungchi);
	    		$timkiem = array(
	    			're' => $data['re'],
	    			'cb' => $data['get_where_inCB'],
	    		);
	    	}
	    	if($this->input->get('trangthai') == 'xoa'){
	    		$this->xoaCHungchi($machungchi);
	    	}
	    	if($this->input->post('capnhat')){
	    		$macc = $this->input->post('capnhat');
	    		$this->capnhat($macc);
	    	}

	    	
	    	$tbl_canbo_chungchi = $this->Mchungchi->get('tbl_canbo_chungchi');
	    	$tbl_chungchi 		= $this->Mchungchi->get('tbl_chungchi');
	    	foreach ($tbl_chungchi as $key => $value) {
	    		$chungchi[$value['id_chung_chi']] = $value;
	    	}
	    	foreach ($tbl_canbo_chungchi as $key => $value) {
	    		$chungchi[$value['id_chung_chi']]['cacchungchi'] = $value;
	    		$chungchi[$value['id_chung_chi']]['demcb']       = count($this->Mchungchi->get_where('tbl_canbo_chungchi', 'id_chung_chi', $value['id_chung_chi']));
	    	}
	    	$temp = array(
    			'template' =>  'danhmuc/Vchungchi',
				'data'     => array(
					'message'        	=> getMessages(),
					'danhmuc'  		 	=> $this->danhmuc(),
					'timkiem'		 	=> $timkiem,
					'chungchi'			=> $chungchi,
				),
	    	);
        	$this->load->view('layout/content', $temp);
	    }

	    public function xoaCHungchi($machungchi){
	    	$delete = $this->Mchungchi->delete(' tbl_canbo_chungchi', 'id_chung_chi', $machungchi);
	    	if($delete > 0 ){
	    		setMessages("success","Xóa chứng chỉ cán bộ thành công", 'Thông báo');
	    		return redirect('dmchungchi?id='.$macc.'&trangthai=sua');
	    	}else{
	    		setMessages("error","Xóa chứng chỉ cán bộ thất bại", 'Thông báo');
	    		return redirect('dmchungchi.?id='.$macc.'&trangthai=sua');
	    	}
	    }
	    public function capnhat($macc){
	    	$this->Mchungchi->delete(' tbl_canbo_chungchi', 'id_chung_chi', $macc);
	    	$data 		= $this->input->post('data');
	    	$macb 		= $this->input->post('hotencb');
	    	for ($i=0; $i < count($macb) ; $i++) { 
	    		$data1[] = array(
	    			'id_can_bo' 	=> $macb[$i],
	    			'id_chung_chi'	=> $data['id_chung_chi'], 
	    			'thoi_gian'		=> $data['thoi_gian'],
	    			'noi_cap'		=> $data['noi_cap'],
	    		);
	    	}
	    	$check = $this->Mchungchi->check_cb_chungchi($macb,$data['id_chung_chi']);
	    	if(count($check) > 0){
	    		setMessages("error","Cán bộ này đã có chứng chỉ này xin vui lòng xem lại!");
	    		return redirect('dmchungchi');
	    	}
	    	$insert = $this->Mchungchi->insert_batch('tbl_canbo_chungchi',$data1);
	    	
	    	if($insert > 0 ){
	    		setMessages("success","Cập nhật thành công cho cán bộ");
	    		return redirect('dmchungchi?id='.$macc.'&trangthai=sua');
	    	}else{
	    		setMessages("error","Cập nhật chứng chỉ thất bại");
	    		return redirect('dmchungchi.?id='.$macc.'&trangthai=sua');
	    	}
	    }

	    public function get_Chungchi($macc){
	    	$macb = [];
	    	$re = $this->Mchungchi->get_where('tbl_canbo_chungchi', 'id_chung_chi', $macc);
	    	foreach ($re as $key => $value) {
	    		$macb[] = $value['id_can_bo']; 
	    	}
	    	if(count($macb) > 0){
	    		$get_where_inCB= $this->Mchungchi->get_wheren_cb($macb);
	    	}else{
	    		$get_where_inCB = [];
	    	}
	    	$data = array(
	    		're' 				=> $re,
	    		'get_where_inCB' 	=> $get_where_inCB,
	    	);
	    	return $data;
	    }

	    public function themchungchi(){
	    	$data 		= $this->input->post('data');
	    	$macb 		= $this->input->post('hotencb');
	    	for ($i=0; $i < count($macb) ; $i++) { 
	    		$data1[] = array(
	    			'id_can_bo' 	=> $macb[$i],
	    			'id_chung_chi'	=> $data['id_chung_chi'], 
	    			'thoi_gian'		=> $data['thoi_gian'],
	    			'noi_cap'		=> $data['noi_cap'],
	    		);
	    	}
	    	$check = $this->Mchungchi->check_cb_chungchi($macb,$data['id_chung_chi']);
	    	if(count($check) > 0){
	    		setMessages("error","Cán bộ này đã có chứng chỉ này xin vui lòng xem lại!");
	    		return redirect('dmchungchi');
	    	}
	    	$insert = $this->Mchungchi->insert_batch('tbl_canbo_chungchi',$data1);
	    	
	    	if($insert > 0 ){
	    		setMessages("success","Thêm chứng chỉ thành công cho cán bộ");
	    		return redirect('dmchungchi');
	    	}else{
	    		setMessages("error","Thêm chứng chỉ thất bại");
	    		return redirect('dmchungchi');
	    	}
	    }

	    public function danhmuc(){
	    	$data['tbl_nganh']  		= $this->Mchungchi->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  	= $this->Mchungchi->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  		= $this->Mchungchi->get('tbl_dantoc');
	    	$data['tbl_dantoc']  		= $this->Mchungchi->get('tbl_dantoc');
	    	$data['tbl_quyen']  		= $this->Mchungchi->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  		= $this->Mchungchi->get(' tbl_taikhoan');
	    	$data['tbl_chungchi']  		= $this->Mchungchi->get(' tbl_chungchi');
	    	$data['canbo']				= $this->Mchungchi->get_canbo();
	    	foreach ($data['tbl_nganh'] as $key => $value) {
	    		$data['tennganh'][$value['id_nganh']] = $value['nganh'];
	    	}
	    	$nganh 						= $this->Mchungchi->get('tbl_canbo_nganh');
	    	foreach ($nganh as $key => $value) {
	    		$data['get_nganh'][$value['id_can_bo']] = $data['tennganh'][$value['id_nganh']];
	    	}
	    	foreach ($data['tbl_nhomnganh'] as $key => $value) {
	    		$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
	    	}
	    	foreach ($data['tbl_dantoc'] as $key => $value) {
	    		$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
	    	}
	    	$get_tecb = $this->Mchungchi->get('tbl_canbo');
	    	foreach($get_tecb as $key => $val){
	    		$data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
	    		$data['ngaysinh'][$val['id_can_bo']] = $val['ngay_sinh'];
	    	} 
	    	return $data;
	    }
	}
 ?>