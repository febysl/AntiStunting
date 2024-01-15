<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    // public function register()
    // {
    //     $this->load->view('v_register');
    // }

    // Logic Waktu Melakukan Login
    public function do_login()
    {
        $params = $this->input->post();
        $this->db->where('username', $params['username']);
        $this->db->where('password', $params['password']);
        $login = $this->db->get('users')->row_array();
        if ($login) {
            $_SESSION['id'] = $login['id'];
            $_SESSION['username'] = $params['username'];
            $_SESSION['password'] = $params['password'];
            $_SESSION['nama'] = $login['nama'];
            $_SESSION['foto'] = $login['foto'];
            $_SESSION['role'] = $login['role'];
            $_SESSION['desa'] = $login['desa'];
            $_SESSION['posyandu'] = $login['posyandu'];
            if ($login['role'] == 'posyandu') {
                redirect('/panel/daftar_dataset', 'refresh');
            } else {
                redirect('/panel', 'refresh');
            }
        } else {
            echo "<script>alert('Username/Password salah, silahkan coba kembali'); location.href = '" . base_url() . "home/login';</script>";
        }
    }
}
