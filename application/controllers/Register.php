<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Register extends CI_Controller { 
 
 function __construct() 
 { 
  parent::__construct(); 
  $this->load->model('m_model'); 
  $this->load->helper('my_helper'); 
 } 
 
 public function index() 
 { 
  $this->load->view('auth/'); 
 } 

 public function login() 
 { 
  $this->load->view('auth/login'); 
 } 

 public function aksi_register()
 {
     // Mendapatkan data yang dikirimkan melalui form
     $username = $this->input->post('username', true);
     $email = $this->input->post('email', true);
     $password = md5($this->input->post('password', true)); // Enkripsi password sesuai dengan cara Anda yang sebelumnya menggunakan md5
 
     // Masukkan data ke dalam array
     $data = [
         'username' => $username,
         'email' => $email,
         'password' => $password,
         // tambahkan kolom-kolom lain yang diperlukan untuk pendaftaran
     ];
 
     // Panggil model untuk menyimpan data ke dalam database
     $result = $this->m_model->insert('admin', $data); // 'users' adalah nama tabel yang Anda gunakan
 
     if ($result) {
         // Registrasi berhasil, Anda dapat mengarahkan pengguna ke halaman login atau halaman lain yang sesuai
         redirect(base_url('auth/'));
     } else {
         // Registrasi gagal, lakukan sesuatu (misalnya, tampilkan pesan kesalahan)
         echo "Registrasi gagal. Silakan coba lagi.";
     }
 }
 

 
  
}