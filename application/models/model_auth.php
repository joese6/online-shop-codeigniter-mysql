<?php
    class Model_auth extends CI_Model{
        public function cek_login(){
            $usr =set_value('username');
            $pass =set_value('password');
            $nm =set_value('nama');

            $result =$this->db->where('username',$usr)
                                ->where('password',$pass)
                                ->limit(1)
                                ->get('tb_user');
            if($result->num_rows()>0){
                return $result->row();
            }else{
                return array();
            }
        }
    }
?>