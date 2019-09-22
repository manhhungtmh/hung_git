<?php 
	/**
	 * 
	 */
	class Cthongtinnghenghiep extends MY_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/Mthongtinnghenghiep');
		}
		public function index()
		{
			if($this->input->post('luuhoso')){
				$this->insert();
			}
			if($this->input->post('delete')){
				$this->delete();
			}
			if ($this->input->get('id_chuc_danh')){
				$id_chuc_danh = $this->input->get('id_chuc_danh');
				$id_can_bo = $this->input->post('canbo');
				$data['cv']=$this->Mthongtinnghenghiep->getchucdanh($id_chuc_danh);
				$data['cb_cv']=$this->Mthongtinnghenghiep->getcanbo_chucdanh($id_chuc_danh);
				$data['cb']=$this->Mthongtinnghenghiep->getcanbo($id_can_bo);
				$temp['data'] = $data;
			}
			if ($this->input->post('update')) {
				$this->update();
			}
			$data['url'] = base_url();
			$temp['data']['chucdanh']=$this->Mthongtinnghenghiep->getListchucdanh();
			$temp['data']['canbo']=$this->Mthongtinnghenghiep->getlistcanbo();
			$temp['template']='danhmuc/Vthongtinnghenghiep';
			$this->load->view('layout/content',$temp);
		}
		public function insert(){
			$data = array(
				'id_chuc_danh'  =>time(),
				'chuc_danh' =>$this->input->post('txtHoten'),
				'chuc_danh_vt'  => $this->input->post('txttenvt')
			);
			$time = array(
				'id_can_bo'		=>$this->input->post('canbo'),
				'id_chuc_danh'	=> $data['id_chuc_danh'],
				'tg_batdau'		=>$this->input->post('tg_batdau'),
				'tg_ketthuc'	=>$this->input->post('tg_ketthuc')
			);
			$row=$this->Mthongtinnghenghiep->insert($data,$time);
			if($row>0){
				return redirect('thongtinnghenghiep');
			}
			else{
				echo "failes";
			}
		}
		public function delete()
		{
			$id_chuc_danh = $this->input->post('delete');
			$row = $this->Mthongtinnghenghiep->delete($id_chuc_danh);
			if ($row > 0) {
				return redirect('thongtinnghenghiep');
			}
			else {
				echo "Xoa khong thanh cong";
			}
		}
		public function update()
		{
				$id_chuc_danh = $this->input->post('update');
				$data=array(
					'chuc_danh'=>$this->input->post('txtHoten'),
					'chuc_danh_vt' => $this->input->post('txttenvt')
				);
				$time = array(
					'tg_batdau'=>$this->input->post('tg_batdau'),
					'tg_ketthuc'=>$this->input->post('tg_ketthuc')
				);
				$row1 = $this->Mthongtinnghenghiep->update1($id_chuc_danh, $data);
				$row2 = $this->Mthongtinnghenghiep->update2($id_chuc_danh, $time);
				if ($row1 > 0 || $row2 > 0) {
					return redirect('thongtinnghenghiep');
				}else {
					return redirect('thongtinnghenghiep');
				}
		}
	
	}

?>