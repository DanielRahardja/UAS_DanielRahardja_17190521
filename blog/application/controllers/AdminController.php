<?php

class AdminController extends CI_Controller{

    public function halamanadmin($page)
    {
        // $data['judul'] = "Admin";
        // $this->load->view('back/admin/template/header',$data);
        // $this->load->view('back/admin/index',$data);
        // $this->load->view('back/admin/template/footer',$data);
        //TODO: Load Model
        $this->load->model('M_Kategori');
        //Admin Valiadion

        if($this->load->view('back/admin/'.$page,'',TRUE)===''){
            
        }else{
  
            if($page ==="index"):
                $judul='Dashboard';
            elseif($page ==="kelola_kategori"):
                $judul='Manajemen Kategori';

            endif;

            $data['kategori'] = $this->M_Kategori->getKategori()->result();
            $data['judul'] = "Halaman ".$judul;

            $this->load->view('back/admin/template/header',$data);
            $this->load->view('back/admin/'.$page,$data);
            $this->load->view('back/admin/template/footer',$data);
        }
    }

    public function halamanpenulis()
    {
        $data['judul'] = "Penulis";
        $this->load->view('back/penulis/template/header',$data);
        $this->load->view('back/penulis/index',$data);
        $this->load->view('back/penulis/template/footer',$data);
    }

    public function login(){
        // echo "Admin";
        $data['judul']= "Login Admin";

        $this->load->view('back/login',$data);
    }

    public function logout(){
        session_destroy();
        redirect(base_url('login_admin'));
    }

    public function protokollogin_admin(){
        //Panggil Model
        $this->load->model('M_User');

        $username= $this->input->post('username');
        $password= $this->input->post('password');

        $cek = $this->M_User->cek_login($username,$password)->num_rows();
        $data = $this->M_User->cek_login($username,$password)->row();

        if($cek>0){
            if($data->level==="0"){
                $level = 'admin';

                $sess = array(
                    'username' =>$data->username,
                    'level' =>$data->level,
                    'user_id'=> $data->id
                );
                $this->session->set_userdata($sess);
                redirect('admin/index');

            }elseif($data->level==="1"){
                $level = 'penulis';

                $sess = array(
                    'username' =>$data->username,
                    'level' =>$data->level,
                    'user_id'=> $data->id
                );
                $this->session->set_userdata($sess);
                redirect('penulis/index');
            }
        
        }else{
            $this->session->set_flashdata('pesan','Mohon Maaf! Akun anda tidak terdaftar!');
            redirect('login_admin');
        }

    }
}

