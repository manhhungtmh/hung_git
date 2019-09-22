<?php 
	/**
	 * 
	 */
	class Cchungchi extends MY_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('hoso_canbo/Mchungchi');
		}
		public function index()
		{
			if($this->input->post('submit')){
				$this->insertchungchi();
			}
			if($this->input->post('delete_chungchi')){
				$this->deletechungchi();
			}
			if ($this->input->post('update')) {
				$this->updatechungchi();
			}
			if ($this->input->post('huy')) {
				$this->huyupdate();
			}
			$data['url'] = base_url();

			$id_chung_chi = $this->input->get('id_chung_chi');
			$temp = array(
	    			'template' =>  'hoso_canbo/Vchungchi',
    				'data'     => array(
    					'message'        => getMessages(),
						'chung_chi'			=> $this->Mchungchi->getListchungchi(),
    					'chungchi'     		=> $this->Mchungchi->getchungchi($id_chung_chi),
    				),
	    	);

			$temp['data']['message'] = getMessages();
			$temp['data']['chung_chi']=$this->Mchungchi->getListchungchi();
			$temp['template']='hoso_canbo/Vchungchi';

			$this->load->view('layout/content',$temp);
		}
		public function insertchungchi(){
			$data = array(
				'id_chung_chi'	=>time(),
				'chung_chi'		=>$this->input->post('txtHoten'),
			);
			$row=$this->Mchungchi->insert('tbl_chungchi',$data);
			if($row>0){

			 setMessages('success', 'Thêm chứng chỉ thành công', 'Thông báo');
				return redirect('chungchi');
			}
			else{
				setMessages('error', 'Thêm chứng chỉ thất bại', 'Thông báo');
				return redirect('chungchi');
			}
		}
		public function deletechungchi()
		{
			$id_chung_chi = $this->input->post('delete_chungchi');
	    	$row1 = $this->Mchungchi->xoachungchi($id_chung_chi);
	    	if($row1>0){
	    		setMessages('error','không thể xóa! có cán bộ đang giữ chứng chỉ này','Thông báo');
	    		return redirect('chungchi');
	    	}

			$row = $this->Mchungchi->delete('tbl_chungchi','id_chung_chi',$id_chung_chi);
			if($row>0){
					setMessages('success', 'Xóa chứng chỉ thành công', 'Thông báo');
				return redirect('chungchi');
			}
			else{
				setMessages('error', 'Xóa chứng chỉ thất bại', 'Thông báo');
				return redirect('chungchi');

			}
		}
		public function updatechungchi()
		{
				$id_chung_chi = $this->input->post('update');
				$data=array(
					'chung_chi'=>$this->input->post('txtHoten'),
				);
				$row = $this->Mchungchi->update('tbl_chungchi','id_chung_chi', $id_chung_chi,$data);
			if($row>0){
				setMessages('success', 'Cập nhật thành công', 'Thông báo');
    			redirect('chungchi');
			}
			else{
				setMessages('error', 'Cập nhật thất bại', 'Thông báo');
	    		redirect('chungchi');
			}
		}
		public function huyupdate()
		{
    		return redirect('chungchi');
				$row = $this->Mchungchi->updatechungchi($id_chung_chi, $data);
				if ($row > 0 ) {
					setMessages('success', 'Cập nhật chứng chỉ thành công', 'Thông báo');
					return redirect('chungchi');
				}else {
					setMessages('error', 'Cập nhật chứng chỉ thất bại', 'Thông báo');
					return redirect('chungchi');
				}
		}
	
	}

?>