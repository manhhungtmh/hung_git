<?php 
	class Cthongtincanbo extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model("canbo/Mthongtincanbo");
	    }
	    public function index(){
	    	$action = $this->input->post("action");
    		switch($action){
    			case "updateData": 
    				$this->updateData(); 
    				break;
    		}
	    	$temp = array(
        		'template' => 'canbo/Vthongtincanbo',
        		'data'     => array(
        			'message' 		=> getMessages(),
        			'danhmuc' 		=> $this->danhmuc(),
        		),
        	);
        	$this->load->view('layout/content', $temp);
	    }
	    
	    //
	    public function updateData(){
	    	if($this->input->post("action")){
	    		$data = array(
	    			"ho_ten" 		=> $this->input->post("txthoten"),
	    			"ngay_sinh" 	=> $this->input->post("txtngaysinh"),
	    			"noi_sinh" 		=> $this->input->post("txtnoisinh"),
	    			"que_quan"		=> $this->input->post("txtquequan"),
	    			"ho_khau" 		=> $this->input->post("txthktt"),
	    			"email" 		=> $this->input->post("txtemail"),
	    			"dien_thoai" 	=> $this->input->post("txtsdt"),
					"so_tai_khoan" 	=> $this->input->post("txtsotaikhoan"),
					"ma_so_thue" 	=> $this->input->post("txtmasothue"),
					"so_chung_minh" => $this->input->post("txtcmnd"),
					"ngay_cap_cmt" 	=> $this->input->post("txtngaycap"),
					"noi_cap_cmt" 	=> $this->input->post("txtnoicap"),

	    		);
	    		// Cap nhat o day
	    		$this->Mthongtincanbo->update("tbl_canbo","id_can_bo",$id_canbo,$data);

	    		redirect(base_url()."thongtincanbo/".$id_canbo);
	    		//pr($data);
	    	}
	    }

	    public function danhmuc(){
	    	$thongtincanbo = $this->Mthongtincanbo->thongtincanbo();
	    	foreach ($thongtincanbo as $key => $value) {
	    		if($value['id_can_bo'] == $id_canbo){
	    			$data['canbo'][$value['id_can_bo']] = $value;
	    			break;
	    		}
	    	}
	    	$data['tbl_nganh']  				= $this->Mqtdt->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  			= $this->Mqtdt->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  				= $this->Mqtdt->get('tbl_dantoc');
	    	$data['tbl_quyen']  				= $this->Mqtdt->get('tbl_quyen');
	    	$data['tbl_chuyenmondaotao']  		= $this->Mqtdt->get('tbl_chuyenmondaotao');
	    	$data['tbl_nhomnganh']  			= $this->Mqtdt->get('tbl_nhomnganh');
	    	$data['tbl_dantoc']  				= $this->Mqtdt->get('tbl_dantoc');
	    	$data['tbl_quyen']  				= $this->Mqtdt->get('tbl_quyen');
	    	foreach ($data['tbl_nganh'] as $key => $value) {
	    		$data['tennganh'][$value['id_nganh']] = $value['nganh'];
	    	}
	    	foreach ($data['tbl_nhomnganh'] as $key => $value) {
	    		$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
	    	}
	    	foreach ($data['tbl_dantoc'] as $key => $value) {
	    		$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
	    	}
	    	$data['dantoc'] 	= $this->Mthongtincanbo->get('tbl_dantoc');
	    	$data['tongiao'] 	= $this->Mthongtincanbo->get('tbl_tongiao');
	    	$data['hocham'] 	= $this->Mthongtincanbo->get('tbl_hocham');
	    	$data['hocvi'] 		= $this->Mthongtincanbo->get('tbl_hocvi');
	    	return $data;
	    }

	}
 ?>