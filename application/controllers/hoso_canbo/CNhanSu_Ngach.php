<?php 
	/**
	 * 
	 */
	class CNhanSu_Ngach extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/MNhanSu_Ngach');
		}
		public function index()
		{
			if($this->input->post('submit')){
				$this->insert();
			}
			if($this->input->post('delete')){
				$this->delete();
			}
			if ($this->input->post('update')) {
				$this->update();
			}
			$id_ngach_giang_vien = $this->input->get('id_ngach_giang_vien');
			$data['url'] = base_url();
			$temp = array(
	    			'template' =>  'hoso_canbo/VNhanSu_Ngach',
    				'data'     => array(
    					'message'       => getMessages(),
						'Ngach'		=> $this->MNhanSu_Ngach->getListngach(),
    					'ngach'     		=> $this->MNhanSu_Ngach->getngach($id_ngach_giang_vien),
    				),
	    	);
			$this->load->view('layout/content',$temp);
		}
		public function insert(){
			$data = array(
				'id_ngach_giang_vien'=>time(),
				'ngach'=>$this->input->post('txtHoten'),
				'ngach_vt' => $this->input->post('txttenvt')
			);
			$row=$this->MNhanSu_Ngach->insert('tbl_ngachgiangvien',$data);
			if($row>0){
				setMessages('success', 'Thêm thành công', 'Thông báo');
	    		redirect('ngach');
			}
			else{
				setMessages('error', 'Thêm thất bại', 'Thông báo');
	    		redirect('ngach');
			}
		}
		public function delete()
		{
			$id_ngach_giang_vien = $this->input->post('delete');
			$row = $this->MNhanSu_Ngach->delete('tbl_ngachgiangvien','id_ngach_giang_vien',$id_ngach_giang_vien);
			if($row>0){
				setMessages('success', 'Xóa thành công', 'Thông báo');
	    		redirect('ngach');
			}
			else{
				setMessages('error', 'Xóa thất bại', 'Thông báo');
	    		redirect('ngach');
			}
		}
		public function update()
		{
				$id_ngach_giang_vien = $this->input->post('update');
				$data=array(
					'ngach'=>$this->input->post('txtHoten'),
					'ngach_vt' => $this->input->post('txttenvt')
				);
				$row = $this->MNhanSu_Ngach->update('tbl_ngachgiangvien','id_ngach_giang_vien', $id_ngach_giang_vien,$data);
				if($row>0){
					setMessages('success', 'Cập nhật thành công', 'Thông báo');
		    		redirect('ngach');
				}
				else{
					setMessages('error', 'Cập nhật thất bại', 'Thông báo');
		    		redirect('ngach');
				}
		}
	}

?>