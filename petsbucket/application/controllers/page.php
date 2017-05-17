<?php
class Page extends CI_Controller{
    
     private $model=NULL;
     public function __construct(){
        parent::__construct();
        $this->load ->model('m_page');
        $this->model=$this->m_page;
        $this->load->database();
        $this->load->helper('url');
    }
    
    public function index(){
        if(isset($_POST['login'])){
        $usaha = $this->input->post('usaha');
        $password = $this->input->post('passwd');
        $where = array(
            'pjl_nama_usaha' => $usaha,
            'pjl_password' => md5($password)
            );
        $cek = $this->m_page->cek_login("tb_akun_penjual",$where)->num_rows();
        if($cek > 0){ 
            $data_session = array(
                'usaha' => $usaha,
                'status' => "login",                );
 
            $this->session->set_userdata($data_session); 
            $this->cHome();
 
        }else{
            $this->load->view('login');
        }
    }else{
          $this->load->view('login');
        }
    }
 
    public function logout(){
        $this->session->unset_userdata('status');
        redirect('page');
    }
        
    public function daftar(){
        if(isset($_POST['simpan'])){
            $this->model->nama=$_POST['nama'];$this->model->usaha=strtoupper($_POST['usaha']);$this->model->email=$_POST['email'];$this->model->password=md5($_POST['pass']);
            $this->model->m_daftar();
            redirect('page');   
        }else{
            $this->load->view('daftar');
        }
    }
    
     public function cHome(){   //Halaman Utama
          if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }else{
              $stt['class']="active";
        $this->load->view('page_header',$stt);
        $this->load->view('page_home');
        $this->load->view('page_footer');
          }
    }
    
    public function cProfil(){   //menu profil
          if($this->session->userdata('status') != "login"){
            redirect('page');
        }else{
            $ush=$this->session->userdata('usaha');
            $query=$this->db->query("select * from tb_akun_penjual where pjl_nama_usaha='$ush'");
            $row=$query->row();
            $this->model->kode=$row->pjl_id;
            $this->model->usaha=$row->pjl_nama_usaha;
            $this->model->nama=$row->pjl_nama;
            $this->model->hp=$row->pjl_hp;
            $this->model->email=$row->pjl_email;
            $this->model->gbr=$row->pjl_gambar;
            $this->model->desk=$row->pjl_deskripsi;
            $this->model->rek=$row->pjl_rekening;
            $this->model->alamat=$row->pjl_alamat;
            $this->model->bank=$row->pjl_bank;
            $this->model->gbr=$row->pjl_gambar;
            $stt['class']="active";
            $this->load->view('page_header',$stt);
            $this->load->view('page_profil',['model'=>$this->model]);
            $this->load->view('page_footer'); 
          }
    }
    
     public function edit_profil(){   //edit profil   
         
                $config['upload_path']          = 'http://localhost/kuliah/web_base/petsbucket/assets/style/img/perusahan/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('gbr'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->cProfil();
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
            $this->model->kode=$_POST['kode'];
            $this->model->nama=strtoupper($_POST['nama']);
            $this->model->usaha=$_POST['usaha'];
            $this->model->alamat=$_POST['alamat'];
            $this->model->hp=$_POST['hp'];
            $this->model->email=$_POST['email'];
            $this->model->deskripsi=$_POST['desk'];
            $this->model->bank=$_POST['bank'];
            $this->model->rekening=$_POST['rek'];
            $this->model->gbr=$_FILES['gbr']['name'];
            $this->model->m_editProfil();
            $this->cProfil();
                }
           
    }
     public function cPakan(){ //menu pakan
        if($this->session->userdata('status') != "login"){
            redirect('page');
        }else{
             $stt['class']="active";
           $this->load->view('page_header',$stt);
            $this->load->view('page_produkPakan');
            $this->load->view('page_footer'); 
        }
    }
}
?>