<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // Halaman Depan
    public function index()
    {
        $data['active'] = 'dashboard';

        $grafik = $this->db->get('grafik')->result_array();
        $nama_wilayah = array_column($grafik, 'wilayah');
        $nama_wilayah = array_unique($nama_wilayah);
        
        $grafik_mapping = [];
        $tahun = [];
        foreach ($grafik as $g) {
            $tahun[] = $g['tahun'];
            $grafik_mapping[$g['tahun']][$g['wilayah']] = $g['total_persentase'];
        }
        $tahun = array_unique($tahun);
        sort($tahun);

        $label_color = ['#3498db', '#2ecc71', '#e74c3c', '#3468db', '#d14c0c', '#2168db', '#3498db', '#2ecc71', '#e74c3c', '#3468db', '#d14c0c', '#2168db'];
        
        $datasets = [];
        $t_index = 0;
        foreach ($tahun as $t) {
            $datasets[$t] = [
                'label' => $t,
                'backgroundColor' => $label_color[$t_index]
            ];
            foreach ($nama_wilayah as $wilayah) {
                if ($grafik_mapping[$t][$wilayah]) {
                    $datasets[$t]['data'][] = $grafik_mapping[$t][$wilayah];
                } else {
                    $datasets[$t]['data'][] = 0;
                }
            }
            $t_index++;
        }

        $data['nama_wilayah'] = $nama_wilayah;
        $data['grafik'] = $grafik;
        $data['datasets'] = array_values($datasets);
        
        $data['peta'] = $this->db->query('SELECT `lat`, `long` as lng, `wilayah` as label, `kategori` as category FROM map')->result_array();
        for ($i = 0; $i < count($data['peta']); $i++) { 
            $data['peta'][$i]['lat'] = (float) $data['peta'][$i]['lat'];
            $data['peta'][$i]['lng'] = (float) $data['peta'][$i]['lng'];
        }
        $data['kategori'] = ['Biasa', 'Perlu Penanganan', 'Gawat'];

        $icon_kategori = [];
        foreach ($data['kategori'] as $k => $icon) {
            $icon_kategori[$icon] = base_url().'assets/img/kat'. ($k + 1) .'.png';
        }
        $data['icon_kategori'] = $icon_kategori;

        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_dashboard');
        $this->load->view('v_footer_frontend');
    }

    // Halaman Edukasi
    public function edukasi()
    {
        $data['active'] = 'edukasi';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_edukasi');
        $this->load->view('v_footer_frontend');
    }

    // Halaman Tentang Kami
    public function tentang()
    {
        $data['active'] = 'tentang';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_tentang');
        $this->load->view('v_footer_frontend');
    }

    // Halaman Login
    public function login()
    {
        $data['active'] = 'tentang';
        $this->load->view('v_header_frontend', $data);
        $this->load->view('frontend/v_login');
        $this->load->view('v_footer_frontend');
    }
}
