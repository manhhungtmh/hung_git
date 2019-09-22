<?php 
	/**
	 * summary
	 */
	class Cdats extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('danhmuc/Mdats');
	    }
	    public function index(){
	    	$deantuyensinh = $this->Mdats->get('tbl_deantuyensinh');
	    	if($this->input->post('themdeantuyensinh')){
				$this->themdeantuyensinh();
			}
			if($this->input->post('capnhap_deantuyensinh')){
				$this->capnhap_deantuyensinh();
			}
			if($this->input->post('xoa_deantuyensinh')){
				$this->xoa_deantuyensinh();
			}
			$id_deantuyensinh = $this->Mdats->select_where('tbl_deantuyensinh','id_deantuyensinh',null,null);
			$arr_id =[];
			foreach ($id_deantuyensinh as $key => $value) {
				$arr_id[] = $value['id_deantuyensinh'];
			}
			$deantuyensinh_in = $this->Mdats->get_where_in1('tbl_canbo_dats','id_deantuyensinh',$arr_id);
			$arrdeantuyensinh= [];
			foreach ($deantuyensinh_in as $key => $value) {
				$arrdeantuyensinh[] = $value['id_deantuyensinh'];
			}
	    	$temp = array(
	    			'template' =>  'danhmuc/Vdats',
    				'data'     => array(
    					'arrdeantuyensinh' 	=> $arrdeantuyensinh,
    					'deantuyensinh'		=> $deantuyensinh,
    					'message'       	=> getMessages(),
    					'danhmuc'  			=> $this->danhmuc(),
    				),
	    	);
        	$this->load->view('layout/content', $temp);
	    }
	   
	   public function themdeantuyensinh(){
			$data['ten_deantuyensinh'] 	= $this->input->post('ten_deantuyensinh');
			$data['nam_deantuyensinh'] 	= $this->input->post('nam_deantuyensinh');
			$data['he_deantuyensinh'] 	= $this->input->post('he_deantuyensinh');
			$check = $this->Mdats->insert('tbl_deantuyensinh',$data);
			if($check > 0) {
				setMessages('success','Thêm thành công');
				return redirect('dats');
			}
		}
		public function capnhap_deantuyensinh(){
			$id = $this->input->post('capnhap_deantuyensinh');
			$data['ten_deantuyensinh'] = $this->input->post('ten_deantuyensinh');
			$data['nam_deantuyensinh'] 	= $this->input->post('nam_deantuyensinh');
			$data['he_deantuyensinh'] 	= $this->input->post('he_deantuyensinh');
			$check = $this->Mdats->update('tbl_deantuyensinh','id_deantuyensinh',$id,$data);
			if($check > 0) {
				setMessages('success','Sửa thành công');
				return redirect('dats');
			}
		}
		public function xoa_deantuyensinh(){
			$id = $this->input->post('xoa_deantuyensinh');
			$check = $this->Mdats->delete('tbl_deantuyensinh','id_deantuyensinh',$id);
			if($check > 0) {
				setMessages('success','Xóa thành công');
				return redirect('dats');
			}
		}
	   
	    public function danhmuc(){
	    	$data['tbl_nganh']  		= $this->Mdats->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  	= $this->Mdats->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  		= $this->Mdats->get('tbl_dantoc');
	    	$data['tbl_dantoc']  		= $this->Mdats->get('tbl_dantoc');
	    	$data['tbl_quyen']  		= $this->Mdats->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  		= $this->Mdats->get(' tbl_taikhoan');
	    	$data['tbl_nhom_khenthuong']= $this->Mdats->get(' tbl_nhom_khenthuong');
	    	
	    	foreach ($data['tbl_nganh'] as $key => $value) {
	    		$data['tennganh'][$value['id_nganh']] = $value['nganh'];
	    	}
	    	$nganh 						= $this->Mdats->get('tbl_canbo_nganh');
	    	foreach ($nganh as $key => $value) {
	    		$data['get_nganh'][$value['id_can_bo']] = $data['tennganh'][$value['id_nganh']];
	    	}
	    	foreach ($data['tbl_nhomnganh'] as $key => $value) {
	    		$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
	    	}
	    	foreach ($data['tbl_dantoc'] as $key => $value) {
	    		$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
	    	}
	    	$get_tecb = $this->Mdats->get('tbl_canbo');
	    	foreach($get_tecb as $key => $val){
	    		$data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
	    	} 
	    	return $data;
	    }
	}
 ?>