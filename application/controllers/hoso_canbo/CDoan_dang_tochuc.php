<?php 
	/**
	 * 
	 */
	class CDoan_dang_tochuc extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/MDoan_dang_tochuc');
		}
		public function index(){
			$macb = $this->input->get('id');
			if($this->input->post('luuhoso')){
				$this->luuhoso();
			}
			$hoso_doandang = $this->MDoan_dang_tochuc->get_where('tbl_canbo_doandang','id_canbo',$macb);
			$temp = array(
				'template' =>  'hoso_canbo/VDoan_dang_tochuc',
				'data'     => array(
					'data'	=> $hoso_doandang,
					'message'  => getMessages(),
					'danhmuc'  => $this->danhmuc(),
				),
			);
			$this->load->view('layout/content', $temp);
		}
		public function Ds_Doan_dang_tochuc(){
			$danhsach = "";
			$tochuc = $this->input->get('tc');
			switch ($tochuc) {
				case "all":
					$danhsach = $this->MDoan_dang_tochuc->danhsach(null,$bienche);
					break;
				case "danguy":
					$danhsach = $this->MDoan_dang_tochuc->danhsach("Đảng ủy",null);
					break;
				case "congdoan":
					$danhsach = $this->MDoan_dang_tochuc->danhsach("BCH Công đoàn",null);
					break;
				case "hoidongtruong":
					$danhsach = $this->MDoan_dang_tochuc->danhsach("Hội đồng trường",null);
					break;
				case "doanthanhnien":
					$danhsach = $this->MDoan_dang_tochuc->danhsach("Đoàn thanh niên",null);
					break;
				case "khoahocdaotao":
					$danhsach = $this->MDoan_dang_tochuc->danhsach("Hội đồng Khoa học và Đào tạo",null);
					break;
				default:
					$danhsach = $this->MDoan_dang_tochuc->danhsach(null,null);
			}
			if($this->input->post('timkiem')){
				$bienche 			= $this->input->post('timkiem_bienche');
				switch ($tochuc) {
					case "all":
						$danhsach = $this->MDoan_dang_tochuc->danhsach(null,$bienche);
						break;
					case "danguy":
						$danhsach = $this->MDoan_dang_tochuc->danhsach("Đảng ủy",$bienche);
						break;
					case "congdoan":
						$danhsach = $this->MDoan_dang_tochuc->danhsach("BCH Công đoàn",$bienche);
						break;
					case "hoidongtruong":
						$danhsach = $this->MDoan_dang_tochuc->danhsach("Hội đồng trường",$bienche);
						break;
					case "doanthanhnien":
						$danhsach = $this->MDoan_dang_tochuc->danhsach("Đoàn thanh niên",$bienche);
						break;
					case "khoahocdaotao":
						$danhsach = $this->MDoan_dang_tochuc->danhsach("Hội đồng Khoa học và Đào tạo",$bienche);
						break;
					default:
						$danhsach = $this->MDoan_dang_tochuc->danhsach(null,$bienche);
				}
			}
			$vuatimkiem = $this->input->post('timkiem_bienche');
			$temp = array(
				'template' 		=>  'hoso_canbo/VDs_Doan_dang_tochuc',
				'data'     		=> array(
					'danhsach'  => $danhsach,
					'message'   => getMessages(),
					'danhmuc'   => $this->danhmuc(),
					'vuatimkiem'=> $vuatimkiem,
				),
			);
			// pr($temp['data']);
			$this->load->view('layout/content', $temp);
		}
		public function danhmuc(){
			$data['tbl_nganh']  		= $this->MDoan_dang_tochuc->get('tbl_nganh');
			$data['tbl_nhomnganh']  	= $this->MDoan_dang_tochuc->get('tbl_nhomnganh');
			$data['tbl_dantoc']  		= $this->MDoan_dang_tochuc->get('tbl_dantoc');
			$data['tbl_dantoc']  		= $this->MDoan_dang_tochuc->get('tbl_dantoc');
			$data['tbl_quyen']  		= $this->MDoan_dang_tochuc->get(' tbl_quyen');
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