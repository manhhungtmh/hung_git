<?php 
	/**
	 * summary
	 */
	class Ccanbo extends MY_Controller
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
	    	$macb       = "";
	    	$macb 		= $this->input->get('macb');
	    	$trangthai  = $this->input->get('trangthai');
	    	$dangky     = $this->input->post('dangky');
	    	$getcb      = array();
	    	if(!isset($trangthai) || isset($dangky)){
	    		$trangthai = $dangky;
	    	}
	    	switch ($trangthai) {
	    		case '1':
	    			$getcb = $this->getcb($macb);
	    			break;
	    		case '2':
	    			$this->xoacb($macb);
	    			break;
	    		case '3':
	    			$this->dangky($trangthai, $macb);
	    			break;
	    		case '4':
	    			$this->dangky($trangthai, $macb);
	    			break;
	    		
	    	}
	    	
	    	$temp = array(
	    			'template' =>  'canbo/Vcanbo',
    				'data'     => array(
    					'message'        => getMessages(),
    					'danhmuc'  		=> $this->danhmuc(),
    					'get_canbo'     => $getcb,
    				),
	    	);
        	$this->load->view('layout/content', $temp);
	    }
	    public function getcb($macb){
	    	$canbo = $this->Mcanbo->get_where('tbl_taikhoan','macb', $macb);
	    	return $canbo[0];
	    }
	    public function xoacb($macb){
	    	$session = $this->session->userdata('user');
	    	if($session['macb'] == $macb){
	    		setMessages('error', 'Không thể xóa cán bộ khi cán bộ này đang đăng nhập!', 'Thông báo');
	    		redirect('canbo');
	    	}
	    	$delete = $this->Mcanbo->delete('tbl_taikhoan','macb',$macb);
	    	if($delete > 0){
	    		setMessages('success', 'Xóa thành công', 'Thông báo');
	    		redirect('canbo');
	    	}else{
	    		setMessages('error', 'Xóa thất bại', 'Thông báo');
	    		redirect('canbo');
	    	}
	    }
	    public function dangky($trangthai, $macb){
	    	$data 				= $this->input->post('data');
	    	$check 				= $this->Mcanbo->get_where('tbl_taikhoan','macb',$data['macb']);
	    	if(!empty($check)){
	    		setMessages('error', 'Mã cán bộ không được trùng!', 'Thông báo');
	    		redirect('canbo');
	    	}
	    	if($trangthai == 4){
	    		if(empty($data['matkhau'])){
	    			unset($data['matkhau']);
	    		}else{
	    			$data['matkhau']    = sha1($data['matkhau']);
	    		}
	    		$row 				= $this->Mcanbo->update('tbl_taikhoan','macb', $macb, $data);
	    	}else{
	    		$data['matkhau']    = sha1($data['matkhau']);
	    		$row 				= $this->Mcanbo->insert('tbl_taikhoan',$data);
	    	}
	    	if($row > 0){
	    		setMessages('success', 'Thêm thành công', 'Thông báo');
	    		redirect('canbo');
	    	}else{
	    		setMessages('error', 'Thêm thất bại', 'Thông báo');
	    		redirect('canbo');
	    	}
	    }
	    public function danhmuc(){
	    	$data['tbl_nganh']  		= $this->Mcanbo->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  	= $this->Mcanbo->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  		= $this->Mcanbo->get('tbl_dantoc');
	    	$data['tbl_dantoc']  		= $this->Mcanbo->get('tbl_dantoc');
	    	$data['tbl_quyen']  		= $this->Mcanbo->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  		= $this->Mcanbo->get(' tbl_taikhoan');
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