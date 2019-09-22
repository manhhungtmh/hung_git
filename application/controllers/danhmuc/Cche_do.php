<?php 
	/**
	 * summary
	 */
	class Cche_do extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('danhmuc/MChe_do');
	    }
	    public function index(){
	    	$chedo = $this->MChe_do->get('tbl_chedo');
	    	if($this->input->post('themchedo')){
				$this->themchedo();
			}
			if($this->input->post('capnhap_chedo')){
				$this->capnhap_chedo();
			}
			if($this->input->post('xoa_chedo')){
				$this->xoa_chedo();
			}
			$id_chedo = $this->MChe_do->select_where('tbl_chedo','id_chedo',null,null);
			$arr_id =[];
			foreach ($id_chedo as $key => $value) {
				$arr_id[] = $value['id_chedo'];
			}
			$chedo_in = $this->MChe_do->get_where_in1('tbl_canbo_chedo','id_chedo',$arr_id);
			$arrchedo= [];
			foreach ($chedo_in as $key => $value) {
				$arrchedo[] = $value['id_chedo'];
			}
	    	$temp = array(
	    			'template' =>  'danhmuc/VChe_do',
    				'data'     => array(
    					'arrchedo'		=> $arrchedo,
    					'chedo'			=> $chedo,
    					'message'       => getMessages(),
    					'danhmuc'  		=> $this->danhmuc(),
    				),
	    	);
        	$this->load->view('layout/content', $temp);
	    }
	   
	   public function themchedo(){
			$data['ten_chedo'] 	= $this->input->post('ten_chedo');
			$check = $this->MChe_do->insert('tbl_chedo',$data);
			if($check > 0) {
				setMessages('success','Thêm thành công');
				return redirect('chedo');
			}
		}
		public function capnhap_chedo(){
			$id = $this->input->post('capnhap_chedo');
			$data['ten_chedo'] = $this->input->post('ten_chedo');
			$check = $this->MChe_do->update('tbl_chedo','id_chedo',$id,$data);
			if($check > 0) {
				setMessages('success','Sửa thành công');
				return redirect('chedo');
			}
		}
		public function xoa_chedo(){
			$id = $this->input->post('xoa_chedo');
			$check = $this->MChe_do->delete('tbl_chedo','id_chedo',$id);
			if($check > 0) {
				setMessages('success','Xóa thành công');
				return redirect('chedo');
			}
		}
	   
	    public function danhmuc(){
	    	$data['tbl_nganh']  		= $this->MChe_do->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  	= $this->MChe_do->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  		= $this->MChe_do->get('tbl_dantoc');
	    	$data['tbl_dantoc']  		= $this->MChe_do->get('tbl_dantoc');
	    	$data['tbl_quyen']  		= $this->MChe_do->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  		= $this->MChe_do->get(' tbl_taikhoan');
	    	$data['tbl_nhom_khenthuong']= $this->MChe_do->get(' tbl_nhom_khenthuong');
	    	
	    	foreach ($data['tbl_nganh'] as $key => $value) {
	    		$data['tennganh'][$value['id_nganh']] = $value['nganh'];
	    	}
	    	$nganh 						= $this->MChe_do->get('tbl_canbo_nganh');
	    	foreach ($nganh as $key => $value) {
	    		$data['get_nganh'][$value['id_can_bo']] = $data['tennganh'][$value['id_nganh']];
	    	}
	    	foreach ($data['tbl_nhomnganh'] as $key => $value) {
	    		$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
	    	}
	    	foreach ($data['tbl_dantoc'] as $key => $value) {
	    		$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
	    	}
	    	$get_tecb = $this->MChe_do->get('tbl_canbo');
	    	foreach($get_tecb as $key => $val){
	    		$data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
	    	} 
	    	return $data;
	    }
	}
 ?>