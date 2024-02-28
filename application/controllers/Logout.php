
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function index(){
    $this->session->sess_destroy(); // Hapus semua session
    
    echo "<script>alert('berhasil logout!');
              window.location.href='logout/reload';
              </script>";
      
    
  }
  function reload(){
    redirect(base_url("index.php/auth")); // Redirect ke halaman login
  
  }
}








