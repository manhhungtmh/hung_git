<?php 

	class Cdanhsachcanbo extends MY_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model("canbo/Mthongtincanbo");
	    }
	    public function index(){
	    	$canbo = $this->Mthongtincanbo->get('tbl_canbo');
	    	if($this->input->get('macb')){
	    		$macb = $this->input->get('macb');
	    		$this->xemchitiet($macb);
	    		return;
	    	}
	    	$temp = array(
        		'template'  => 'danhmuc/Vdanhsachbanbo',
        		'data'     	=> array(
        			'message' 		=> getMessages(),
        			'getCanbo'		=> $canbo,
        			'danhmuc'       => $this->danhmuc(),
        		), 
        	);

        	$this->load->view('layout/content', $temp);
	    }
	    public function xemchitiet($macb){
	    	$canbo    	= $this->Mthongtincanbo->get_where('tbl_canbo', 'id_can_bo', $macb);
	    	$pgs 		= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'id_namcmdt' => 1));
	    	$tiensi 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'id_namcmdt' => 2));
	    	$thacsi 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'id_namcmdt' => 3));
	    	$daihoc 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'id_namcmdt' => 4));
	    	$caodang 	= $this->Mthongtincanbo->get_many_where('tbl_chuongtrinhdaotao_thongtin',array('id_canbo' => $macb, 'id_namcmdt' => 5));
	    	if(empty($pgs)){
	    		$pgs[0] = "";
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
	    	$data1 = array(
	    		'pgs'       => $pgs[0],
	    		'tiensi'    => $tiensi[0],
	    		'thacsi'    => $thacsi,
	    		'daihoc'	=> $daihoc,
	    		'caodang'   => $caodang[0],
	    	);

	    	if($this->input->post('luuthongtin')){
	    		$this->luuthongtin_qtdt($macb, $this->danhmuc(), $data1);
	    	}
	    	if($this->input->post('xoathacsi')){
	    		$id = $this->input->post('xoathacsi');
	    		$this->xoathacsi($id,$macb);
	    	}
	    	if($this->input->post('xoadaihoc')){
	    		$id = $this->input->post('xoadaihoc');
	    		$this->xoadaihoc($id,$macb);
	    	}
	    	// $danhmuc   = $this->danhmuc(),
	    	$dulieu = array(
	    		'data' => $data1,
        		'danhmuc'   => $this->danhmuc(),
	    	);
	    	$form  = array(
				'pgs'      	=> $this->parser->parse('mauform_Quatrinhdaotao/Vpgs',$dulieu,true),
				'tiensi'    => $this->parser->parse('mauform_Quatrinhdaotao/Vtiensi',$dulieu,true),
				'thacsi'    => $this->parser->parse('mauform_Quatrinhdaotao/Vthacsi',$dulieu,true),
				'daihoc'    => $this->parser->parse('mauform_Quatrinhdaotao/Vdaihoc',$dulieu,true),
				'caodang'   => $this->parser->parse('mauform_Quatrinhdaotao/Vcaodang',$dulieu,true),
        	);
			$temp = array(
        		'template' => 'canbo/Vthongtincanbo',
        		'data'     => array(
        			'message' 	=> getMessages(),
        			'canbo'		=> $canbo[0],
        			'danhmuc'   => $this->danhmuc(),
        			'form'      => $form,
        			'trangthai' => getMessages('trangthai'),

        		), 
        	);
 			$temp['data']['quatrinhdaotao'] = $this->parser->parse('hoso_canbo/Vquatrinhdaotao',$temp['data'],true);
 			$temp['data']['lylich'] = $this->parser->parse('hoso_canbo/Vlylich',$temp['data'],true);

        	$this->load->view('layout/content', $temp);
	    }
	    public function luuthongtin_qtdt($macb, $danhmuc, $ttcb){
	    	$canbo = $this->Mthongtincanbo->get_where('tbl_canbo', 'id_can_bo', $macb);
	    	$id_chuyen_mon_cu = $canbo[0]['id_chuyen_mon'];
	    	$tbl_chuyenmondaotao = array(
	    		'id_chuyen_mon' => time(),
	    		'chuyen_mon'    => $this->input->post('id_chuyenmondaotao'),
	    		'chuyen_mon_vt' => $this->covername($this->input->post('id_chuyenmondaotao'))
	    	);
	    	$this->Mthongtincanbo->insert('tbl_chuyenmondaotao',$tbl_chuyenmondaotao );
	    	$update = $this->Mthongtincanbo->update_set('tbl_canbo', 'id_can_bo', $macb, array('id_chuyen_mon' => $tbl_chuyenmondaotao['id_chuyen_mon']));
	    	if($tbl_chuyenmondaotao['id_chuyen_mon'] != $id_chuyen_mon_cu){
	    		$this->Mthongtincanbo->delete(' tbl_chuyenmondaotao','id_chuyen_mon',$id_chuyen_mon_cu);
	    	}
	    	$pgs = array(
	    		'id_canbo'  			=> $macb,
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtotnghiep_pgs'),
	    		'id_nganh'  			=> $this->input->post('nganh_pgs'),
	    		'id_namcmdt'			=> 1,
	    	);
	    	if(!empty($ttcb['pgs'])){
	    		$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'id_namcmdt' => 1));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $pgs); // thêm giáo sư
	    	}else{
		    	if(!empty($pgs['namtotnghiep']) && !empty($pgs['id_nganh'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $pgs); // thêm giáo sư
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
	    		'id_namcmdt'			=> 2,
	    	);

			if(!empty($ttcb['tiensi'])){
				$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'id_namcmdt' => 2));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $tiensi); // 
	    	}else{
		    	if(!empty($tiensi['namtotnghiep']) && !empty($tiensi['id_nganh']) && !empty($tiensi['namcapbang'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $tiensi); // thêm giáo sư
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
	    		'id_namcmdt'			=> 3,
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
		    		'id_namcmdt'			=> 3,
	    		);
	    	}
	    	if(!empty($ttcb['thacsi'])){
				$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'id_namcmdt' => 3));
	    		$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp);
	    	}else{
	    		if(!empty($thacsi['namtotnghiep'][0]) && !empty($thacsi['id_nganh'][0]) && !empty($thacsi['namcapbang'][0])){
	    			$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp);
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
	    		'id_namcmdt'			=> 4,
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
		    		'id_namcmdt'			=> 4,
	    		);
	    	}
			if(!empty($ttcb['daihoc'])){
				$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'id_namcmdt' => 4));

	    		$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp1);
			}else{
				if(!empty($daihoc['namtotnghiep'][0]) && !empty($daihoc['id_nganh'][0]) && !empty($daihoc['namcapbang'][0])){
	    			$insert = $this->Mthongtincanbo->insert_batch('tbl_chuongtrinhdaotao_thongtin',  $temp1);
				}
			}

    		$caodang = array(
    			'id_canbo'  			=> $macb,
	    		'id_chuyenmondaotao'  	=> $canbo[0]['id_chuyen_mon'],
	    		'namtotnghiep'  		=> $this->input->post('namtn_cd'),
	    		'id_nganh'  			=> $this->input->post('nganh_cd'),
	    		'noicap'  				=> $this->input->post('noicap_cd'),
	    		'id_namcmdt'			=> 5,
	    	);
    		if(!empty($ttcb['caodang'])){
    			$this->Mthongtincanbo->delete_many_where('tbl_chuongtrinhdaotao_thongtin', array('id_canbo' => $macb, 'id_namcmdt' => 5));
	    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin',  $caodang); // thêm giáo sư
	    	}else{
	    		if(!empty($caodang['namtotnghiep']) && !empty($caodang['id_nganh'])){
		    		$insert = $this->Mthongtincanbo->insert('tbl_chuongtrinhdaotao_thongtin', $caodang); // thêm giáo sư
		    	}
		    }
	    	if($insert > 0 || $update > 0){
	    		setMessages('success','Lưu thông tin thành công','Thông báo');
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
	    	$data['tbl_dantoc']  				= $this->Mthongtincanbo->get('tbl_dantoc');
	    	$data['tbl_tongiao']  				= $this->Mthongtincanbo->get('tbl_tongiao');
	    	$data['tbl_dantoc']  				= $this->Mthongtincanbo->get('tbl_dantoc');
	    	$data['tbl_quyen']  				= $this->Mthongtincanbo->get(' tbl_quyen');
	    	$data['tbl_taikhoan']  				= $this->Mthongtincanbo->get(' tbl_taikhoan');
	    	$data['tbl_hocham']  				= $this->Mthongtincanbo->get(' tbl_hocham');
	    	$data['tbl_hocvi']  				= $this->Mthongtincanbo->get('tbl_hocvi');
	    	$data['tbl_chuyenmondaotao']	  	= $this->Mthongtincanbo->get('tbl_chuyenmondaotao');
	    	$data['tbl_namtn_chuyenmondaotao']	= $this->Mthongtincanbo->get('tbl_namtn_chuyenmondaotao');
	    	foreach ($data['tbl_chuyenmondaotao'] as $key => $value) {
	    		$data['tencmdt'][$value['id_chuyen_mon']] = $value['chuyen_mon'];
	    	}
	    	foreach ($data['tbl_hocham'] as $key => $value) {
	    		$data['ten_hocham'][$value['id_hoc_ham']] = $value['hoc_ham'];
	    		$data['ma_hocham'][$value['id_hoc_ham']] = $value['id_hoc_ham'];
	    	}
	    	foreach ($data['tbl_hocvi'] as $key => $value) {
	    		$data['ten_hocvi'][$value['id_hoc_vi']] = $value['hoc_vi'];
	    		$data['ma_hocvi'][$value['id_hoc_vi']] = $value['id_hoc_vi'];
	    	}
	    	
	    	$hocham                     = $this->Mthongtincanbo->get('tbl_canbo_hocham');
	    	$hocvi                      = $this->Mthongtincanbo->get('tbl_canbo_hocvi');
	    	foreach ($hocham as $key => $value) {
	    		$data['hocham'][$value['id_can_bo']] = $data['ma_hocham'][$value['id_hoc_ham']];
	    	}
	    	foreach ($hocvi as $key => $value) {
	    		$data['hocvi'][$value['id_can_bo']] = $data['ma_hocvi'][$value['id_hoc_vi']];
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
	    	} 

	    	return $data;
	    }
	}
