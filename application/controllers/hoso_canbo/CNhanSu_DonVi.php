<?php 
	/**
	 * 
	 */
	class CNhanSu_DonVi extends MY_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/MNhanSu_DonVi');
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
			$data['url'] = base_url();
			$id_don_vi = $this->input->get('id_don_vi');
			$temp = array(
	    			'template' =>  'hoso_canbo/VNhanSu_donvi',
    				'data'     => array(
    					'message'        => getMessages(),
						'donvi'			=> $this->MNhanSu_DonVi->getListdonvi(),
    					'dv'     		=> $this->MNhanSu_DonVi->getdonvi($id_don_vi),
    				),
	    	);
        	$this->load->view('layout/content', $temp);
		}
		public function insert(){
			$data = array(
				'id_don_vi'=>time(),
				'ten_don_vi'=>$this->input->post('txtHoten'),
				'don_vi_vt' => $this->input->post('txttenvt')
			);
			$row=$this->MNhanSu_DonVi->insert('tbl_donvi',$data);
			if($row>0){
				setMessages('success', 'Thêm thành công', 'Thông báo');
	    		redirect('donvi');
			}
			else{
				setMessages('error', 'Thêm thất bại', 'Thông báo');
	    		redirect('donvi');
			}
		}
		public function delete()
		{
			$id_don_vi = $this->input->post('delete');
			$row = $this->MNhanSu_DonVi->delete('tbl_donvi','id_don_vi',$id_don_vi);
			if($row>0){
				setMessages('success', 'Xóa thành công', 'Thông báo');
	    		redirect('donvi');
			}
			else{
				setMessages('error', 'Xóa thất bại', 'Thông báo');
	    		redirect('donvi');
			}
		}
		public function update()
		{
			$id_don_vi = $this->input->post('update');
			$data=array(
				'ten_don_vi'=>$this->input->post('txtHoten'),
				'don_vi_vt' => $this->input->post('txttenvt')
			);
			$row = $this->MNhanSu_DonVi->update('tbl_donvi','id_don_vi', $id_don_vi,$data);
			if($row>0){
				setMessages('success', 'Cập nhật thành công', 'Thông báo');
    			redirect('donvi');
			}
			else{
				setMessages('error', 'Cập nhật thất bại', 'Thông báo');
	    		redirect('donvi');
			}
		}
	
	}

?>