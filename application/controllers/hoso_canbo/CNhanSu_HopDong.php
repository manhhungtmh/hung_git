<?php 
	/**
	 * 
	 */
	class CNhanSu_HopDong extends MY_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/MNhanSu_HopDong');
		}
		public function index()
		{
			/*$a = time();
			echo $a;
			exit();*/
			if($this->input->post('submit')){
				$this->insert();
			}
			if($this->input->post('delete')){
				$this->delete();
			}
			if ($this->input->post('update')) {
				$this->update();
			}
			$id_hop_dong = $this->input->get('id_hop_dong');
			$id_loai_hop_dong = $this->input->get('id_loai_hop_dong');
			$data['url'] = base_url();
			$temp = array(
	    			'template' =>  'hoso_canbo/VNhanSu_HopDong',
    				'data'     => array(
    					'message'       => getMessages(),
						'hopdong'		=> $this->MNhanSu_HopDong->getListHopDong(),
    					'hd'   			=> $this->MNhanSu_HopDong->gethopdong($id_hop_dong),
						/*'lhd'			=> $this->MNhanSu_HopDong->getloaihopdong($id_loai_hop_dong),*/
						'loaihopdong'	=> $this->MNhanSu_HopDong->getListloaiHopDong()
    				),
	    	);
			$this->load->view('layout/content',$temp);
		}
		public function insert()
		{
			$data=array(
				'id_hop_dong'=>time(),
				'hop_dong'=>$this->input->post('txtHoten'),
				'id_loai_hop_dong' => $this->input->post('loai_hop_dong')
			);
			$row=$this->MNhanSu_HopDong->insert('tbl_hopdong',$data);
			if($row>0){
				setMessages('success', 'Thêm thành công', 'Thông báo');
	    		redirect('hopdong');
			}
			else{
				setMessages('error', 'Thêm thất bại', 'Thông báo');
	    		redirect('hopdong');
			}
		}
		public function delete()
		{
			$id_hop_dong = $this->input->post('delete');
			$row = $this->MNhanSu_HopDong->delete('tbl_hopdong','id_hop_dong',$id_hop_dong);
			if($row>0){
				setMessages('success', 'Xóa thành công', 'Thông báo');
	    		redirect('hopdong');
			}
			else{
				setMessages('error', 'Xóa thất bại', 'Thông báo');
	    		redirect('hopdong');
			}
		}
		public function update()
		{
				$id_hop_dong = $this->input->post('update');
				$data=array(
					'hop_dong'=>$this->input->post('txtHoten'),
					'id_loai_hop_dong' => $this->input->post('loai_hop_dong')
				);
				$row = $this->MNhanSu_HopDong->update('tbl_hopdong','id_hop_dong', $id_hop_dong,$data);
				if($row>0){
					setMessages('success', 'Cập nhật thành công', 'Thông báo');
	    			redirect('hopdong');
				}
				else{
					setMessages('error', 'Cập nhật thất bại', 'Thông báo');
		    		redirect('hopdong');
				}
		}
	}

?>