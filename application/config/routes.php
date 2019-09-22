	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] 				= 'Clogin'; 
$route['canbo'] 				= 'canbo/Ccanbo'; 
$route['logout'] 				= 'Clogin/logout'; 
$route['Welcome'] 				= 'Ctrangchu';

$route['quatrinhdaotao'] 		= 'hoso_canbo/Cquatrinhdaotao';
$route['danhsachcanbo']			= 'canbo/Cdanhsachcanbo';
/*hùng*/
$route['doanthe']				= 'hoso_canbo/CDoan_dang_tochuc';
$route['ds_doanthe']			= 'hoso_canbo/CDoan_dang_tochuc/Ds_Doan_dang_tochuc';
$route['quyhoach']				= 'hoso_canbo/CQuy_hoach';
$route['ds_quyhoach']			= 'hoso_canbo/CQuy_hoach/Ds_Quy_hoach';
$route['chedo']					= 'danhmuc/Cche_do';
$route['dats']					= 'danhmuc/Cdats'; // Đề án tuyển sinh
$route['exDanhsachcanbo']		= 'excel/CexDanhsachcanbo';
/*end*/

$route['lylich']				= 'hoso_canbo/Clylich';

/*Lâm*/
$route['quatrinhcongtac']		= 'hoso_canbo/Cquatrinhcongtac';
// $route['khenthuong']			= 'danhmuc/Ckhenthuong';
$route['dmkhenthuong']			= 'danhmuc/CdmKhenthuong';
$route['khenthuong']			= 'danhmuc/Ckhenthuong';
$route['danhsachkhenthuong']	= 'danhmuc/Ckhenthuong/danhsachkhenthuong';
$route['dmchungchi']			= 'danhmuc/Cchungchi';
$route['mauc2']					= 'hoso_canbo/CmauC2';
/*end*/

/*thủy*/
$route['hopdong']				= 'hoso_canbo/CNhanSu_HopDong';
$route['chucvu']				= 'hoso_canbo/CNhanSu_ChucVu';
$route['donvi']					= 'hoso_canbo/CNhanSu_DonVi';
$route['ngach']					= 'hoso_canbo/CNhanSu_Ngach';
$route['chungchi']				= 'hoso_canbo/Cchungchi';
$route['thongtinnghenghiep']	= 'hoso_canbo/Cthongtinnghenghiep';
$route['cacchungchi']			= 'hoso_canbo/Ccacchungchi';
/*end*/


$route['default_controller'] 	= 'Clogin';
$route['404_override'] 			= 'C404';
$route['403_Forbidden'] 		= 'C403';
$route['translate_uri_dashes'] 	= FALSE;
