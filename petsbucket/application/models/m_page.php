<?php
class M_page extends CI_Model{
    public $kode,$nama,$usaha,$desk,$gbr,$bank,$rek,$email,$hp,$alamat;
public function __construct(){
        parent::__construct();$this->load->database();
    }
    public function m_daftar(){
        $sql=sprintf("insert into tb_akun_penjual values('','%s','%s','%s','','','%s','','')",$this->nama,$this->usaha,$this->password,$this->email);$this->db->query($sql);        
    }
    function cek_login($table,$where){     
        return $this->db->get_where($table,$where);
    }    
    public function m_editProfil(){
        $sql=sprintf("update tb_akun_penjual set pjl_nama='%s',pjl_nama_usaha='%s',pjl_alamat='%s',pjl_hp='%s',pjl_gambar='%s', pjl_email='%s',pjl_deskripsi='%s',pjl_bank='%s', pjl_rekening='%s' where pjl_id='%s'",$this->nama,$this->usaha,$this->alamat,$this->hp,$this->gbr,$this->email,$this->deskripsi,$this->bank,$this->rekening,$this->kode);
        $this->db->query($sql);
    }
}
?>