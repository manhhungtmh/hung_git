<?php 
	/**
	 * 
	 */
	class CNhanSu_ChucVu extends MY_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/MNhanSu_ChucVu');
		}
		public function index()
		{
			$machucvu = $this->input->get('machucvu');
			$getchucvu = [];
			if($this->input->get('machucvu')){
				$getchucvu = $this->MNhanSu_ChucVu->getchucvu($machucvu);
			}
			if($this->input->post('submit')){
				$this->insert();
			}
			if($this->input->post('delete')){
				$this->delete();
			}
			if ($this->input->post('update')) {
				$this->update();
			}
			$data['url'] = base_url();
			$temp = array(
	    			'template' =>  'hoso_canbo/VNhanSu_ChucVu',
    				'data'     => array(
    					'message'       => getMessages(),
						'chucvu'		=> $this->MNhanSu_ChucVu->getListchucvu(),
    					'cv'     		=> $getchucvu,
    				),
	    	);
			$this->load->view('layout/content',$temp);
		}
		public function insert(){
			$data = array(
				'id_chuc_vu'  =>time(),
				'ten_chuc_vu' =>$this->input->post('txtHoten'),
				'chuc_vu_vt'  => $this->input->post('txttenvt')
			);
			$row=$this->MNhanSu_ChucVu->insert('tbl_chucvu',$data);
			if($row>0){
				setMessages('success', 'Thêm thành công', 'Thông báo');
	    		redirect('chucvu');
			}
			else{
				setMessages('error', 'Thêm thất bại', 'Thông báo');
	    		redirect('chucvu');
			}
		}
		public function delete()
		{
			$id_chuc_vu = $this->input->post('delete');
			$row = $this->MNhanSu_ChucVu->delete('tbl_chucvu','id_chuc_vu',$id_chuc_vu);
			if($row>0){
				setMessages('success', 'Xóa thành công', 'Thông báo');
	    		redirect('chucvu');
			}
			else{
				setMessages('error', 'Xóa thất bại', 'Thông báo');
	    		redirect('chucvu');
			}
		}
		public function update()
		{
			$id_chuc_vu = $this->input->post('update');
			$data=array(
				'ten_chuc_vu'=>$this->input->post('txtHoten'),
				'chuc_vu_vt' => $this->input->post('txttenvt')
			);
			$row = $this->MNhanSu_ChucVu->update('tbl_chucvu','id_chuc_vu', $id_chuc_vu,$data);
			if($row>0){
			setMessages('success', 'Cập nhật thành công', 'Thông báo');
    		redirect('chucvu');
			}
			else{
				setMessages('error', 'Cập nhật thất bại', 'Thông báo');
	    		redirect('chucvu');
			}
		}
	
	}

?>