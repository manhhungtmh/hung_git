<?php 
	/**
	 * summary
	 */
	class Ccacchungchi extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->load->model('hoso_canbo/Mcacchungchi');
	    }

	    public function index(){
	    	$data['id_chung_chi']	=$this->input->post('chung_chi');
	    	$id_canbo = $this->input->get('macb'); 
	    	$temp = array(
        		'template' => 'danhmuc/Vcacchungchi',
        		'data'     => array(
        			'message' 		=> getMessages(),
        			'id_canbo' 		=> $id_canbo,
        			'danhmuc' 		=> $this->danhmuc(),
        		),
        	);
        	$this->load->view('layout/content', $temp);

	    }

	    public function danhmuc(){
	    	$canbo = $this->Mcacchungchi->get('tbl_canbo');
			$data['tbl_chungchi']  	= $this->Mcacchungchi->get('tbl_chungchi');

	    	foreach ($canbo as $key => $val) {
	    		$data['canbo'][$val['id_can_bo']] = $val;
	    	}
	    	foreach ($data['tbl_chungchi'] as $key => $value) {
	    		$data['chung_chi'][$value['id_chung_chi']] = $value['chung_chi'];
	    		$data['id_chung_chi'][$value['id_chung_chi']] = $value['id_chung_chi'];
	    	}
	    	return $data;
	    }
	}
?>