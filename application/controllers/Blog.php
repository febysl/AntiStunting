<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function artikel_1()
    {
        $data['active'] = 'artikel_1';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_artikel_1');
        $this->load->view('v_footer_frontend');
    }

    public function artikel_2()
    {
        $data['active'] = 'artikel_2';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_artikel_2');
        $this->load->view('v_footer_frontend');
    }

    public function artikel_3()
    {
        $data['active'] = 'artikel_3';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_artikel_3');
        $this->load->view('v_footer_frontend');
    }

    public function artikel_4()
    {
        $data['active'] = 'artikel_4';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_artikel_4');
        $this->load->view('v_footer_frontend');
    }
}
