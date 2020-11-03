<?php
    class Model_barang extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tb_barang');
        
    }
    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }

   public function update_data($where,$data,$table){
       $this->db->where($where);
       $this->db->update($table,$data);
   }
   public function hapus_data($where,$tb_barang){
       $this->db->where($where);
       $this->db->delete($tb_barang);
   }
   public function detil_barang($id=NULL){
        $query = $this->db->get_where('tb_barang',array('id_brg'=>$id))->row();
        return $query;
   }
   public function find($id){
       $result=$this->db->where('id_brg',$id)
       ->limit(1)
       ->get('tb_barang');

       if($result->num_rows()>0){
           return $result->row();
       }else{
           return array();
       }
   }
   public function detail_brg($id_brg){
       $result=$this->db->where('id_brg',$id_brg)->get('tb_barang');
       if($result->num_rows()>0){
           return $result->result();
       }else{
           return false;
       }

   }
   public function aksesoris(){
    return $this->db->where('kategori','Aksesoris')->from("tb_barang")->count_all_results();
   }
   public function sepatu_pria(){
       /*
       $query=$this->db->query('SELECT * from tb_barang where kategori="Sepatu Pria"');
       echo $query->num_rows();
       */
      //return $this->db->count_all("tb_barang");
      return $this->db->where('kategori','Sepatu Pria')->from("tb_barang")->count_all_results();
      
   }
   public function sepatu_wanita(){
    return $this->db->where('kategori','Sepatu Wanita')->from("tb_barang")->count_all_results();
   }
   public function sepatu_anak(){
    return $this->db->where('kategori','Sepatu Anak')->from("tb_barang")->count_all_results();
   }
   public function peralatan_olahraga(){
    return $this->db->where('kategori','Peralatan Olahraga')->from("tb_barang")->count_all_results();
   }

   public function get_key($key){
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('nama_brg',$key);
        $this->db->or_like('keterangan',$key);
        return $this->db->get()->result();
        
   }
}
?>