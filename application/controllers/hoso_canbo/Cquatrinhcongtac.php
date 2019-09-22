<?php 
	/**
	 * summary
	 */
	class Cquatrinhcongtac extends CI_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->load->model('hoso_canbo/Mquatrinhcongtac');
	    }

	    public function index(){
	    	$id_canbo = "CBGV2"; //Khoi tao gia tri ban dau cho ma can bo
	    	$temp = array(
        		'template' => 'danhmuc/Vquatrinhcongtac',
        		'data'     => array(
        			'message' 		=> getMessages(),
        			'id_canbo' 		=> $id_canbo,
        			'danhmuc' 		=> $this->danhmuc(),
        			'cacchungchi' 	=> $this->Mchungchi->getListchungchi(),
        		),
        	);
        	$this->load->view('layout/content', $temp);
	    }

	    public function danhmuc(){
	    	$canbo = $this->Mquatrinhcongtac->get('tbl_canbo');
	    	foreach ($canbo as $key => $val) {
	    		$data['canbo'][$val['id_can_bo']] = $val;
	    	}
	    	return $data;
	    }
	}
?>