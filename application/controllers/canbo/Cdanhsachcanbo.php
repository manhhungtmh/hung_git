<?php 

	class Cdanhsachcanbo extends MY_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model("canbo/Mthongtincanbo");
	        $this->load->model("hoso_canbo/Mlylich");
	        $this->load->model("hoso_canbo/Mquatrinhcongtac");
	        $this->load->model("hoso_canbo/Mcacchungchi");
	        $this->load->model("hoso_canbo/MQuy_hoach");
	        $this->load->model("danhmuc/MChe_do");
	        $this->load->model("danhmuc/Mdats");
	    }
	    public function index(){
	    	$session = $this->session->userdata('user');
	    	$canbo = $this->Mthongtincanbo->get('tbl_canbo');
	    	if($id = $this->input->post("update")){
 				$this->update_qtct($id);
	    	}
	    	if($action = $this->input->post("action")){
	    		$id = $this->input->post("id");
	    		if($action = "select"){
	    			echo json_encode($this->lay_qtct($id));
	    			return;
	    		}
	    	}
	    	if($session['maquyen'] != 1){
				$macb = $session['macb'];
				$this->xemchitiet($macb);
				return;

	    	}
			if($session['maquyen'] == 1){
				$macb = $this->input->get('macb');
	    	}
	    	if($this->input->get('macb')){
	    		$this->xemchitiet($macb);
	    		return;
	    	}
	    	$timkiem_cb = [];
	    	if($this->input->post('timkiem')){
	    		$timkiem_cb = $this->timkiem();
	    	}
	    	$duieu_tk = [];
	    	if(!empty($timkiem_cb)){
	    		$canbo = $timkiem_cb['timkiem'];
	    		$duieu_tk = array(
	    			'tencb' 	=> $timkiem_cb['tencb'],
	    			'nganh'		=> $timkiem_cb['nganh'],
	    		);
	    	}
	    	$temp = array(
        		'template'  => 'canbo/Vdanhsachcanbo',
        		'data'     	=> array(
        			'session'		=> $session,
        			'message' 		=> getMessages(),
        			'getCanbo'		=> $canbo,
        			'danhmuc'       => $this->danhmuc(),
        			'duieu_tk'		=> $duieu_tk,
        		), 
        	);

        	$this->load->view('layout/content', $temp);
	    }	
	    public function timkiem(){
	    	$tencb = trim($this->input->post('tencb'));
	    	$nganh = trim($this->input->post('nganh'));
	    	$timkiem = $this->MQuy_hoach->timkiem_dscb($tencb, $nganh);
	    	$data  = array(
	    		'tencb' 	=> $tencb,
	    		'nganh'		=> $nganh,
	    		'timkiem'   => $timkiem,
	    	);
	    	return $data;
	    }
	    public function xemchitiet($macb){
	    	$canbo    		= $this->Mthongtincanbo->get_where('tbl_canbo', 'id_can_bo', $macb);
	    	$canbo_qtct    	= $this->Mthongtincanbo->get('tbl_canbo_qtct');

	    	$gs 		= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'loaicmdt' => 'gs'));
	    	$pgs 		= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'loaicmdt' => 'pgs'));
	    	$tiensi 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'loaicmdt' => 'tiensi'));
	    	$thacsi 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'loaicmdt' => 'thacsi'));
	    	$daihoc 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'loaicmdt' => 'daihoc'));
	    	$caodang 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'loaicmdt' => 'caodang'));

	    	if(empty($pgs)){
	    		$pgs[0] = "";
	    	}
	    	if(empty($gs)){
	    		$gs[0] = "";
	    	}
	    	if(empty($tiensi)){
	    		$tiensi[0] = "";
	    	}
	    	if(empty($thacsi)){
	    		$thacsi = "";
	    	}
	    	if(empty($daihoc)){
	    		$daihoc = "";
	    	}
	    	if(empty($caodang)){
	    		$caodang[0] = "";
	    	}
	    	
			// truyền biến sang view quá trình đào tạo ở mẫu form quá trình đào tạo
	    	$data = array(
	    		'pgs'       => $pgs[0],
	    		'gs'       	=> $gs[0],
	    		'tiensi'    => $tiensi[0],
	    		'thacsi'    => $thacsi,
	    		'daihoc'	=> $daihoc,
	    		'caodang'   => $caodang[0],
	    	);
	    	// end
	    	if($this->input->post('luuthongtin')){
	    		$this->luuthongtin_qtdt($macb, $this->danhmuc(), $data);
	    	}
	    	// lưu thông tin quá trình đào tạo
	    	
	    	// lưu thông tin lý lịch cán bộ
	    	if($this->input->post('luulylich')){
	    		$this->luulylich($macb);
	    	}

	    	/*end lưu lý lịch*/

	    	// lưu quas trinh cong tac cán bộ
	    	if($this->input->post('luu_qtct')){
	    		$this->luu_qtct($macb);
	    	}
	    	/*end lưu lý lịch*/
	    	if($id = $this->input->post("deleteQTCT")){
 				$this->delete_qtct($id);
	    	}

	    	if($this->input->post('luu_chungchi')){
	    		$this->luu_chungchi($macb);
	    	}

	    	if($this->input->post('delete')){
	    		$id_chung_chi = $this->input->post('delete');
	    		$this->xoa_chungchi($id_chung_chi,$macb);
	    	}

	    	if($this->input->post('xoathacsi')){
	    		$id = $this->input->post('xoathacsi');
	    		$this->xoathacsi($id,$macb);
	    	}

	    	if($this->input->post('xoadaihoc')){
	    		$id = $this->input->post('xoadaihoc');
	    		$this->xoadaihoc($id,$macb);
	    	}
	    	if($this->input->post('themquyhoach')){
	    		$this->themquyhoach($macb);
	    	}
	    	if($this->input->post('sua_quyhoach')){
	    		$this->suaquyhoach($macb);
	    	}
	    	if($this->input->post('xoaquyhoach')){
	    		$this->xoaquyhoach($macb);
	    	}
	    	if($this->input->post('themdoandang')){
	    		$this->themdoandang($macb);
	    	}
	    	if($this->input->post('sua_doandang')){
	    		$this->suadoandang($macb);
	    	}
	    	if($this->input->post('xoadoandang')){
	    		$this->xoadoandang($macb);
	    	}
	    	if($this->input->post('sua_chedo')){
	    		$this->suachedo($macb);
	    	}
	    	if($this->input->post('them_chedo')){
	    		$this->themchedo($macb);
	    	}
	    	if($this->input->post('xoa_chedo')){
	    		$this->xoachedo($macb);
	    	}
	    	if($this->input->post('themdeantuyensinh')){
	    		$this->themdeantuyensinh($macb);
	    	}
	    	if($this->input->post('sua_deantuyensinh')){
	    		$this->sua_deantuyensinh($macb);
	    	}
	    	if($this->input->post('xoa_deantuyensinh')){
	    		$this->xoa_deantuyensinh($macb);
	    	}

	    	// if($this->input->post('themkhenthuong')){
	    	// 	$this->themkhenthuong($macb);
	    	// }

	    	$dulieu = array(
	    		'data' 		=> $data,
        		'danhmuc'   => $this->danhmuc(),
	    	);
	    	// load form trong quá trình đào tạo -- thêm form thì load thêm
	    	
	   //  	$form  = array(
				// 'pgs'      	=> $this->parser->parse('mauform_Quatrinhdaotao/Vpgs',$dulieu,true),
				// 'tiensi'    => $this->parser->parse('mauform_Quatrinhdaotao/Vtiensi',$dulieu,true),
				// 'thacsi'    => $this->parser->parse('mauform_Quatrinhdaotao/Vthacsi',$dulieu,true),
				// 'daihoc'    => $this->parser->parse('mauform_Quatrinhdaotao/Vdaihoc',$dulieu,true),
				// 'caodang'   => $this->parser->parse('mauform_Quatrinhdaotao/Vcaodang',$dulieu,true),
    //     	);

        	//end load form
        	$quyhoach 							= $this->MQuy_hoach->get_where('tbl_canbo_quyhoach','id_canbo',$this->input->get('macb'));
        	$doandang 							= $this->MQuy_hoach->get_where('tbl_canbo_doandang','id_canbo',$this->input->get('macb'));
        	$chedo 			= $this->MChe_do->get_where('tbl_canbo_chedo','id_canbo',$this->input->get('macb'));
        	$deantuyensinh 	= $this->Mdats->get_where('tbl_canbo_dats','id_canbo',$this->input->get('macb'));
        	$qtct     							= $this->data_qua_trinh_cong_tac($macb);
        	$cacchungchi 						= $this->Mcacchungchi->getListchungchi($macb);
        	$lylich 							= $this->data_ly_lich($macb);
	    	$tbl_thidua_khenthuong				= $this->MQuy_hoach->get_cb_khenthuong($macb);
	    	$session = $this->session->userdata('user');
			$temp = array(
        		'template' => 'canbo/Vthongtincanbo',
        		'data'     => array(
        			'session'		=> $session,
        			'message' 		=> getMessages(),
        			'canbo'			=> $canbo[0],
        			'danhmuc'   	=> $this->danhmuc(),
        			'trangthai' 	=> getMessages('trangthai'),
        			'qtct'			=> $canbo_qtct,
        			'data'      	=> $data,
        			'cacchungchi'	=> $cacchungchi,
        			'lylich'		=> $lylich,
        			'qtct'			=> $qtct,
        			'quyhoach'	 	=> $quyhoach,
        			'doandang'	 	=> $doandang,
        			'chedo'	 		=> $chedo,
        			'deantuyensinh'	=> $deantuyensinh,
        			'dm_quyhoach'	=> $this->MQuy_hoach->get('tbl_quyhoach'),
        			'getkhenthuong' => $tbl_thidua_khenthuong,
        			'dm_chedo'				=> $this->MChe_do->get('tbl_chedo'),
        			'dm_deantuyensinh'		=> $this->Mdats->get('tbl_deantuyensinh'),
        		),
        	);
        	// load các tab trong thông tin cán bộ
        	
 			$temp['data']['quatrinhdaotao'] = $this->parser->parse('hoso_canbo/Vquatrinhdaotao',$temp['data'],true);
 			$temp['data']['lylich'] = $this->parser->parse('hoso_canbo/Vlylich',$temp['data'],true);
 			$temp['data']['quatrinhcongtac'] = $this->parser->parse('hoso_canbo/Vquatrinhcongtac',$temp['data'],true);
 			$temp['data']['cacchungchi'] = $this->parser->parse('hoso_canbo/Vcacchungchi',$temp['data'],true);
 			$temp['data']['cacquyhoach'] = $this->parser->parse('hoso_canbo/VQuyhoach_Canbo',$temp['data'],true);
 			$temp['data']['cactochuc'] = $this->parser->parse('hoso_canbo/VDoan_dang_tochuc',$temp['data'],true);
 			// test
 			$temp['data']['taikhoan'] = $this->parser->parse('hoso_canbo/Vtai_khoan',$temp['data'],true);
 			$temp['data']['khenthuong'] = $this->parser->parse('hoso_canbo/Vkhenthuong',$temp['data'],true);
 			$temp['data']['chedo'] = $this->parser->parse('hoso_canbo/Vchedo_canbo',$temp['data'],true);
 			$temp['data']['deantuyensinh'] = $this->parser->parse('hoso_canbo/Vdeantuyensinh_canbo',$temp['data'],true);
 			$temp['data']['xuatbaocao'] = $this->parser->parse('hoso_canbo/Vbaocao',$temp['data'],true);
 			//
 			// end load thông thông tin cán bộ
 			
        	$this->load->view('layout/content', $temp);
	    }

	    // public function themkhenthuong($macb){
	    // 	$data = $this->input->post('data');
	    // 	$data['id_thidua_khenthuong']	= time();
	    // 	$check = $this->Mthongtincanbo->insert('tbl_thidua_khenthuong',$data);

	    // 	$data1 = array(
	    // 		'macb' => $macb,
	    // 		'id_thidua_khenthuong' => $data['id_thidua_khenthuong'],
	    // 	);
	    // 	$check = $this->Mthongtincanbo->insert('tbl_canbo_khenthuong',$data1);
	    // 	if($check > 0){
	    // 		setMessages("success","Thêm khen thưởng thành công");
	    // 		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    // 	}else{
	    // 		setMessages("error","Thêm khen thưởng thất bại");
	    // 		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    // 	}
	    // }
	    //Chế độ cán bộ
	    public function suachedo($macb){
	    	$id = $this->input->post('sua_chedo');
	    	$data['id_chedo']	 		= $this->input->post('sua_loai_chedo');
	    	$data['thoigian_batdau'] 	= $this->input->post('sua_thoigianbatdau_chedo');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('sua_thoigianketthuc_chedo');
	    	$data['id_canbo'] 			= $this->input->get('macb');
	    	$check = $this->MChe_do->update('tbl_canbo_chedo','id',$id,$data);
	    	if($check > 0){
	    		setMessages("success","Sửa thành công");
	    	}
	    }
	    public function  themchedo($macb){
	    	$data['id_chedo']	 		= $this->input->post('loai_chedo');
	    	$data['thoigian_batdau'] 	= $this->input->post('thoigian_batdau_chedo');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('thoigian_ketthuc_chedo');
	    	$data['id_canbo']			= $this->input->get('macb');
	    	$check = $this->MChe_do->insert('tbl_canbo_chedo',$data);
	    	if($check > 0){
	    		setMessages("success","Thêm thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }
	    public function xoachedo($macb){
	    	$id = $this->input->post('xoa_chedo');
	    	$check = $this->MChe_do->delete('tbl_canbo_chedo','id',$id);
	    	if($check > 0){
	    		setMessages("success","Xóa thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }
//END Chế độ cán bộ
//Đề án tuyển sinh
	    public function sua_deantuyensinh($macb){
	    	$id = $this->input->post('sua_deantuyensinh');
	    	$data['id_deantuyensinh'] 	= $this->input->post('sua_loaideantuyensinh');
	    	$data['id_nganh'] 	= $this->input->post('sua_nganh');
	    	$data['thoigian_batdau'] 	= $this->input->post('sua_thoigianbatdau_doantuyensinh');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('sua_thoigianketthuc_doantuyensinh');
	    	$data['id_canbo'] 			= $this->input->get('macb');
	    	$check = $this->Mdats->update('tbl_canbo_dats','id',$id,$data);
	    	if($check > 0){
	    		setMessages("success","Sửa thành công");
	    	}
	    }
	    public function  themdeantuyensinh($macb){
	    	$data['id_nganh'] 			= $this->input->post('them_nganh');
	    	$data['id_deantuyensinh'] 	= $this->input->post('them_loai_deantuyensinh');
	    	$data['thoigian_batdau'] 	= $this->input->post('thoigian_batdau_deantuyensinh');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('thoigian_ketthuc_deantuyensinh');
	    	$data['id_canbo']			= $this->input->get('macb');
	    	$check = $this->Mdats->insert('tbl_canbo_dats',$data);
	    	if($check > 0){
	    		setMessages("success","Thêm thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }
	    public function xoa_deantuyensinh($macb){
	    	$id = $this->input->post('xoa_deantuyensinh');
	    	$check = $this->Mdats->delete('tbl_canbo_dats','id',$id);
	    	if($check > 0){
	    		setMessages("success","Xóa thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }
//END Đề án tuyển sinh
	    public function data_ly_lich($id_can_bo){
	    	$data['canbo'] 		= $this->Mthongtincanbo->thongtinchitiet($id_can_bo);
	    	$data['dantoc'] 	= $this->Mthongtincanbo->get('tbl_dantoc');
	    	$data['tongiao'] 	= $this->Mthongtincanbo->get('tbl_tongiao');
	    	$data['hocham'] 	= $this->Mthongtincanbo->get('tbl_hocham');
	    	$data['hocvi'] 		= $this->Mthongtincanbo->get('tbl_hocvi');
	    	$data['donvi'] 		= $this->Mthongtincanbo->get('tbl_donvi');
	    	$data['chucvu'] 	= $this->Mthongtincanbo->get('tbl_chucvu');

	    	/*$data['qtct'] 		= $this->Mthongtincanbo->get_qtct($id_can_bo);
	    	$data['bomon'] 		= $this->Mthongtincanbo->get('tbl_bomon');*/
	    	return $data;
	    }

	    public function data_qua_trinh_cong_tac($id_can_bo){
	    	$data['donvi'] 		= $this->Mthongtincanbo->get('tbl_donvi');
	    	$data['bomon'] 		= $this->Mthongtincanbo->get('tbl_bomon');
			$data['chucvu'] 	= $this->Mthongtincanbo->get('tbl_chucvu');
	    	$data['qtctCB'] 	= $this->Mthongtincanbo->get_qtctCB($id_can_bo);
	    	$data['qtctNV'] 	= $this->Mthongtincanbo->get_qtctNV($id_can_bo);
	    	return $data;
	    }

	    public function themdoandang($macb){
	    	$data['id_canbo']			= $this->input->get('macb');
			$data['chucvu']			 	= $this->input->post('chucvu_doandang');
			$data['tochuc'] 			= $this->input->post('them_tochuc_doandang');
	    	$data['thoigian_batdau'] 	= $this->input->post('thoigian_batdaudoandang');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('thoigian_ketthucdoandang');
	    	$check = $this->MQuy_hoach->insert('tbl_canbo_doandang',$data);
	    	if($check > 0){
	    		setMessages("success","Thêm thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function suadoandang($macb){
	    	$id = $this->input->post('sua_doandang');
			$data['chucvu'] 			= $this->input->post('sua_chucvu_doandang');
			$data['tochuc'] 			= $this->input->post('sua_tochuc_doandang');
	    	$data['thoigian_batdau'] 	= $this->input->post('sua_thoigianbatdau_doandang');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('sua_thoigianketthuc_doandang');
	    	$data['id_canbo'] 			= $this->input->get('macb');
	    	$check = $this->MQuy_hoach->update('tbl_canbo_doandang','id',$id,$data);
	    	if($check > 0){
				setMessages("success","Sửa thành công");
				return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function xoadoandang($macb){
	    	$id = $this->input->post('xoadoandang');
	    	$check = $this->MQuy_hoach->delete('tbl_canbo_doandang','id',$id);
	    	if($check > 0){
	    		setMessages("success","Xóa thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function  themquyhoach($macb){
	    	$data['id_quyhoach']	 	= $this->input->post('loai_quyhoach');
	    	$data['chucvu'] 			= $this->input->post('chucvu_quyhoach');
	    	$data['thoigian_batdau'] 	= $this->input->post('thoigian_batdau');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('thoigian_ketthuc');
	    	$data['id_canbo']			= $this->input->get('macb');
	    	$check = $this->MQuy_hoach->insert('tbl_canbo_quyhoach',$data);
	    	if($check > 0){
	    		setMessages("success","Thêm thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function suaquyhoach($macb){
	    	$id = $this->input->post('sua_quyhoach');
	    	$data['id_quyhoach'] 		= $this->input->post('sua_loaiquyhoach');
	    	$data['chucvu'] 			= $this->input->post('sua_chucvu');
	    	$data['thoigian_batdau'] 	= $this->input->post('sua_thoigianbatdau');
	    	$data['thoigian_ketthuc'] 	= $this->input->post('sua_thoigianketthuc');
	    	$data['id_canbo'] 			= $this->input->get('macb');
	    	$check = $this->MQuy_hoach->update('tbl_canbo_quyhoach','id',$id,$data);
	    	if($check > 0){
	    		setMessages("success","Sửa thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function xoaquyhoach($macb){
	    	$id = $this->input->post('xoaquyhoach');
	    	$check = $this->MQuy_hoach->delete('tbl_canbo_quyhoach','id',$id);
	    	if($check > 0){
	    		setMessages("success","Xóa thành công");
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    // lưu lý lịch cán bộ
	    
	    public function luulylich($macb){
	    	$res = $this->input->post("data");
	    	// pr($res);
    		// update tbl_can_bo
   //  		$data['ma_dao_tao'] 		= $res['ma_dao_tao']; 
			// $data['ho_ten'] 	 		= $res['ho_ten']; 
			// $data['ngay_sinh']   		= $res['ngay_sinh'];
			// $data['gioi_tinh']   		= $res['gioi_tinh'];
			// $data['id_dan_toc']  		= $res['id_dan_toc'];	    			
			// $data['id_ton_giao'] 		= $res['id_ton_giao'];
			// $data['noi_sinh'] 	 		= $res['noi_sinh'];
			// $data['que_quan'] 	 		= $res['que_quan'];
			// $data['ho_khau'] 	 		= $res['ho_khau'];
			// $data['email'] 	 	 		= $res['email'];
			// $data['dien_thoai']  		= $res['dien_thoai'];
			// $data['so_tai_khoan'] 		= $res['so_tai_khoan'];
			// $data['ma_so_thue']   		= $res['ma_so_thue'];
			// $data['dang_hoc']   		= $res['dang_hoc'];
			// $data['so_chung_minh'] 		= $res['so_chung_minh'];
			// $data['ngay_cap_cmt'] 		= $res['ngay_cap_cmt'];
			// $data['noi_cap_cmt'] 		= $res['noi_cap_cmt'];
			// $data['ngay_KG_voi_truong'] = $res['ngay_KG_voi_truong'];
			// $data['ngay_ve_truong'] 	= $res['ngay_ve_truong'];
			// $data['tg_batdau_tapsu'] 	= $res['tg_batdau_tapsu'];
			// $data['tg_ketthuc_tapsu'] 	= $res['tg_ketthuc_tapsu'];
			// $data['bien_che'] 			= $res['bien_che'];
    		$insert = $this->Mthongtincanbo->update("tbl_canbo","id_can_bo",$macb,$res);
    		$session = $this->session->userdata('user');
    		if($insert > 0 ){
	    		setMessages('success','Lưu thông tin lý lịch cán bộ thành công','Thông báo');
	    		if($session['maquyen'] == 1){
	    			return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    		}
	    		else{
	    			return redirect('danhsachcanbo');
	    		}
	    	}else{
	    		setMessages('error','Lưu thông tin lý lịch cán bộ thất bại!','Thông báo');
	    		if($session['maquyen'] == 1){
	    			return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    		}
	    		else{
	    			return redirect('danhsachcanbo');
	    		}
	    	}	
	    }
	    
	    public function luu_chungchi($macb){
	    	$id_chung_chi= $this->input->post('chung_chi');
	    	$row = $this->Mcacchungchi->insertdk($id_chung_chi,$macb);
	    	if($row>0){
	    		setMessages('error','Chứng chỉ này đã tồn tại!','Thông báo');
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    	$data = $this->input->post("data");
	    	$data = array(
	    		'id_can_bo'=> $macb,
	    		'id_chung_chi' => $this->input->post("chung_chi"),
	    		'thoi_gian'	   => $this->input->post("thoi_gian"),
	    		'noi_cap'	   => $this->input->post("noi_cap")
	    	);
	    	$insert = $this->Mthongtincanbo->insert('tbl_canbo_chungchi',$data);
	    	if($insert > 0 ){
	    		setMessages('success','Lưu chứng chỉ thành công','Thông báo');
	    	}else{
	    		setMessages('error','Lưu chứng chỉ thất bại!','Thông báo');
	    	}
	    	return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    }

	    public function xoa_chungchi($id_chung_chi,$macb){
			$row = $this->Mthongtincanbo->delete(' tbl_canbo_chungchi','id_chung_chi',$id_chung_chi);
	    	if($row > 0){
	    		setMessages('success','Xóa chứng chỉ thành công','Thông báo');
	    		$this->session->set_flashdata('trangthai', 1);
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}else{
	    		setMessages('error','Xóa thất bại!','Thông báo');
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
		}

		/*----------------------------------QUA TRINH DAO TAO-----------------------------------*/
	    public function luu_qtct($macb){
	    	$data = $this->input->post("data");
	    	$data['id_canbo'] = $macb;
	    	$insert = $this->Mthongtincanbo->insert('tbl_canbo_qtct',$data);
	    	if($insert > 0 ){
	    		setMessages('success','Lưu quá trình công tác cán bộ thành công','Thông báo');
	    	}else{
	    		setMessages('error','Lưu quá trình công tác cán bộ thất bại!','Thông báo');
	    	}
	    	return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    }

	    public function update_qtct($id){
	    	$data = $this->input->post("data");
	    	$data['id_canbo'] = $this->input->get("macb");
	    	//pr($id);
	    	$update = $this->Mthongtincanbo->update_qtct($data,$id);
	    	if($update > 0 ){
	    		setMessages('success','Sửa quá trình công tác cán bộ thành công','Thông báo');
	    	}else{
	    		setMessages('error','Sửa quá trình công tác cán bộ thất bại!','Thông báo');
	    	}
	    	return redirect(base_url()."danhsachcanbo?macb=".$data['id_canbo']."&trangthai=1");
	    }

	    public function delete_qtct($id){
	    	$delete = $this->Mthongtincanbo->delete_qtct($id);
	    	if($delete > 0 ){
	    		setMessages('success','Xóa quá trình công tác cán bộ thành công','Thông báo');
	    	}else{
	    		setMessages('error','Xóa quá trình công tác cán bộ thất bại!','Thông báo');
	    	}
	    	$data['id_canbo'] = $this->input->get("macb");
	    	return redirect(base_url()."danhsachcanbo?macb=".$data['id_canbo']."&trangthai=1");
	    }

	    public function lay_qtct($id){
	    	$id_canbo = $this->input->get("macb");
	    	$data = $this->Mthongtincanbo->get_qtct($id_canbo);
	     	foreach($data as $key => $val){
	     		if($val['id'] == $id){
	     			return $val;
	     		}
	     	} 
	    }
	/*--------------------------------------------------------------------------------------*/

	    


	    public function luuthongtin_qtdt($macb, $danhmuc, $ttcb){
	    	$canbo = $this->Mthongtincanbo->get_where('tbl_canbo', 'id_can_bo', $macb);
	    	// $id_chuyen_mon = $this->input->post('id_chuyen_mon');
	    	// $update = $this->Mthongtincanbo->update_set('tbl_canbo','id_can_bo', $macb, array('id_chuyen_mon' => $id_chuyen_mon));
	    	// $tbl_chuyenmondaotao = array(
	    	// 	'id_chuyen_mon' => time(),
	    	// 	'chuyen_mon'    => $this->input->post('id_chuyenmondaotao'),
	    	// 	'chuyen_mon_vt' => $this->covername($this->input->post('id_chuyenmondaotao'))
	    	// );
	    	// $this->Mthongtincanbo->insert('tbl_chuyenmondaotao',$tbl_chuyenmondaotao );
	    	// $update = $this->Mthongtincanbo->update_set('tbl_canbo', 'id_can_bo', $macb, array('id_chuyen_mon' => $tbl_chuyenmondaotao['id_chuyen_mon']));
	    	// if($tbl_chuyenmondaotao['id_chuyen_mon'] != $id_chuyen_mon_cu){
	    	// 	$this->Mthongtincanbo->delete(' tbl_chuyenmondaotao','id_chuyen_mon',$id_chuyen_mon_cu);
	    	// }
	    	
	    	$gs = array(
	    		'id_canbo'  			=> $macb,
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtotnghiep_gs'),
	    		'id_nganh'  			=> $this->input->post('nganh_gs'),
	    		'loaicmdt'				=> 'gs',
	    	);
	    	if(!empty($ttcb['gs'])){
	    		$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'loaicmdt' => 'gs'));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $gs); // thêm giáo sư
	    	}else{
		    	if(!empty($gs['namtotnghiep']) && !empty($gs['id_nganh'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $gs); // thêm giáo sư
		    	}
	    	}

	    	$pgs = array(
	    		'id_canbo'  			=> $macb,
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtotnghiep_pgs'),
	    		'id_nganh'  			=> $this->input->post('nganh_pgs'),
	    		'loaicmdt'				=> 'pgs',
	    	);
	    	if(!empty($ttcb['pgs'])){
	    		$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'loaicmdt' => 'pgs'));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $pgs); // thêm giáo phó sư
	    	}else{
		    	if(!empty($pgs['namtotnghiep']) && !empty($pgs['id_nganh'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $pgs); // thêm phó giáo sư
		    	}
		    	else{
					setMessages("error",'Ngành học của giáo sư hoặc năm tốt nghiệp giáo sư không được để trông!', 'Thông báo');		
					return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');			
				}
	    	}
	    	$tiensi = array(
	    		'id_canbo'  			=> $macb,
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtn_ts'),
	    		'namcapbang'  			=> $this->input->post('namcapbang_ts'),
	    		'id_nganh'  			=> $this->input->post('nganh_ts'),
	    		'ghitrenbang'  			=> $this->input->post('ghitrenbang_ts'),
	    		'noithamgia_hoctap'  	=> $this->input->post('noitghoctap_ts'),
	    		'tgcongnhanbang'  		=> $this->input->post('tgcongnhanbang_ts'),
	    		'nuochoctap'  			=> $this->input->post('nuochoctap_ts'),
	    		'ngonngu_sudung'  		=> $this->input->post('ngonngu_ts'),
	    		'loaicmdt'				=> 'tiensi',
	    	);

			if(!empty($ttcb['tiensi'])){
				$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'loaicmdt' => 'tiensi'));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $tiensi); // 
	    	}else{
		    	if(!empty($tiensi['namtotnghiep']) && !empty($tiensi['id_nganh']) && !empty($tiensi['namcapbang'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $tiensi); // thêm giáo sư
		    	}
		    	else{
					setMessages("error",'Ngành học của tiến sĩ hoặc năm tốt nghiệp hoặc năm cấp bằng không được để trông!', 'Thông báo');	
					return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');				
				}
	    	}

	    	$thacsi = array(
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtnthacsi'),
	    		'namcapbang'  			=> $this->input->post('namcapbangthachsi'),
	    		'id_nganh'  			=> $this->input->post('nganhthacsi'),
	    		'ghitrenbang'  			=> $this->input->post('ghitrenbangthacsi'),
	    		'noithamgia_hoctap'  	=> $this->input->post('noitght_thacsi'),
	    		'tgcongnhanbang'  		=> $this->input->post('tgcnbang_thachsi'),
	    		'nuochoctap'  			=> $this->input->post('nuochoctapthacsi'),
	    		'ngonngu_sudung'  		=> $this->input->post('ngonnguthachsi'),
	    		'loaicmdt'				=> 'thacsi',
	    	);
			
			$temp_thacsi = array();
	    	$temp = array();
	    	for ($i=0; $i < count($thacsi['namtotnghiep']); $i++) { 
	    		$temp[] = array(
	    			'id_canbo'  			=> $macb,
	    			'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    			'namtotnghiep'  		=> $thacsi['namtotnghiep'][$i],
		    		'namcapbang'            => $thacsi['namcapbang'][$i],
		    		'id_nganh'  			=> $thacsi['id_nganh'][$i],
		    		'ghitrenbang'  			=> $thacsi['ghitrenbang'][$i],
		    		'noithamgia_hoctap'  	=> $thacsi['noithamgia_hoctap'][$i],
		    		'tgcongnhanbang'  		=> $thacsi['tgcongnhanbang'][$i],
		    		'nuochoctap'  			=> $thacsi['nuochoctap'][$i],
		    		'ngonngu_sudung'  		=> $thacsi['ngonngu_sudung'][$i],
		    		'loaicmdt'				=> 'thacsi',
	    		);
	    	}
	    	if(!empty($ttcb['thacsi'])){
				$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'loaicmdt' => 'thacsi'));
	    		$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp);
	    	}else{
	    		if(!empty($thacsi['namtotnghiep'][0]) && !empty($thacsi['id_nganh'][0]) && !empty($thacsi['namcapbang'][0])){
	    			$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp);
	    		}
	    		else{
					setMessages("error",'Ngành học của thạc sĩ hoặc năm tốt nghiệp hoặc năm cấp bằng không được để trông!', 'Thông báo');	
					return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');				
				}
	    	}

    		$daihoc = array(
	    		'namtotnghiep'  		=> $this->input->post('namtn_dh'),
	    		'namcapbang'  			=> $this->input->post('namcapbang_dh'),
	    		'id_nganh'  			=> $this->input->post('nganhdh'),
	    		'ghitrenbang'  			=> $this->input->post('ghitrenbangdh'),
	    		'noithamgia_hoctap'  	=> $this->input->post('tgtght_dh'),
	    		'totnghieploai'  		=> $this->input->post('totnghieploaidh'),
	    		'tgcongnhanbang'  		=> $this->input->post('tgcnbang_dh'),
	    		'nuochoctap'  			=> $this->input->post('nuochoctapdh'),
	    		'ngonngu_sudung'  		=> $this->input->post('nnsd_dh'),
	    		'loaicmdt'				=> 'daihoc',
	    	);
	    	$temp1 = array();
	    	for ($i=0; $i < count($daihoc['namtotnghiep']); $i++) { 
	    		$temp1[] = array(
	    			'id_canbo'  			=> $macb,
	    			'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    			'namtotnghiep'  		=> $daihoc['namtotnghiep'][$i],
		    		'namcapbang'  			=> $daihoc['namcapbang'][$i],
		    		'id_nganh'  			=> $daihoc['id_nganh'][$i],
		    		'ghitrenbang'  			=> $daihoc['ghitrenbang'][$i],
		    		'noithamgia_hoctap'  	=> $daihoc['noithamgia_hoctap'][$i],
		    		'totnghieploai'  		=> $daihoc['totnghieploai'][$i],
		    		'tgcongnhanbang'  		=> $daihoc['tgcongnhanbang'][$i],
		    		'nuochoctap'  			=> $daihoc['nuochoctap'][$i],
		    		'ngonngu_sudung'  		=> $daihoc['ngonngu_sudung'][$i],
		    		'loaicmdt'				=> 'daihoc',
	    		);
	    	}
			if(!empty($ttcb['daihoc'])){
				$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'loaicmdt' => 'daihoc'));
	    		$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp1);
			}else{
				if(!empty($daihoc['namtotnghiep'][0]) && !empty($daihoc['id_nganh'][0]) && !empty($daihoc['namcapbang'][0])){
	    			$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp1);
				}else{
					setMessages("error",'Ngành học của đại học hoặc năm tốt nghiệp hoặc năm cấp bằng không được để trông!', 'Thông báo');
					return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');					
				}
			}

    		$caodang = array(
    			'id_canbo'  			=> $macb,
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtn_cd'),
	    		'id_nganh'  			=> $this->input->post('nganh_cd'),
	    		'noicap'  				=> $this->input->post('noicap_cd'),
	    		'loaicmdt'				=> 'caodang',
	    	);
    		if(!empty($ttcb['caodang'])){
    			$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'loaicmdt' => 'caodang'));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $caodang); // thêm giáo sư
	    	}else{
	    		if(!empty($caodang['namtotnghiep']) && !empty($caodang['id_nganh'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin', $caodang); // thêm giáo sư
		    	}
		    }
	    	if($insert > 0 || $update > 0){
	    		setMessages('success','Lưu thông tin quán trình đào tạo thành công','Thông báo');
    			$this->session->set_flashdata('trangthai', 1);
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}else{
	    		setMessages('error','Lưu thông tin thất bại!','Thông báo');
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function xoathacsi($id, $macb){
	    	$row = $this->Mthongtincanbo->delete(' tbl_chuongtrinhdaotao_thongtin','id',$id);
	    	if($row > 0){
	    		setMessages('success','Xóa thành công','Thông báo');
	    		$this->session->set_flashdata('trangthai', 1);
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}else{
	    		setMessages('error','Xóa thành bại!','Thông báo');
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function xoadaihoc($id, $macb){
	    	$row = $this->Mthongtincanbo->delete(' tbl_chuongtrinhdaotao_thongtin','id',$id);
	    	if($row > 0){
	    		setMessages('success','Xóa thành công','Thông báo');
	    		$this->session->set_flashdata('trangthai', 1);
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}else{
	    		setMessages('error','Xóa thành bại!','Thông báo');
	    		return redirect('danhsachcanbo?macb='.$macb.'&trangthai=1');
	    	}
	    }

	    public function covername($name){
	    	$nam_array = explode(' ',strtoupper($name));
	    	$short_name = '';
	    	foreach ($nam_array as $key => $value) {
	    		$short_name .= substr($value, 0, 1);
	    	}
	    	return $short_name;
	    }

	    public function danhmuc(){
	    	$data['tbl_nganh']  				= $this->Mthongtincanbo->get('tbl_nganh');
	    	$data['tbl_nhomnganh']  			= $this->Mthongtincanbo->get('tbl_nhomnganh');
	    	$data['tbl_tongiao']  				= $this->Mthongtincanbo->get('tbl_tongiao');
	    	$data['tbl_dantoc']  				= $this->Mthongtincanbo->get('tbl_dantoc');
	    	$data['tbl_quyen']  				= $this->Mthongtincanbo->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  				= $this->Mthongtincanbo->get(' tbl_taikhoan');
	    	$data['tbl_hocham']  				= $this->Mthongtincanbo->get(' tbl_hocham');
	    	$data['tbl_hocvi']  				= $this->Mthongtincanbo->get('tbl_hocvi');
	    	$data['tbl_chuyenmondaotao']	  	= $this->Mthongtincanbo->get('tbl_chuyenmondaotao');
	    	$data['tbl_donvi']	  				= $this->Mthongtincanbo->get('tbl_donvi');
	    	$data['tbl_bomon']	  				= $this->Mthongtincanbo->get('tbl_bomon');
	    	$data['tbl_chucvu']	  				= $this->Mthongtincanbo->get('tbl_chucvu');
	    	$data['tbl_namtn_chuyenmondaotao']	= $this->MQuy_hoach->get_namtn_chuyenmondaotao();
	    	$data['tbl_quyhoach']  				= $this->MQuy_hoach->get('tbl_quyhoach');
	    	$data['tbl_chungchi']				= $this->Mthongtincanbo->get('tbl_chungchi');
	    	$data['tbl_congtac']				= $this->Mthongtincanbo->get('tbl_congtac');
	    	$data['tbl_thidua_khenthuong']		= $this->Mthongtincanbo->get('tbl_thidua_khenthuong');
			$tbl_congtac 						= $this->MQuy_hoach->get('tbl_congtac');
			$data['tbl_chedo']  				= $this->MChe_do->get('tbl_chedo');
	    	$data['tbl_deantuyensinh']  		= $this->Mdats->get('tbl_deantuyensinh');

	    	foreach ($data['tbl_deantuyensinh'] as $key => $value) {
				$data['ten_deantuyensinh'][$value['id_deantuyensinh']] = $value['ten_deantuyensinh'];
			}
			foreach ($data['tbl_chedo'] as $key => $value) {
				$data['ten_chedo'][$value['id_chedo']] = $value['ten_chedo'];
			}
	    	foreach($tbl_congtac as $key => $val){
	    		$data['tenct'][$val['id_cong_tac']] = $val['cong_tac'];
	    	} 
	    	$tbl_nhom_khenthuong = $this->MQuy_hoach->get('tbl_nhom_khenthuong');
	    	foreach($tbl_nhom_khenthuong as $key => $val){
	    		$data['tennhomkhenthuong'][$val['id']] = $val['tieudekhenthuong'].'('. $val['nambd'].'-'. $val['namkt'].')';
	    	}
	    	foreach ($data['tbl_quyhoach'] as $key => $value) {
				$data['ten_quyhoach'][$value['id_quyhoach']] = $value['ten_quyhoach'];
			}
	    	foreach ($data['tbl_chuyenmondaotao'] as $key => $value) {
	    		$data['tencmdt'][$value['id_chuyen_mon']] = $value['chuyen_mon'];
	    	}

	    	foreach ($data['tbl_hocham'] as $key => $value) {
	    		$data['ten_hocham'][$value['id_hoc_ham']] = $value['hoc_ham'];
	    		$data['ma_hocham'][$value['id_hoc_ham']] = $value['id_hoc_ham'];
	    	}

	    	foreach ($data['tbl_chungchi'] as $key => $value) {
	    		$data['chung_chi'][$value['id_chung_chi']] = $value['chung_chi'];
	    		$data['id_chung_chi'][$value['id_chung_chi']] = $value['id_chung_chi'];
	    	}
	    	
	    	foreach ($data['tbl_hocvi'] as $key => $value) {
	    		$data['ten_hocvi'][$value['id_hoc_vi']] = $value['hoc_vi'];
	    		$data['ma_hocvi'][$value['id_hoc_vi']] = $value['id_hoc_vi'];
	    	}
	    	
	    	$hocham                     = $this->Mthongtincanbo->get('tbl_canbo_hocham');
	    	$hocvi                      = $this->Mthongtincanbo->get('tbl_canbo_hocvi');
	    	foreach ($hocham as $key => $value) {
	    		$data['hocham'][$value['id_can_bo']] = $data['ten_hocham'][$value['id_hoc_ham']];
	    	}

	    	foreach ($hocvi as $key => $value) {
	    		$data['hocvi'][$value['id_can_bo']] = $data['ten_hocvi'][$value['id_hoc_vi']];
	    	}
	    	foreach ($data['tbl_nganh'] as $key => $value) {
	    		$data['tennganh'][$value['id_nganh']] = $value['nganh'];
	    	}
	    	$nganh 						= $this->Mthongtincanbo->get('tbl_canbo_nganh');
	    	foreach ($nganh as $key => $value) {
	    		$data['get_nganh'][$value['id_can_bo']] = $data['tennganh'][$value['id_nganh']];
	    		$data['get_manganh'][$value['id_can_bo']] = $value['id_nganh'];
	    	}
	    	foreach ($data['tbl_nhomnganh'] as $key => $value) {
	    		$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
	    	}
	    	foreach ($data['tbl_dantoc'] as $key => $value) {
	    		$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
	    	}
	    	$get_tecb = $this->Mthongtincanbo->get('tbl_canbo');
	    	foreach($get_tecb as $key => $val){
	    		$data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
	    		$data['ngaysinh'][$val['id_can_bo']] = $val['ngay_sinh'];
	    	} 

	    	return $data;
	    }
	}
