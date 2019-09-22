<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CexDanhsachcanbo extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Excel/MexDanhsachcanbo');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function index() {
        ini_set("memory_limit",-1);
        $this->xuat_excel();
    }

    public function xuat_excel() {
            $this->load->library('Excel');
            $objPHPExcel =new PHPExcel();
            $filename='BC GVCH mới'.date('d/m/Y');
            $objPHPExcel->getProperties()->setCreator("HOU")
                                             ->setLastModifiedBy("Administrator")
                                             ->setTitle("HOU")
                                             ->setSubject("HOU");
            $objPHPExcel->getDefaultStyle()->getFont()->setName('Times new Roman')->setSize(13);
            $objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getActiveSheet()->setTitle("Sheet 1");
            $session = $this->session->userdata('user');
            $data = $this->MexDanhsachcanbo->get('tbl_canbo');
            $dem = 7;
            $dem1 = count($data)+10;
            //Border
            $styleArray = array(
                'borders' => array(
                    'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                    )
                )
            );
            $objPHPExcel->getActiveSheet()->getStyle('A7:U'.$dem1)->applyFromArray($styleArray);
            // unset($styleArray);
            // Căn cỡ cột tự động
            foreach(range('A','Z') as $columnID){
                    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            // Căn cỡ hàng tự động
            foreach($objPHPExcel->getActiveSheet()->getRowDimensions() as $rd) {
                $rd->setRowHeight(-1);
            }

            //Xuống dòng
            $objPHPExcel->getActiveSheet()->getStyle('A7:U9')->getAlignment()->setWrapText(true);
            // Auto fillter
            $objPHPExcel->getActiveSheet()->setAutoFilter('A10:U10');
            // Merge cell
             $array_merge = array('A1:C1','A2:C2','A3:C3','J1:M1','K2:L2','D5:N5','A7:A9','C7:C9','F7:F9','J7:J9','L7:L9','N8:O8','P8:Q8','R8:S8','N7:S7');
             foreach($array_merge as $cell){
                 $objPHPExcel->getActiveSheet()->mergeCells($cell);
            }
            // Căn giữa ngang
             $canngang= array('A5:A'.$dem,'B5:H5','A7:U10','A11:A'.$dem1,'D11:K'.$dem1,'N11:N'.$dem1,'P11:P'.$dem1,'R11:R'.$dem1,'T11:T'.$dem1);
             foreach($canngang as $cell){
                 $objPHPExcel->getActiveSheet()->getStyle($cell)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }

            // Căn giữa dọc
            $array_vertical_center = array('A1:J15','A7:U10');
            foreach($array_vertical_center as $cell){
                $objPHPExcel->getActiveSheet()->getStyle($cell)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
            }

            // In đậm
            $array_bold = array('J1:M1','K2:M2','D5:N5');
            foreach($array_bold as $cell){
                $objPHPExcel->getActiveSheet()->getStyle($cell)->getFont()->setBold(true);
            }

            // In nghiêng
            $array_italic = array('A10:U10');
            foreach($array_italic as $cell){
                $objPHPExcel->getActiveSheet()->getStyle($cell)->getFont()->setItalic(true);
            }
            
            // Chỉnh cỡ font
            $array_font_size = array(
                'A1' => 12,
                'A2' => 12,
                'A3' => 12,
                'J1' => 9,
                'K2' => 9,
                'D5' => 12,
                'A7:U10' => 9,
                'A11:U'.$dem1 => 9,
            );
            foreach($array_font_size as $key => $value){
                $objPHPExcel->getActiveSheet()->getStyle($key)->getFont()->setSize($value);
            }

            // Chỉnh cỡ cột
            $array_column = array(
                'A' => 3,
                'B' => 8,
                'C' => 13,
                'D' => 7,
                'E' => 8,
                'F' => 8,
                'G' => 8,
                'H' => 8,
                'I' => 8,
                'J' => 8,
                'K' => 8,
                'L' => 9,
                'M' => 8,
                'N' => 8,
                'O' => 15,
                'P' => 8,
                'Q' => 15,
                'R' => 8,
                'S' => 15,
                'T' => 8,
                'U' => 8,
            );
            foreach($array_column as $key => $value){
                $objPHPExcel->getActiveSheet()->getColumnDimension($key)->setAutoSize(false);
                $objPHPExcel->getActiveSheet()->getColumnDimension($key)->setWidth($value);
            }

            //Chỉnh cỡ hàng fix cứng

            $array_row = array(
                '8' => 25,
                '9' => 25,
        
            );
            foreach($array_row as $key => $value){
                $objPHPExcel->getActiveSheet()->getRowDimension($key)->setRowHeight($value);
            }

            //*******************************************
            //************* NỘI DUNG ********************
            //*******************************************

            $array_content = array(
                'A1' => 'BỘ GIÁO DỤC VÀ ĐÀO TẠO',
                'A2' => 'Trường Đại học Mở Hà Nội',
                'A3' => 'Mã trường: MHN',
                'J1' => 'CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM',
                'K2' => 'Độc lập - Tự do - Hạnh phúc',
                'D5' => 'BÁO CÁO THỐNG KÊ DANH SÁCH ĐỘI NGŨ GIẢNG VIÊN CƠ HỮU TÍNH ĐẾN NGÀY '.date('d/m/Y'),
                'A7' => 'TT',
                'B7' => 'Mã ĐT',
                'C7' => 'Họ và tên',
                'D7' => 'Ngày,tháng',
                'D8' => 'năm sinh',
                'E7' => 'Số CMTND/',
                'E8' => 'CCCD/ hộ chiếu',
                'F7' => 'Quốc tịch',
                'G7' => 'Giới',
                'G8' => 'tính',
                'H7' => 'Năm',
                'H8' => 'tuyển dụng/',
                'H9' => 'ký hợp đồng',
                'I7' => 'Thời hạn',
                'I8' => 'hợp đồng',
                'J7' => 'Chức danh khoa học',
                'K7' => 'Trình',
                'K8' => 'độ',
                'L7' => 'Chuyên môn được đào tạo',
                'M7' => 'Giảng dạy',
                'M8' => 'môn chung',
                'N7' => 'Ngành/ trình độ chủ trì giảng dạy và tính chỉ tiêu tuyển sinh',
                'N8' => 'Đại học',
                'N9' => 'Mã',
                'O9' => 'Tên ngành',
                'P8' => 'Thạc sĩ',
                'P9' => 'Mã',
                'Q9' => 'Tên ngành',
                'R8' => 'Tiến sĩ',
                'R9' => 'Mã',
                'S9' => 'Tên ngành',
                'T7' => 'Mã trường',
                'U7' => 'Tên trường',
                'A10'=> '(1)',
                'C10'=> '(2)',
                'D10'=> '(3)',
                'E10'=> '(4)',
                'F10'=> '(5)',
                'G10'=> '(6)',
                'H10'=> '(7)',
                'I10'=> '(8)',
                'J10'=> '(9)',
                'K10'=> '(10)',
                'L10'=> '(11)',
                'M10'=> '(12)',
                'N10'=> '(13)',
                'O10'=> '(14)',
                'P10'=> '(15)',
                'Q10'=> '(16)',
                'R10'=> '(17)',
                'S10'=> '(18)',
                'T10'=> '(19)',
                'U10'=> '(20)',
            );

            $indexRow = 11;
            if (empty ($data))
            {
                echo "
                    Không có dữ liệu. Cán bộ vui lòng cập nhật dữ liệu vào
                    các ô nhập liệu trước mới có thể xuất báo cáo.
                    <br> Bấm <a href='".current_url()."'>vào đây</a> để trở về trang cập nhật kết quả
                    nckh &amp; chuyển giao công nghệ
                ";
                exit;
            }
            // --------------------------HỌC VỊ----------------------------------
            //Lấy ra danh sách học vị
            $ds_hocvi           = $this->MexDanhsachcanbo->get('tbl_hocvi');
            //Tạo một mảng và gán key là mã học vị và value là tên học vị
            foreach ($ds_hocvi as $key => $vl) {
                $hocvi_n[$vl['id_hoc_vi']] = $vl['hoc_vi_vt'];
            }
            //Lấy ra danh sách cán bộ học vị
            $hocvi              = $this->MexDanhsachcanbo->get('tbl_canbo_hocvi');
            //Tạo một mảng và gán key là mã cán bộ, value là học vị của cán bộ đó
            foreach ($hocvi as $key => $vl) {
                $hocvi_cb[$vl['id_can_bo']] = $hocvi_n[$vl['id_hoc_vi']];
            }
            // ---------------------------HỌC HÀM---------------------------------
            //Lấy ra danh sách học hàm
            $ds_hocham           = $this->MexDanhsachcanbo->get('tbl_hocham');
            //Tạo một mảng và gán key là mã học hàm và value là tên học hàm
            foreach ($ds_hocham as $key => $vl) {
                $hocham_n[$vl['id_hoc_ham']] = $vl['hoc_ham_vt'];
            }
            //Lấy ra danh sách cán bộ học hàm
            $hocham              = $this->MexDanhsachcanbo->get('tbl_canbo_hocham');
            //Tạo một mảng và gán key là mã cán bộ, value là học hàm của cán bộ đó
            foreach ($hocham as $key => $vl) {
                $hocham_cb[$vl['id_can_bo']] = $hocham_n[$vl['id_hoc_ham']];
            }

            // ---------------------------CHUYÊN MÔN ĐÀO TẠO---------------------------------
            //Lấy ra danh sách chuyên môn đào tạo
            $ds_cmdt               = $this->MexDanhsachcanbo->get('tbl_chuyenmondaotao');
            //Tạo một mảng và gán key là mã cmdt hàm và value là tên chuyên môn đào tạo
            foreach ($ds_cmdt as $key => $vl) {
                $cmdt_n[$vl['id_chuyen_mon']] = $vl['chuyen_mon'];
            }
            //Lấy ra danh sách cán bộ chuyên môn đào tạo
            $cmdt              = $this->MexDanhsachcanbo->get('tbl_chuongtrinhdaotao_thongtin');
            //Tạo một mảng và gán key là mã cán bộ, value là tên chuyên môn đào tạo của cán bộ đó
            foreach ($cmdt as $key => $vl) {
                $cmdt_cb[$vl['id_canbo']] = $cmdt_n[$vl['id_chuyenmondaotao']];
            }
            // ---------------------------ĐỀ ÁN TUYỂN SINH---------------------------------
            //Lấy ra danh sách tuyển sinh
            $ds_tuyensinh               = $this->MexDanhsachcanbo->get('tbl_deantuyensinh');
            //Tạo một mảng và gán key là mã dats hàm và value là tên đề án tuyển sinh
            foreach ($ds_tuyensinh as $key => $vl) {
                $dats_n[$vl['id_deantuyensinh']] = $vl['he_deantuyensinh'];
            }
            //Lấy ra danh sách cán bộ đề án tuyển sinh
            $dats              = $this->MexDanhsachcanbo->get('tbl_canbo_dats');
            //Tạo một mảng và gán key là mã cán bộ, value là tên đề án tuyển sinh của cán bộ đó
            foreach ($dats as $key => $vl) {
                $dats_cb[$vl['id_canbo']][] = $dats_n[$vl['id_deantuyensinh']];
            }
            foreach ($dats as $key => $vl) {
                $deohieu[$vl['id_canbo']][] = $vl;
            }

// --------------------DANH MỤC----------------------------
            $dm_nganh = $this->MexDanhsachcanbo->get('tbl_nganh');
            foreach ($dm_nganh as $key => $vl) {
                $dm_nganh1[$vl['id_nganh']] = $vl['nganh'];
            }
            $dm_quoctich = $this->MexDanhsachcanbo->get('tbl_quoctich');
            foreach ($dm_quoctich as $key => $vl) {
                $dm_quoctich1[$vl['id_quoc_tich']] = $vl['quoc_tich'];
            }
            // pr($dm_nganh1);
// --------------------END DANH MỤC----------------------------
            $stt = 1;
            foreach ($data AS $k => $v)
            {
                $array_content['A'.$indexRow] = $stt++;
                $array_content['B'.$indexRow] = $v['ma_dao_tao'];
                $array_content['C'.$indexRow] = $v['ho_ten'];
                $array_content['D'.$indexRow] = $v['ngay_sinh'];
                $array_content['E'.$indexRow] = $v['so_chung_minh'];
                $array_content['F'.$indexRow] = $dm_quoctich1[$v['id_quoc_tich']];
                $array_content['G'.$indexRow] = $v['gioi_tinh'];
                $array_content['H'.$indexRow] = $v['ngay_KG_voi_truong'];
                if(isset($hocham_cb[$v['id_can_bo']]) ){
                $array_content['J'.$indexRow] = $hocham_cb[$v['id_can_bo']];
                }
                if(isset($hocvi_cb[$v['id_can_bo']])){
                $array_content['K'.$indexRow] = $hocvi_cb[$v['id_can_bo']];
                }
                if(isset($cmdt_cb[$v['id_can_bo']])){
                $array_content['L'.$indexRow] = $cmdt_cb[$v['id_can_bo']];
                }
                if(isset($dats_cb[$v['id_can_bo']])){
                        // pr($dats_cb[$v['id_can_bo']]);
                    // foreach ($dats_cb as $key => $vl) {
                        // pr(count($vl));
                        for ($i = 0 ; $i <count($dats_cb[$v['id_can_bo']]); $i = $i + 1) {
                            if($dats_cb[$v['id_can_bo']][$i] == 'daihoc'){
                                $array_content['N'.$indexRow] = $deohieu[$v['id_can_bo']][$i]['id_nganh'];
                                $array_content['O'.$indexRow] = $dm_nganh1[$deohieu[$v['id_can_bo']][$i]['id_nganh']];
                            }    
                            if($dats_cb[$v['id_can_bo']][$i] == 'thacsi'){
                                $array_content['P'.$indexRow] = $deohieu[$v['id_can_bo']][$i]['id_nganh'];
                                $array_content['Q'.$indexRow] = $dm_nganh1[$deohieu[$v['id_can_bo']][$i]['id_nganh']];
                            }
                            if($dats_cb[$v['id_can_bo']][$i] == 'tiensi'){
                                $array_content['R'.$indexRow] = $deohieu[$v['id_can_bo']][$i]['id_nganh'];
                                $array_content['S'.$indexRow] = $dm_nganh1[$deohieu[$v['id_can_bo']][$i]['id_nganh']];
                            }
                        }
                    // }
                }
                $indexRow++;
            }
            // Muốn thêm nội dung động thì foreach array push là xong.
            foreach($array_content as $key => $value){
                $objPHPExcel->getActiveSheet()->setCellValue($key,$value);
            }

            // End chỉnh sửa nội dung
            // ob_end_clean();
            if (ob_get_contents()) ob_end_clean();

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment;filename=".$filename.".xls");
            header("Cache-Control: max-age=0");

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');
            exit();
    }
    public function danhmuc() {
            $data['tbl_nganh']                  = $this->MexDanhsachcanbo->get('tbl_nganh');
            $data['tbl_nhomnganh']              = $this->MexDanhsachcanbo->get('tbl_nhomnganh');
            $data['tbl_dantoc']                 = $this->MexDanhsachcanbo->get('tbl_dantoc');
            $data['tbl_tongiao']                = $this->MexDanhsachcanbo->get('tbl_tongiao');
            $data['tbl_dantoc']                 = $this->MexDanhsachcanbo->get('tbl_dantoc');
            $data['tbl_quyen']                  = $this->MexDanhsachcanbo->get(' tbl_quyen');
            $data['tbl_taikhoan']               = $this->MexDanhsachcanbo->get(' tbl_taikhoan');
            $data['tbl_hocham']                 = $this->MexDanhsachcanbo->get(' tbl_hocham');
            $data['tbl_hocvi']                  = $this->MexDanhsachcanbo->get('tbl_hocvi');
            $data['tbl_chuyenmondaotao']        = $this->MexDanhsachcanbo->get('tbl_chuyenmondaotao');
            $data['tbl_donvi']                  = $this->MexDanhsachcanbo->get('tbl_donvi');
            $data['tbl_bomon']                  = $this->MexDanhsachcanbo->get('tbl_bomon');
            $data['tbl_chucvu']                 = $this->MexDanhsachcanbo->get('tbl_chucvu');
            $data['tbl_namtn_chuyenmondaotao']  = $this->MQuy_hoach->get_namtn_chuyenmondaotao();
            $data['tbl_quyhoach']               = $this->MQuy_hoach->get('tbl_quyhoach');
            $data['tbl_chungchi']               = $this->MexDanhsachcanbo->get('tbl_chungchi');
            $data['tbl_congtac']                = $this->MexDanhsachcanbo->get('tbl_congtac');
            $data['tbl_thidua_khenthuong']      = $this->MexDanhsachcanbo->get('tbl_thidua_khenthuong');
            $data['tbl_chedo']                  = $this->MChe_do->get('tbl_chedo');
            $data['tbl_deantuyensinh']          = $this->Mdats->get('tbl_deantuyensinh');

            foreach ($data['tbl_deantuyensinh'] as $key => $value) {
                $data['ten_deantuyensinh'][$value['id_deantuyensinh']] = $value['ten_deantuyensinh'];
            }
            foreach ($data['tbl_chedo'] as $key => $value) {
                $data['ten_chedo'][$value['id_chedo']] = $value['ten_chedo'];
            }
            foreach ($data['tbl_quyhoach'] as $key => $value) {
                $data['ten_quyhoach'][$value['id_quyhoach']] = $value['ten_quyhoach'];
            }
            foreach ($data['tbl_chuyenmondaotao'] as $key => $value) {
                $data['tencmdt'][$value['id_chuyen_mon']] = $value['chuyen_mon'];
            }

            foreach ($data['tbl_hocham'] as $key => $value) {
                $data['ten_hocham'][$value['id_hoc_ham']] = $value['hoc_ham'];
                $data['ma_hocham'][$value['id_hoc_ham']] = $value['id_hoc_ham'];
            }

            foreach ($data['tbl_chungchi'] as $key => $value) {
                $data['chung_chi'][$value['id_chung_chi']] = $value['chung_chi'];
                $data['id_chung_chi'][$value['id_chung_chi']] = $value['id_chung_chi'];
            }
            
            foreach ($data['tbl_hocvi'] as $key => $value) {
                $data['ten_hocvi'][$value['id_hoc_vi']] = $value['hoc_vi'];
                $data['ma_hocvi'][$value['id_hoc_vi']] = $value['id_hoc_vi'];
            }
            
            $hocham                     = $this->MexDanhsachcanbo->get('tbl_canbo_hocham');
            $hocvi                      = $this->MexDanhsachcanbo->get('tbl_canbo_hocvi');
            foreach ($hocham as $key => $value) {
                $data['hocham'][$value['id_can_bo']] = $data['ma_hocham'][$value['id_hoc_ham']];
            }

            foreach ($hocvi as $key => $value) {
                $data['hocvi'][$value['id_can_bo']] = $data['ma_hocvi'][$value['id_hoc_vi']];
            }
            foreach ($data['tbl_nganh'] as $key => $value) {
                $data['tennganh'][$value['id_nganh']] = $value['nganh'];
            }
            $nganh                      = $this->MexDanhsachcanbo->get('tbl_canbo_nganh');
            foreach ($nganh as $key => $value) {
                $data['get_nganh'][$value['id_can_bo']] = $data['tennganh'][$value['id_nganh']];
                $data['get_manganh'][$value['id_can_bo']] = $value['id_nganh'];
            }
            foreach ($data['tbl_nhomnganh'] as $key => $value) {
                $data['ten_nhomnganh'][$value['id_nhom_nganh']] = $value['nhom_nganh'];
            }
            foreach ($data['tbl_dantoc'] as $key => $value) {
                $data['ten_dantoc'][$value['id_dan_toc']] = $value['dan_toc'];
            }
            $get_tecb = $this->MexDanhsachcanbo->get('tbl_canbo');
            foreach($get_tecb as $key => $val){
                $data['tencb'][$val['id_can_bo']] = $val['ho_ten'];
            } 

            return $data;
    }
}