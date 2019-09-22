<?php 

	class Clylich extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model("hoso_canbo/Mlylich");
	    }
	    public function index(){
	    	$id_canbo = "CBGV2"; // Khoi tao gia tri ban dau cho ma can bo
	    	if($action = $this->input->get("trangthai")){
	    		if($action == "xemchitiet"){
	    			$id_canbo = $this->input->get("macb");
	    		}
	    	}
	    	// Xu ly khi an luu ho so
	    	if($action = $this->input->post("action")){
	    		switch($action){
	    			case "luuhoso": $this->luuhoso($id_canbo);break;
	    		}
	    		return redirect(base_url()."lylich?macb=".$id_canbo."&trangthai=xemchitiet");
	    	}

	    	$temp = array(
        		'template' => 'hoso_canbo/Vlylich',
        		'data'     => array(
        			'message' => getMessages(),
        			'id_canbo' => $id_canbo,
        			'danhmuc' => $this->danhmuc($id_canbo),
        		), 
        	);
			$this->load->view('layout/content', $temp);

	    }

	    public function danhmuc($id_canbo){
	    	$thongtincanbo = $this->Mlylich->thongtinchitiet();
	    	//pr($thongtincanbo);
	    	foreach ($thongtincanbo as $key => $value) {
	    		$data['thongtincanbo'][$value['id_can_bo']] = $value;
	    	}

	    	$canbo 	= $this->Mlylich->get('tbl_canbo');
	    	foreach ($canbo as $key => $value) {
	    		$data['canbo'][$value['id_can_bo']] = $value;
	    	}

	    	$data['dantoc'] 	= $this->Mlylich->get('tbl_dantoc');
	    	$data['tongiao'] 	= $this->Mlylich->get('tbl_tongiao');
	    	$data['hocham'] 	= $this->Mlylich->get('tbl_hocham');
	    	$data['hocvi'] 		= $this->Mlylich->get('tbl_hocvi');
	    	$data['donvi'] 		= $this->Mlylich->get('tbl_donvi');
	    	$data['chucvu'] 	= $this->Mlylich->get('tbl_chucvu');

	    	return $data;
	    }
	    
	    //
	    public function luuhoso($id_canbo){
	    	if($this->input->post("action")){
	    		$res = $this->input->post("data");
	    		//pr($res);
	    		// update tbl_can_bo
				$data['ho_ten'] 	 	= $res['ho_ten']; 
				$data['ngay_sinh']   	= $res['ngay_sinh'];
				$data['gioi_tinh']   	= $res['gioi_tinh'];
				$data['id_dan_toc']  	= $res['id_dan_toc'];	    			
				$data['id_ton_giao'] 	= $res['id_ton_giao'];
				$data['noi_sinh'] 	 	= $res['noi_sinh'];
				$data['que_quan'] 	 	= $res['que_quan'];
				$data['ho_khau'] 	 	= $res['ho_khau'];
				$data['email'] 	 	 	= $res['email'];
				$data['dien_thoai']  	= $res['dien_thoai'];
				$data['so_tai_khoan'] 	= $res['so_tai_khoan'];
				$data['ma_so_thue']   	= $res['ma_so_thue'];
				$data['so_chung_minh'] 	= $res['so_chung_minh'];
				$data['ngay_cap_cmt'] 	= $res['ngay_cap_cmt'];
	    		$this->Mlylich->update("tbl_canbo","id_can_bo",$id_canbo,$data);
	    		// Cap nhat hoc ham
	    		$data = array();
	    		$data['id_hoc_ham']		= $res['id_hoc_ham'];
	    		$this->Mlylich->update("tbl_canbo_hocham","id_can_bo",$id_canbo,$data);
				// Cap nhat hoc vi
	    		$data = array();
	    		$data['id_hoc_vi']		= $res['id_hoc_vi'];
	    		$this->Mlylich->update("tbl_canbo_hocvi","id_can_bo",$id_canbo,$data);
				// Cap nhat don vi
	    		$data = array();
	    		$data['id_don_vi']		= $res['id_don_vi'];
	    		$this->Mlylich->update("tbl_canbo_donvi","id_can_bo",$id_canbo,$data);
				// Cap nhat chuc vu
	    		$data = array();
	    		$data['id_chuc_vu']		= $res['id_chuc_vu'];
	    		$this->Mlylich->update("tbl_canbo_chucvu","id_can_bo",$id_canbo,$data);

	    	} 
	    }
	}
 ?>