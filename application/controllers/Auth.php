<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
    echo "<script>alert('Akun anda masih terhubung, Selamat datang!!');
        window.location.href='index.php/Auth/sukses';
        </script>";
      $lay['content']=$this->load->view('layout2');

    $this->load->view('User/form_login',$lay);
      
  
  }
  public function login(){
    $username = $this->input->post('username'); 
    $password = ($this->input->post('password')); 
    $users='user';
    $admin='admin';
    $guru='guru';
    $user = $this->UserModel->get($username); 
    
    if(empty($user)){ 
      echo "<script>alert('NISN belum terdaftar!');
            window.location.href='reload';
            </script>";
    }else{
      if($password == $user->password and $username==$user->username){ 
        if ($admin==$user->stts) {
        $session = array(
          'authenticated'=>true, 
          'username'=>$this->input->post('username'), 
          'password'=>$this->input->post('password'), 
          'status' => "login"
        );

        $this->session->set_userdata($session); 

        echo "<script>alert('Berhasil login, Hi admin!');
              window.location.href='sukses';
              </script>";

      }else if ($users==$user->stts){
        $session1 = array(
          'authenticated2'=>true, 
          'username'=>$user->username, 
          'password'=>$user->password, 
          'status' => "login"
        );

        $this->session->set_userdata($session1); 

        echo "<script>alert('Berhasil login, Hi user!');
              window.location.href='user';
              </script>";

      }else if ($guru==$user->stts){
        $session2 = array(
          'authenticated3'=>true, 
          'username'=>$user->username, 
          'password'=>$user->password, 
          'status' => "login"
        );

        $this->session->set_userdata($session2); 

        echo "<script>alert('Berhasil login, Hi guru!');
              window.location.href='guru';
              </script>";

      }
        }else{
        echo "<script>alert('Username atau Password salah!');
              window.location.href='reload';
              </script>";
      }
    }
  }
  function reload(){
    redirect(base_url("index.php/auth"));
  }
  function sukses(){
    redirect(base_url("index.php/Admin/beranda"));
    
  }
  function user(){
    redirect(base_url("index.php/User/beranda"));  
  }
  function guru(){
    redirect(base_url("index.php/Guru/beranda"));  
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
     echo "<script>alert('Berhasil logout');
              window.location.href='reload';
              </script>";

  }
}








