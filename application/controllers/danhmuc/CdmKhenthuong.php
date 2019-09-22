<?php 
	/**
	 * summary
	 */
	class CdmKhenthuong extends MY_Controller
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
	    	$makhenthuong = $this->input->get('id');
	    	if($this->input->post('themkhenthuong')){
	    		$this->themkhenthuong($this->input->post('themkhenthuong'), $makhenthuong);
	    	}
	    	switch ($this->input->get('trangthai')) {
	    		case 'xoakhenthuong':
	    			$this->xoakhenthuong($makhenthuong);
	    			break;
	    	}
	    	$temp = array(
    			'template' =>  'danhmuc/VdmKhenthuong',
				'data'     => array(
					'message'        => getMessages(),
					'danhmuc'  		 => $this->danhmuc(),
					'getkhenThuong'  => $this->Mcanbo->get('tbl_nhom_khenthuong'),
					'get_suakt'		 => $this->Mcanbo->get_where('tbl_nhom_khenthuong','id', $makhenthuong),
				),
	    	);
        	$this->load->view('layout/content', $temp);
	    }
	    public function themkhenthuong($trangthai, $id){
	    	$data 						= $this->input->post('data');
	    	$data['tieudekhenthuong']   = trim($data['tieudekhenthuong']);
	    	$check = $this->Mcanbo->get_many_where('tbl_nhom_khenthuong',array('tieudekhenthuong' => $data['tieudekhenthuong'], 'nambd' => $data['nambd'], 'namkt' => $data['namkt']));
	    	if(count($check) > 0){
	    		setMessages('error', 'Loại tiêu đề khen thưởng này đã trùng trong danh sách khen thưởng', 'Thông báo');
		    	redirect('dmkhenthuong');
	    		
	    	}else{
	    		if($trangthai == "themkhenthuong"){
		    		$row = $this->Mcanbo->insert('tbl_nhom_khenthuong', $data);
		    		if($row > 0){
			    		setMessages('success', 'Thêm tiêu đề khen thưởng thành công', 'Thông báo');
			    		redirect('dmkhenthuong');
			    	}else{
			    		setMessages('error', 'Thêm tiêu đề khen thưởng thất bại', 'Thông báo');
			    		redirect('dmkhenthuong');
			    	}
	    		}else{
	    			$row = $this->Mcanbo->update('tbl_nhom_khenthuong','id', $id, $data);
		    		if($row > 0){
			    		setMessages('success', 'Cập nhật thành công', 'Thông báo');
			    		redirect('dmkhenthuong');
			    	}else{
			    		setMessages('error', 'Cập nhật thất bại', 'Thông báo');
			    		redirect('dmkhenthuong');
			    	}
	    		}
	    	}
	    }

	    public function get_sua($id){
	    	$getkhenThuong = $this->Mcanbo->get_where('tbl_nhom_khenthuong','id', $id);
	    }

	    public function xoakhenthuong($id){
	    	$check = $this->Mcanbo->get_where(' tbl_thidua_khenthuong', 'id_nhomkhenthuong', $id);
	    	if(empty($check)){
		    	$row = $this->Mcanbo->delete('tbl_nhom_khenthuong', 'id', $id);
		    	if($row > 0){
		    		setMessages('success', 'Xóa thành công', 'Thông báo');
		    		redirect('dmkhenthuong');
		    	}else{
		    		setMessages('error', 'Xóa thất bại', 'Thông báo');
		    		redirect('dmkhenthuong');
		    	}
	    	}else{
	    		setMessages('error', 'Không thể xóa loại khen thưởng này khi đã cấp cho cán bộ!', 'Thông báo');
		    	redirect('dmkhenthuong');
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