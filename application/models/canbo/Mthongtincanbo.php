<?php
    class Mthongtincanbo extends MY_Model{

        public function thongtinchitiet($id_canbo){
            
            // Du lieu data goc
            $this->db->where("tbl_canbo.id_can_bo",$id_canbo); // Neu co nhieu bang co truong id_can_bo thi phai nhap where dang 
            $data = $this->db->get("tbl_canbo")->row_array();

            // Lan luot ghep voi tung cai 1, co the co hoac khong
            // Hoc ham
            $this->db->where("tbl_canbo.id_can_bo",$id_canbo);
            $this->db->select("tbl_hocham.hoc_ham");
            $this->db->where("tbl_canbo_hocham.tg_ketthuc","");
            $this->db->join("tbl_canbo_hocham","tbl_canbo.id_can_bo = tbl_canbo_hocham.id_can_bo","inner");
            $this->db->join("tbl_hocham","tbl_canbo_hocham.id_hoc_ham = tbl_hocham.id_hoc_ham","inner");
            $data_hocham = $this->db->get("tbl_canbo")->row_array();
            if(!empty($data_hocham)){
                $data['hoc_ham'] = $data_hocham['hoc_ham'];
            }

            // Ghep voi hoc vi
            $this->db->where("tbl_canbo.id_can_bo",$id_canbo);
            $this->db->select("tbl_hocvi.hoc_vi");
            $this->db->where("tbl_canbo_hocvi.tg_ketthuc","");
            $this->db->join("tbl_canbo_hocvi","tbl_canbo.id_can_bo = tbl_canbo_hocvi.id_can_bo","inner");
            $this->db->join("tbl_hocvi","tbl_canbo_hocvi.id_hoc_vi = tbl_hocvi.id_hoc_vi","inner");
            $data_hocvi = $this->db->get("tbl_canbo")->row_array();
            if(!empty($data_hocvi)){
                $data['hoc_vi'] = $data_hocvi['hoc_vi'];
            }
            

            $this->db->where("tbl_canbo.id_can_bo",$id_canbo);
            $this->db->select("tbl_donvi.ten_don_vi");
            $this->db->where("tbl_canbo_donvi.tg_ketthuc","");
            $this->db->join("tbl_canbo_donvi","tbl_canbo.id_can_bo = tbl_canbo_donvi.id_can_bo","inner");
            $this->db->join("tbl_donvi","tbl_donvi.id_don_vi = tbl_canbo_donvi.id_don_vi","inner");
            $data_donvi = $this->db->get("tbl_canbo")->row_array();
            if(!empty($data_donvi)){
                $data['ten_don_vi'] = $data_donvi['ten_don_vi'];
            }

            $this->db->where("tbl_canbo.id_can_bo",$id_canbo);
            $this->db->select("tbl_chucvu.ten_chuc_vu");
            $this->db->where("tbl_canbo_chucvu.tg_ketthuc","");
            $this->db->join("tbl_canbo_chucvu","tbl_canbo.id_can_bo = tbl_canbo_chucvu.id_can_bo","inner");
            $this->db->join("tbl_chucvu","tbl_chucvu.id_chuc_vu = tbl_canbo_chucvu.id_chuc_vu","inner");
            $data_chucvu = $this->db->get("tbl_canbo")->row_array();
            if(!empty($data_chucvu)){
                $data['ten_chuc_vu'] = $data_chucvu['ten_chuc_vu'];
            }

            $this->db->where("tbl_canbo.id_can_bo",$id_canbo);
            $this->db->select("tbl_canbo_hopdong.id_hop_dong,tbl_canbo_hopdong.tg_batdau,tbl_loaihopdong.loai_hop_dong");
            $this->db->where("tbl_canbo_hopdong.tg_ketthuc","");
            $this->db->join("tbl_canbo_hopdong","tbl_canbo.id_can_bo = tbl_canbo_hopdong.id_can_bo","inner");
            $this->db->join("tbl_hopdong","tbl_canbo_hopdong.id_hop_dong = tbl_hopdong.id_hop_dong","inner");
            $this->db->join("tbl_loaihopdong","tbl_hopdong.id_loai_hop_dong = tbl_loaihopdong.id_loai_hop_dong","inner");
            $data_truong = $this->db->get("tbl_canbo")->row_array();
            if(!empty($data_truong)){
                $data['id_hop_dong'] = $data_truong['id_hop_dong'];
                $data['tg_batdau']   = $data_truong['tg_batdau'];
                $data['loai_hop_dong'] = $data_truong['loai_hop_dong'];
            }
            
            //pr($data);
            return $data;
        }
/*--------------------------QTCT----------------------*/
        // function get_qtct trả về dữ liệu từ ajax
        // function get_qtctCB trả về dữ liệu cho table 1
        // function get_qtctNV trả về dữ liệu cho table 2
        public function get_qtct($id_can_bo){
            $this->db->where("id_canbo",$id_can_bo);
            $this->db->select("tbl_canbo_qtct.*,tbl_chucvu.ten_chuc_vu,tbl_donvi.ten_don_vi,tbl_bomon.ten_bo_mon");

            $this->db->join("tbl_chucvu","tbl_canbo_qtct.id_chuc_vu = tbl_chucvu.id_chuc_vu","inner");
            $this->db->join("tbl_donvi","tbl_canbo_qtct.id_donvi = tbl_donvi.id_don_vi","inner");
            $this->db->join("tbl_bomon","tbl_canbo_qtct.id_bomon = tbl_bomon.id_bo_mon","inner");

            $data = $this->db->get("tbl_canbo_qtct")->result_array();

            $this->db->where("id_canbo",$id_can_bo);
            $this->db->select("tbl_donvi.ten_don_vi");
            $this->db->join("tbl_donvi","tbl_canbo_qtct.id_donvi_cu = tbl_donvi.id_don_vi","inner");
            $data_tmp = $this->db->get("tbl_canbo_qtct")->result_array();
            if(isset($data_tmp)){
                for ($i=0; $i<count($data); ++$i) {
                    $data[$i]['ten_donvi_cu'] = $data_tmp[$i]['ten_don_vi'];
                }
            }
            //pr($data);
/*          for ($i=0; $i<count($data); ++$i) {
                $data[$i]['chucdanh'] = '';
                foreach ($hocham as $value) {
                    if($data[$i]['chucdanh_vt'] == $value['hoc_ham_vt']){
                        $data[$i]['chucdanh'] = $value['hoc_ham'];
                        break;
                    }
                }
                foreach ($hocvi as $value) {
                    if($data[$i]['chucdanh_vt'] == $value['hoc_vi_vt']){
                        $data[$i]['chucdanh'] = $value['hoc_vi'];
                        break;
                    }
                }
            }*/
            return $data;
        }

        public function get_qtctCB($id_can_bo){
            $this->db->where("id_canbo",$id_can_bo);
            $this->db->where("ngay_quyet_dinh !=","");
            $this->db->select("tbl_canbo_qtct.*,tbl_chucvu.ten_chuc_vu,tbl_donvi.ten_don_vi,tbl_bomon.ten_bo_mon");

            $this->db->join("tbl_chucvu","tbl_canbo_qtct.id_chuc_vu = tbl_chucvu.id_chuc_vu","inner");
            $this->db->join("tbl_donvi","tbl_canbo_qtct.id_donvi = tbl_donvi.id_don_vi","inner");
            $this->db->join("tbl_bomon","tbl_canbo_qtct.id_bomon = tbl_bomon.id_bo_mon","inner");

            $data = $this->db->get("tbl_canbo_qtct")->result_array();

            $this->db->where("id_canbo",$id_can_bo);
            $this->db->select("tbl_donvi.ten_don_vi");
            $this->db->join("tbl_donvi","tbl_canbo_qtct.id_donvi_cu = tbl_donvi.id_don_vi","inner");
            $data_tmp = $this->db->get("tbl_canbo_qtct")->result_array();
            if(isset($data_tmp)){
                for ($i=0; $i<count($data); ++$i) {
                    $data[$i]['ten_donvi_cu'] = $data_tmp[$i]['ten_don_vi'];
                }
            }
            //pr($data);
/*          for ($i=0; $i<count($data); ++$i) {
                $data[$i]['chucdanh'] = '';
                foreach ($hocham as $value) {
                    if($data[$i]['chucdanh_vt'] == $value['hoc_ham_vt']){
                        $data[$i]['chucdanh'] = $value['hoc_ham'];
                        break;
                    }
                }
                foreach ($hocvi as $value) {
                    if($data[$i]['chucdanh_vt'] == $value['hoc_vi_vt']){
                        $data[$i]['chucdanh'] = $value['hoc_vi'];
                        break;
                    }
                }
            }*/
            return $data;
        }

        public function get_qtctNV($id_can_bo){
            $this->db->where("id_canbo",$id_can_bo);
            $this->db->where("ngay_quyet_dinh","");
            $this->db->select("tbl_canbo_qtct.*,tbl_chucvu.ten_chuc_vu,tbl_donvi.ten_don_vi,tbl_bomon.ten_bo_mon");

            $this->db->join("tbl_chucvu","tbl_canbo_qtct.id_chuc_vu = tbl_chucvu.id_chuc_vu","inner");
            $this->db->join("tbl_donvi","tbl_canbo_qtct.id_donvi = tbl_donvi.id_don_vi","inner");
            $this->db->join("tbl_bomon","tbl_canbo_qtct.id_bomon = tbl_bomon.id_bo_mon","inner");

            $data = $this->db->get("tbl_canbo_qtct")->result_array();

            $this->db->where("id_canbo",$id_can_bo);
            $this->db->select("tbl_donvi.ten_don_vi");
            $this->db->join("tbl_donvi","tbl_canbo_qtct.id_donvi_cu = tbl_donvi.id_don_vi","inner");
            $data_tmp = $this->db->get("tbl_canbo_qtct")->result_array();
            if(isset($data_tmp)){
                for ($i=0; $i<count($data); ++$i) {
                    $data[$i]['ten_donvi_cu'] = $data_tmp[$i]['ten_don_vi'];
                }
            }
            return $data;
        }

        public function luu_qtct($data){
            return $this->db->insert("tbl_canbo_qtct",$data);
        }

        public function update_qtct($data, $id){
            $this->db->where("id",$id);
            $this->db->update("tbl_canbo_qtct",$data);
            return $this->db->affected_rows();
        }
        public function delete_qtct($id){
            $this->db->where("id",$id);
            $this->db->delete("tbl_canbo_qtct");
            return $this->db->affected_rows();
        }

    }

?>