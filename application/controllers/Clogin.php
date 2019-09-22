<?php 
	/**
	 * summary
	 */
	 class Clogin extends CI_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->load->model('Mlogin');
	    }
	    public function index(){
	    	$this->session->unset_userdata('user');
	    	if($this->input->post('dangnhap')){
	    		$data['tb'] = $this->check();
	    	}
	    	

	    	$data['message'] = getMessages();
	    	$this->parser->parse('Vlogin',$data);
	    }
	    public function check(){
	    	$user       = $this->input->post('username');
	    	$passwork   = $this->input->post('passwork');
	    	$check_user = $this->Mlogin->get_many_where('tbl_taikhoan', array('macb' => $user, 'matkhau' => sha1($passwork)));
	    	$get_tecb = $this->Mlogin->get('tbl_canbo');
	    	foreach($get_tecb as $key => $val){
	    		$data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
	    	} 
	    	if(!empty($check_user)){
	    		$session = array(
	    			'macb'    => $check_user[0]['macb'],
	    			'maquyen' => $check_user[0]['maquyen'],
	    			'tencb'   => $data['tencb'][$check_user[0]['macb']],
	    		);
	    		$this->session->set_userdata('user', $session);
					setMessages('success','Đăng nhập thành công','Thông báo');
	    		if($session['maquyen'] == 1){
	    			return redirect('Welcome');
	    		}
	    		if($session['maquyen'] != 1){
	    			return redirect('danhsachcanbo');
	    		}
	    	}else{
	    		return "Tài khoản hoặc mật khẩu không đúng!";
	    	}
	    }
	    public function logout(){
	    	$this->session->userdata = array();
	    	$this->session->sess_destroy();
	    	$this->input->set_cookie('', '', time()-36000);
	    	return redirect(base_url());
	    }
	}
	?>