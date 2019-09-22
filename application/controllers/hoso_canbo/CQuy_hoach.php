<?php 
	/**
	 * 
	 */
	class CQuy_hoach extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/MQuy_hoach');
		}
		public function index(){
			// $macb = $this->input->get('id');
			$ds_canbo = $this->MQuy_hoach->get('tbl_canbo');
			if($this->input->post('luuhoso')){
				$this->luuhoso();
			}
			if($this->input->post('themquyhoach')){
				$this->themquyhoach();
			}
			if($this->input->post('capnhap_quyhoach')){
				$this->capnhap_quyhoach();
			}
			if($this->input->post('xoa_quyhoach')){
				$this->xoa_quyhoach();
			}
			$quyhoach 	 = $this->MQuy_hoach->get('tbl_quyhoach');
			$id_quyhoach = $this->MQuy_hoach->select_where('tbl_quyhoach','id_quyhoach',null,null);
			$arr_id =[];
			foreach ($id_quyhoach as $key => $value) {
				$arr_id[] = $value['id_quyhoach'];
			}
			$quyhoach_in = $this->MQuy_hoach->get_where_in1('tbl_canbo_quyhoach','id_quyhoach',$arr_id);
			$arrquyhoanh= [];
			foreach ($quyhoach_in as $key => $value) {
				$arrquyhoanh[] = $value['id_quyhoach'];
			}
			$temp = array(
				'template' =>  'hoso_canbo/VQuy_hoach',
				'data'     => array(
					'arrquyhoanh'	=> $arrquyhoanh,
					'quyhoach'		=> $quyhoach,
					'ds_canbo'  	=> $ds_canbo,
					'message'   	=> getMessages(),
					'danhmuc'   	=> $this->danhmuc(),
				),
			);
			$this->load->view('layout/content', $temp);
		}
		public function themquyhoach(){
			trim($data['ten_quyhoach'] 	= $this->input->post('ten_quyhoach'));
			$data['nam_batdau']   	= $this->input->post('nam_batdau');
			$data['nam_ketthuc']   	= $this->input->post('nam_ketthuc');
			$check = $this->MQuy_hoach->insert('tbl_quyhoach',$data);
			if($check > 0) {
				setMessages('success','Thêm thành công');
				return redirect('quyhoach');
			}
		}
		public function capnhap_quyhoach(){
			trim($data['ten_quyhoach'] 	= $this->input->post('ten_quyhoach'));
			$data['nam_batdau']   	= $this->input->post('nam_batdau');
			$data['nam_ketthuc']   	= $this->input->post('nam_ketthuc');
			$check = $this->MQuy_hoach->update('tbl_quyhoach','id_quyhoach',$id,$data);
			if($check > 0) {
				setMessages('success','Sửa thành công');
				return redirect('quyhoach');
			}
		}
		public function xoa_quyhoach(){
			$id = $this->input->post('xoa_quyhoach');
			$check = $this->MQuy_hoach->delete('tbl_quyhoach','id_quyhoach',$id);
			if($check > 0) {
				setMessages('success','Xóa thành công');
				return redirect('quyhoach');
			}
		}
		public function luuhoso(){
			// $macb = $this->input->get('id');
			$array_quyhoach = array(
				'id_canbo'			=> $this->input->post('tencb'),
				'chucvu'		 	=> $this->input->post('chucvu'),
				'thoigian_batdau' 	=> $this->input->post('thoigian_batdau'),
				'thoigian_ketthuc' 	=> $this->input->post('thoigian_ketthuc'),
			);
			$temp = array();
			for ($i=0; $i < count($array_quyhoach['chucvu']) ; $i++) { 
				$temp[] = array(
					'id_canbo'				=> $array_quyhoach['id_canbo'][$i],
					'chucvu'				=> $array_quyhoach['chucvu'][$i],
					'thoigian_batdau'   	=> $array_quyhoach['thoigian_batdau'][$i],
					'thoigian_ketthuc'   	=> $array_quyhoach['thoigian_ketthuc'][$i],
				);
			}
			if(!empty($array_quyhoach)){
				$this->MQuy_hoach->delete1('tbl_canbo_quyhoach');
				$check = $this->MQuy_hoach->insert_batch('tbl_canbo_quyhoach',$temp);
			}
			if($check > 0){
				setMessages('success','Lưu hồ sơ thành công','Thông báo');
			}
		}
		public function Ds_Quy_hoach(){
			$danhsach = $this->MQuy_hoach->danhsach();
			if($this->input->post('timkiem')){
				$canbo 		= $this->input->post('canbo');
				$nambatdau 	= $this->input->post('nambatdau');
				$namketthuc = $this->input->post('namketthuc');
				$ar = array(
					'canbo' 		=> $canbo,
					'nambatdau'		=> $nambatdau,
					'namketthuc'	=> $namketthuc,
				);
				$danhsach = $this->MQuy_hoach->timkiem($canbo,$nambatdau,$namketthuc);
			}
			$temp = array(
				'template' =>  'hoso_canbo/VDs_Quy_hoach',
				'data'     => array(
					'danhsach' => $danhsach,
					'message'  => getMessages(),
					'danhmuc'  => $this->danhmuc(),
				),
			);
			$this->load->view('layout/content', $temp);
		}
		public function danhmuc(){
			$data['tbl_nganh']  		= $this->MQuy_hoach->get('tbl_nganh');
			$data['tbl_nhomnganh']  	= $this->MQuy_hoach->get('tbl_nhomnganh');
			$data['tbl_dantoc']  		= $this->MQuy_hoach->get('tbl_dantoc');
			$data['tbl_dantoc']  		= $this->MQuy_hoach->get('tbl_dantoc');
			$data['tbl_quyen']  		= $this->MQuy_hoach->get(' tbl_quyen');
			foreach ($data['tbl_nganh'] as $key => $value) {
				$data['tennganh'][$value['id_nganh']] = $value['nganh'];
			}
			foreach ($data['tbl_nhomnganh'] as $key => $value) {
				$data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
			}
			foreach ($data['tbl_dantoc'] as $key => $value) {
				$data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
			}

			return $data;
		}
	}
	?>