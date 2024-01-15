<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);

// Halaman Admin

class Panel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$_SESSION['username']) {
            echo "<script>alert('Anda harus login terlebih dahulu untuk dapat mengakses halaman ini'); location.href = '" . base_url() . "home/login'</script>";
        }
    }

    // Halaman Dashboard
    public function index()
    {
        $data_latih = $this->db->get('datalatih')->result_array();
        $data_balita = $this->db->get('databalita')->result_array();

        $this->db->where('label', '1');
        $stunting = $this->db->get('databalita')->result_array();

        $this->db->where('label', '0');
        $tidak_stunting = $this->db->get('databalita')->result_array();

        $this->db->where('jenis_kelamin', 'P');
        $p_data_anak = $this->db->get('databalita')->result_array();

        $this->db->where('jenis_kelamin', 'L');
        $l_data_anak = $this->db->get('databalita')->result_array();

        $data['data_latih'] = count($data_latih);
        $data['data_balita'] = count($data_balita);

        $data['stunting'] = count($stunting);
        $data['tidak_stunting'] = count($tidak_stunting);

        $data['p_data_anak'] = count($p_data_anak);
        $data['l_data_anak'] = count($l_data_anak);

        $data['active'] = 'dashboard';

        $this->load->view('v_header', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('v_footer');
    }

    // Halaman Daftar Puskesmas
    public function daftar_puskesmas()
    {
        $data['datasets'] = $this->db->get('puskesmas')->result_array();
        $data['active'] = 'datauser';
        $this->load->view('v_header', $data);
        $this->load->view('v_daftar_puskesmas');
        $this->load->view('v_footer');
    }

    // Halaman & Mekanisme Tambah dan Edit Puskesmas
    public function tambah_puskesmas()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = $this->input->post();
            if ((int) $params['id'] > 0) {
                $this->db->where('id', $params['id']);
                $this->db->update('puskesmas', [
                    'nama' => $params['nama'],
                    'alamat' => $params['alamat'],
                    'no_telepon' => $params['no_telepon'],
                    'nama_wilayah' => $params['nama_wilayah'],
                ]);
            } else {
                $this->db->insert('puskesmas', [
                    'nama' => $params['nama'],
                    'alamat' => $params['alamat'],
                    'no_telepon' => $params['no_telepon'],
                    'nama_wilayah' => $params['nama_wilayah'],
                ]);
            }

            echo "<script>alert('Data berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_puskesmas';</script>";
        } else {
            $params = $_REQUEST;
            $data['fetch'] = [];
            $id = $params['id'];
            if ((int) $id > 0) {
                $this->db->where('id', $id);
                $data['fetch'] = $this->db->get('puskesmas')->row_array();
            }

            $data['id'] = $id;
            $data['active'] = 'datauser';
            $this->load->view('v_header', $data);
            $this->load->view('v_tambah_puskesmas');
            $this->load->view('v_footer');
        }
    }

    // Mekanisme Hapus Puskesmas
    public function delete_puskesmas()
    {
        $params = $_REQUEST;
        $this->db->where('id', $params['id']);
        $this->db->delete('puskesmas');

        echo "<script>alert('Data berhasil dihapus'); location.href = '" . base_url() . "panel/daftar_puskesmas';</script>";
    }

    // Halaman Daftar Grafik
    public function daftar_grafik()
    {
        $data['datasets'] = $this->db->get('grafik')->result_array();
        $data['active'] = 'datauser';
        $this->load->view('v_header', $data);
        $this->load->view('v_daftar_grafik');
        $this->load->view('v_footer');
    }

    // Halaman & Mekanisme Tambah dan Edit Grafik
    public function tambah_grafik()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = $this->input->post();
            if ((int) $params['id'] > 0) {
                $this->db->where('id', $params['id']);
                $this->db->update('grafik', [
                    'tahun' => $params['tahun'],
                    'wilayah' => $params['wilayah'],
                    'total' => $params['total'],
                    'total_persentase' => $params['total_persentase'],
                ]);
            } else {
                $this->db->insert('grafik', [
                    'tahun' => $params['tahun'],
                    'wilayah' => $params['wilayah'],
                    'total' => $params['total'],
                    'total_persentase' => $params['total_persentase'],
                ]);
            }

            echo "<script>alert('Data berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_grafik';</script>";
        } else {
            $params = $_REQUEST;
            $data['fetch'] = [];
            $id = $params['id'];
            if ((int) $id > 0) {
                $this->db->where('id', $id);
                $data['fetch'] = $this->db->get('grafik')->row_array();
            }

            $data['id'] = $id;
            $data['active'] = 'datauser';
            $this->load->view('v_header', $data);
            $this->load->view('v_tambah_grafik');
            $this->load->view('v_footer');
        }
    }

    // Mekanisme Hapus Grafik
    public function delete_grafik()
    {
        $params = $_REQUEST;
        $this->db->where('id', $params['id']);
        $this->db->delete('grafik');

        echo "<script>alert('Data berhasil dihapus'); location.href = '" . base_url() . "panel/daftar_grafik';</script>";
    }

    // Halaman Daftar Peta
    public function daftar_peta()
    {
        $data['datasets'] = $this->db->get('map')->result_array();
        $data['active'] = 'datauser';
        $this->load->view('v_header', $data);
        $this->load->view('v_daftar_peta');
        $this->load->view('v_footer');
    }

    // Halaman & Mekanisme Tambah dan Edit Peta
    public function tambah_peta()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = $this->input->post();
            if ((int) $params['id'] > 0) {
                $this->db->where('id', $params['id']);
                $this->db->update('map', [
                    'kategori' => $params['kategori'],
                    'wilayah' => $params['wilayah'],
                    'total' => $params['total'],
                    'lat' => $params['lat'],
                    'long' => $params['long'],
                ]);
            } else {
                $this->db->insert('map', [
                    'kategori' => $params['kategori'],
                    'wilayah' => $params['wilayah'],
                    'total' => $params['total'],
                    'lat' => $params['lat'],
                    'long' => $params['long'],
                ]);
            }

            echo "<script>alert('Data berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_peta';</script>";
        } else {
            $params = $_REQUEST;
            $data['fetch'] = [];
            $id = $params['id'];
            if ((int) $id > 0) {
                $this->db->where('id', $id);
                $data['fetch'] = $this->db->get('map')->row_array();
            }

            $data['id'] = $id;
            $data['active'] = 'datauser';
            $this->load->view('v_header', $data);
            $this->load->view('v_tambah_peta');
            $this->load->view('v_footer');
        }
    }

    // Mekanisme Hapus Peta
    public function delete_peta()
    {
        $params = $_REQUEST;
        $this->db->where('id', $params['id']);
        $this->db->delete('map');

        echo "<script>alert('Data berhasil dihapus'); location.href = '" . base_url() . "panel/daftar_peta';</script>";
    }

    // Halaman Daftar Data Anak
    public function daftar_databalita()
    {
        $data['datasets'] = $this->db->get('databalita')->result_array();
        $data['active'] = 'datalatih';
        $this->load->view('v_header', $data);
        $this->load->view('v_daftar_databalita');
        $this->load->view('v_footer');
    }

    // Halaman & Mekanisme Tambah dan Edit Data Anak
    public function tambah_databalita()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = $this->input->post();
            if ((int) $params['id'] > 0) {
                $this->db->where('id', $params['id']);
                $this->db->update('databalita', [
                    // 'no_kk' => $params['no_kk'],
                    // 'nik' => $params['nik'],
                    'nama_balita' => $params['nama_balita'],
                    'nama_orangtua' => $params['nama_orangtua'],
                    'jenis_kelamin' => $params['jenis_kelamin'],
                    'tanggal_lahir' => $params['tanggal_lahir'],
                    // 'berat_lahir' => $params['berat_lahir'],
                    'alamat' => $params['alamat'],
                    'umur' => $params['umur'],
                    'berat_badan' => $params['berat_badan'],
                    'tinggi_badan' => $params['tinggi_badan'],
                    'nama_wilayah' => $params['nama_wilayah'],
                    'nomor_orangtua' => $params['nomor_orangtua'],
                    'nama_posyandu' => $params['nama_posyandu'],
                ]);
            } else {
                $this->db->insert('databalita', [
                    // 'no_kk' => $params['no_kk'],
                    // 'nik' => $params['nik'],
                    'nama_balita' => $params['nama_balita'],
                    'nama_orangtua' => $params['nama_orangtua'],
                    'jenis_kelamin' => $params['jenis_kelamin'],
                    'tanggal_lahir' => $params['tanggal_lahir'],
                    // 'berat_lahir' => $params['berat_lahir'],
                    'alamat' => $params['alamat'],
                    'umur' => $params['umur'],
                    'berat_badan' => $params['berat_badan'],
                    'tinggi_badan' => $params['tinggi_badan'],
                    'nama_wilayah' => $params['nama_wilayah'],
                    'nomor_orangtua' => $params['nomor_orangtua'],
                    'nama_posyandu' => $params['nama_posyandu'],
                ]);
            }
            echo "<script>alert('Data Latih berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_databalita';</script>";
        } else {
            $params = $_REQUEST;
            $data['fetch'] = [];
            $id = $params['id'];
            if ((int) $id > 0) {
                $this->db->where('id', $id);
                $data['fetch'] = $this->db->get('databalita')->row_array();
            }

            $data['id'] = $id;
            $data['active'] = 'datalatih';
            $this->load->view('v_header', $data);
            $this->load->view('v_tambah_databalita');
            $this->load->view('v_footer');
        }
    }

    // Mekanisme Hapus Data Anak
    public function delete_databalita()
    {
        $params = $_REQUEST;
        $this->db->where('id', $params['id']);
        $this->db->delete('databalita');

        echo "<script>alert('Data Latih berhasil dihapus'); location.href = '" . base_url() . "panel/daftar_databalita';</script>";
    }
    
    // Halaman dan Mekanisme Untuk Update Profil
    public function data_admin()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $foto = '';
            if ($_FILES['foto']['name']) {
                $upload_dir = './assets/upload/avatar/';

                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }

                $temp_file = $_FILES['foto']['tmp_name'];
                $original_file = $_FILES['foto']['name'];

                $unique_filename = uniqid() . '_' . $original_file;
                if (move_uploaded_file($temp_file, $upload_dir . $unique_filename)) {
                    // echo "File uploaded successfully!";
                } else {
                    // echo "Error uploading file.";
                }
            } else {
                // echo "No file uploaded or an error occurred.";
            }

            $params = $this->input->post();
            if ($unique_filename) {
                $this->db->where('id', $_SESSION['id']);
                $this->db->update('users', [
                    'nama' => $params['nama'],
                    'desa' => $params['desa'],
                    'posyandu' => $params['posyandu'],
                    'username' => $params['username'],
                    'password' => $params['password'],
                    'foto' => base_url() . 'assets/upload/avatar/' . $unique_filename
                ]);
                $_SESSION['username'] = $params['username'];
                $_SESSION['password'] = $params['password'];
                $_SESSION['nama'] = $params['nama'];
                $_SESSION['desa'] = $params['desa'] ? $params['desa'] : '';
                $_SESSION['posyandu'] = $params['posyandu'] ? $params['posyandu'] : '';
                $_SESSION['foto'] = base_url() . 'assets/upload/avatar/' . $unique_filename;
            } else {
                $this->db->where('id', $_SESSION['id']);
                $this->db->update('users', [
                    'nama' => $params['nama'],
                    'desa' => $params['desa'],
                    'posyandu' => $params['posyandu'],
                    'username' => $params['username'],
                    'password' => $params['password'],
                ]);
                $_SESSION['username'] = $params['username'];
                $_SESSION['password'] = $params['password'];
                $_SESSION['nama'] = $params['nama'];
                $_SESSION['desa'] = $params['desa'] ? $params['desa'] : '';
                $_SESSION['posyandu'] = $params['posyandu'] ? $params['posyandu'] : '';
            }

            echo "<script>alert('Data berhasil disimpan'); location.href = '" . base_url() . "panel/data_admin';</script>";
        } else {
            $data['active'] = 'data_admin';
            $data['desa'] = $this->db->get('desa')->result_array();
            $this->load->view('v_header', $data);
            $this->load->view('v_data_admin');
            $this->load->view('v_footer');
        }
    }

    // Halaman & Mekanisme Untuk Memulai Klasifikasi Data Anak Stunting & Tidak Stunting Menggunakan Machine Learning Naive Bayes
    public function pengujian_knn()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                // CURLOPT_URL => 'http://localhost:5555/api/klasifikasi-stunting',
                CURLOPT_URL => 'https://api-anti-stunting-banyumas.backend-dev.tech/api/klasifikasi-stunting',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);

            $response_arr = json_decode($response, true);
            foreach ($response_arr['result'] as $item) {
                $this->db->where('id', $item['id']);
                $this->db->update('databalita', ['label' => $item['stunting_prediction']]);
            }

            $this->db->where('id', 1);
            $this->db->update('acc', ['acc' => $response_arr['class_report']['accuracy']]);

            $this->db->where('id', 2);
            $this->db->update('acc', ['acc' => $response_arr['class_report'][1]['f1-score']]);

            $this->db->where('id', 3);
            $this->db->update('acc', ['acc' => $response_arr['class_report'][1]['precision']]);

            $this->db->where('id', 4);
            $this->db->update('acc', ['acc' => $response_arr['class_report'][1]['recall']]);

            redirect('/panel/grafik_pengujian', 'refresh');
        } else {
            $data['active'] = 'klasifikasi';
            $this->load->view('v_header', $data);
            $this->load->view('v_klasifikasi');
            $this->load->view('v_footer');
        }
    }

    // Halaman & Mekanisme Untuk Menampilkan Hasil Klasifikasi Data Anak Stunting & Tidak Stunting Menggunakan Metode Naive Bayes
    public function grafik_pengujian()
    {
        // $data['datasets'] = $this->db->get('datasets')->result_array();
        $data['datasets'] = $this->db->query('SELECT * FROM databalita')->result_array();
        $data['active'] = 'laporan';

        $tidak_stunting = [];
        $stunting = [];

        $perempuan_stunting = [];
        $laki_laki_stunting = [];

        $perempuan_tidak_stunting = [];
        $laki_laki_tidak_stunting = [];

        foreach ($data['datasets'] as $d) {
            if ($d['label'] == 1) {
                $stunting[] = true;
            } elseif ($d['label'] == '0') {
                $tidak_stunting[] = true;
            }

            if ($d['jenis_kelamin'] == 'P' && $d['label'] == '0') {
                $perempuan_tidak_stunting[] = true;
            } elseif ($d['jenis_kelamin'] == 'L' && $d['label'] == '0') {
                $laki_laki_tidak_stunting[] = true;
            } elseif ($d['jenis_kelamin'] == 'P' && $d['label'] == '1') {
                $perempuan_stunting[] = true;
            } elseif ($d['jenis_kelamin'] == 'L' && $d['label'] == '1') {
                $laki_laki_stunting[] = true;
            }
        }

        $stunting = count($stunting);
        $tidak_stunting = count($tidak_stunting);

        $data['stunting'] = $stunting;
        $data['tidak_stunting'] = $tidak_stunting;

        $data['stunting_perc'] = ($stunting / count($data['datasets'])) * 100;
        $data['tidak_stunting_perc'] = ($tidak_stunting / count($data['datasets'])) * 100;

        // $acc = $this->db->get('acc')->row_array();
        // $data['acc'] = (int) $acc['acc'];
        $data['perempuan_tidak_stunting'] = count($perempuan_tidak_stunting);
        $data['laki_laki_tidak_stunting'] = count($laki_laki_tidak_stunting);
        $data['perempuan_stunting'] = count($perempuan_stunting);
        $data['laki_laki_stunting'] = count($laki_laki_stunting);

        $data['perempuan_tidak_stunting_perc'] = $data['perempuan_tidak_stunting'] / ($data['perempuan_tidak_stunting'] + $data['laki_laki_tidak_stunting']) * 100;
        $data['laki_laki_tidak_stunting_perc'] = $data['laki_laki_tidak_stunting'] / ($data['perempuan_tidak_stunting'] + $data['laki_laki_tidak_stunting']) * 100;
        $data['perempuan_stunting_perc'] = $data['perempuan_stunting'] / ($data['perempuan_stunting'] + $data['laki_laki_stunting']) * 100;
        $data['laki_laki_stunting_perc'] = $data['laki_laki_stunting'] / ($data['perempuan_stunting'] + $data['laki_laki_stunting']) * 100;

        $this->load->view('v_header', $data);
        $this->load->view('v_hasil_klasifikasi', $data);
        $this->load->view('v_footer', $data);
    }

    // Halaman & Mekanisme Untuk Menampilkan Akurasi Model Machine Learning Stunting & Tidak Stunting Menggunakan Naive Bayes
    public function hasil_akurasi()
    {
        $data['datasets'] = $this->db->query('SELECT * FROM acc ORDER BY id ASC ')->result_array();
        $data['datasets2'] = $this->db->query('SELECT * FROM datalatih')->result_array();
        $data['active'] = 'laporan';

        $data['_acc'] = $this->db->query('SELECT * FROM acc ORDER BY id ASC ')->row_array();
        $data['acc'] = $data['_acc']['acc'];
        $data['hasil_acc'] = round($data['acc'] * 100, 2);

        $this->load->view('v_header', $data);
        $this->load->view('v_hasil_akurasi', $data);
        $this->load->view('v_footer', $data);
    }

    // Mekanisme Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/home/login', 'refresh');
    }


    // ====================== START MEKANISME / HALAMAN BELUM TERPAKAI =========================
    // Halaman Daftar Data Latih
    public function daftar_datalatih()
    {
        // $data['datasets'] = $this->db->query('SELECT datalatih.*, databalita.no_kk, databalita.nik, databalita.nama_balita FROM datalatih LEFT JOIN databalita ON databalita.id = datalatih.id_balita')->result_array();
        $data['datasets'] = $this->db->get('datalatih')->result_array();
        $data['active'] = 'datalatih';
        $this->load->view('v_header', $data);
        $this->load->view('v_daftar_datalatih');
        $this->load->view('v_footer');
    }

    // Halaman & Mekanisme Tambah dan Edit Data Latih
    public function tambah_datalatih()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = $this->input->post();
            // if ((int) $params['id'] > 0) {
            //     $this->db->where('id', $params['id']);
            //     $this->db->update('datalatih', [
            //         'id_balita' => $params['id_balita'],
            //         'umur' => $params['umur'],
            //         'berat_badan' => $params['berat_badan'],
            //         'tinggi_badan' => $params['tinggi_badan'],
            //         'lingkar_lengan' => $params['lingkar_lengan'],
            //         'lingkar_kepala' => $params['lingkar_kepala'],
            //         'label' => $params['label'],
            //     ]);
            // } else {
            //     $this->db->insert('datalatih', [
            //         'id_balita' => $params['id_balita'],
            //         'umur' => $params['umur'],
            //         'berat_badan' => $params['berat_badan'],
            //         'tinggi_badan' => $params['tinggi_badan'],
            //         'lingkar_lengan' => $params['lingkar_lengan'],
            //         'lingkar_kepala' => $params['lingkar_kepala'],
            //         'label' => $params['label'],
            //     ]);
            // }

            if ((int) $params['id'] > 0) {
                $this->db->where('id', $params['id']);
                $this->db->update('datalatih', [
                    // 'no_kk' => $params['no_kk'],
                    // 'nik' => $params['nik'],
                    'nama_balita' => $params['nama_balita'],
                    'nama_orangtua' => $params['nama_orangtua'],
                    'jenis_kelamin' => $params['jenis_kelamin'],
                    'tanggal_lahir' => $params['tanggal_lahir'],
                    // 'berat_lahir' => $params['berat_lahir'],
                    'alamat' => $params['alamat'],
                    'umur' => $params['umur'],
                    'berat_badan' => $params['berat_badan'],
                    'tinggi_badan' => $params['tinggi_badan'],
                    'nama_wilayah' => $params['nama_wilayah'],
                    'nomor_orangtua' => $params['nomor_orangtua'],
                    'nama_posyandu' => $params['nama_posyandu'],
                ]);
            } else {
                $this->db->insert('datalatih', [
                    // 'no_kk' => $params['no_kk'],
                    // 'nik' => $params['nik'],
                    'nama_balita' => $params['nama_balita'],
                    'nama_orangtua' => $params['nama_orangtua'],
                    'jenis_kelamin' => $params['jenis_kelamin'],
                    'tanggal_lahir' => $params['tanggal_lahir'],
                    // 'berat_lahir' => $params['berat_lahir'],
                    'alamat' => $params['alamat'],
                    'umur' => $params['umur'],
                    'berat_badan' => $params['berat_badan'],
                    'tinggi_badan' => $params['tinggi_badan'],
                    'nama_wilayah' => $params['nama_wilayah'],
                    'nomor_orangtua' => $params['nomor_orangtua'],
                    'nama_posyandu' => $params['nama_posyandu'],
                ]);
            }
            echo "<script>alert('Data Latih berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_datalatih';</script>";
        } else {
            $params = $_REQUEST;
            $data['fetch'] = [];
            $id = $params['id'];
            if ((int) $id > 0) {
                $this->db->where('id', $id);
                $data['fetch'] = $this->db->get('datalatih')->row_array();
            }

            $data['id'] = $id;
            $data['active'] = 'datalatih';
            $data['balita'] = $this->db->get('databalita')->result_array();
            $this->load->view('v_header', $data);
            $this->load->view('v_tambah_datalatih');
            $this->load->view('v_footer');
        }
    }

    // Mekanisme Hapus Data Latih
    public function delete_datalatih()
    {
        $params = $_REQUEST;
        $this->db->where('id', $params['id']);
        $this->db->delete('datalatih');

        echo "<script>alert('Data Latih berhasil dihapus'); location.href = '" . base_url() . "panel/daftar_datalatih';</script>";
    }

    // Mekanisme Import CSV
    public function import()
    {
        $upload_success = false;
        $file_ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        if ($file_ext == "csv") {
            $upload_success = true;
        }
        if ($upload_success) {
            $this->db->query('TRUNCATE TABLE datasets');

            $file = fopen($_FILES['file']['tmp_name'], "r");
            $excel_data = explode("\r", reset(fgetcsv($file)));
            // var_dump($excel_data);
            // exit;
            while (($arr = fgetcsv($file)) !== false) {
                if (strtolower($arr[7]) == 'iya') {
                    $label = '1';
                } else {
                    $label = '0';
                }

                $v_with_name = false;
                $balita = [];
                if ($arr[1] && $arr[2]) {
                    $this->db->where('no_kk', $arr[1]);
                    $this->db->where('nik', $arr[2]);
                    $balita = $this->db->get('databalita')->row_array();
                } elseif ($arr[1] && !$arr[2]) {
                    $this->db->where('no_kk', $arr[1]);
                    $balita = $this->db->get('databalita')->row_array();
                } elseif (!$arr[1] && $arr[2]) {
                    $this->db->where('nik', $arr[2]);
                    $balita = $this->db->get('databalita')->row_array();
                } else {
                    $v_with_name = true;
                }

                // re-check
                if (empty($balita) && ($arr[1] && !$arr[2])) {
                    $this->db->where('no_kk', $arr[1]);
                    $balita = $this->db->get('databalita')->row_array();
                }
                if (empty($balita) && (!$arr[1] && $arr[2])) {
                    $this->db->where('no_kk', $arr[1]);
                    $balita = $this->db->get('databalita')->row_array();
                }
                if (empty($balita)) {
                    $v_with_name = true;
                }

                if ($arr[3] && $v_with_name == true) {
                    $this->db->where('nama_balita', $arr[3]);
                    $balita = $this->db->get('databalita')->row_array();
                }

                if ($balita) {
                    $this->db->insert('datasets', [
                        'id_balita' => $balita['id'],
                        'umur' => $arr[4],
                        'berat_badan' => $arr[5],
                        'tinggi_badan' => $arr[6],
                        // 'lingkar_lengan' => $arr[7],
                        // 'lingkar_kepala' => $arr[8],
                        'lingkar_lengan' => 0,
                        'lingkar_kepala' => 0,
                        // 'label' => $label,
                        'label_manual' => $label,
                    ]);
                }
            }
            echo "<script>alert('Data Uji berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_dataset';</script>";
        } else {
            echo "<script>alert('Data Uji gagal disimpan, pastikan format import .csv dan data sudah terisi semua'); location.href = '" . base_url() . "panel/daftar_dataset';</script>";
        }
    }

    // Halaman Daftar User
    public function daftar_user()
    {
        $this->db->where_in('role', ['user', 'posyandu']);
        $data['datasets'] = $this->db->get('users')->result_array();
        $data['active'] = 'datauser';
        $this->load->view('v_header', $data);
        $this->load->view('v_daftar_user');
        $this->load->view('v_footer');
    }

    // Halaman & Mekanisme Tambah dan Edit User
    public function tambah_user()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $params = $this->input->post();

            if ($_FILES['foto']['name']) {
                $upload_dir = './assets/upload/avatar/';

                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }

                $temp_file = $_FILES['foto']['tmp_name'];
                $original_file = $_FILES['foto']['name'];

                $unique_filename = uniqid() . '_' . $original_file;
                if (move_uploaded_file($temp_file, $upload_dir . $unique_filename)) {
                    // echo "File uploaded successfully!";
                } else {
                    // echo "Error uploading file.";
                }
            } else {
                // echo "No file uploaded or an error occurred.";
            }

            if ($unique_filename) {
                if ((int) $params['id'] > 0) {
                    $this->db->where('id', $params['id']);
                    $this->db->update('users', [
                        'username' => $params['username'],
                        'password' => $params['password'],
                        'nama' => $params['nama'],
                        'foto' => base_url() . 'assets/upload/avatar/' . $unique_filename,
                        'role' => $params['role'],
                        'desa' => $params['role'] == 'user' ? '' : $params['desa'],
                        'posyandu' => $params['role'] == 'user' ? '' : $params['posyandu'],
                    ]);
                } else {
                    $this->db->insert('users', [
                        'username' => $params['username'],
                        'password' => $params['password'],
                        'nama' => $params['nama'],
                        'foto' => base_url() . 'assets/upload/avatar/' . $unique_filename,
                        'role' => $params['role'],
                        'desa' => $params['role'] == 'user' ? '' : $params['desa'],
                        'posyandu' => $params['role'] == 'user' ? '' : $params['posyandu'],
                    ]);
                }
            } else {
                if ((int) $params['id'] > 0) {
                    $this->db->where('id', $params['id']);
                    $this->db->update('users', [
                        'username' => $params['username'],
                        'password' => $params['password'],
                        'nama' => $params['nama'],
                        // 'foto' => base_url() . 'assets/upload/avatar/default.jpg',
                        'role' => $params['role'],
                        'desa' => $params['role'] == 'user' ? '' : $params['desa'],
                        'posyandu' => $params['role'] == 'user' ? '' : $params['posyandu'],
                    ]);
                } else {
                    $this->db->insert('users', [
                        'username' => $params['username'],
                        'password' => $params['password'],
                        'nama' => $params['nama'],
                        'foto' => base_url() . 'assets/upload/avatar/default.jpg',
                        'role' => $params['role'],
                        'desa' => $params['role'] == 'user' ? '' : $params['desa'],
                        'posyandu' => $params['role'] == 'user' ? '' : $params['posyandu'],
                    ]);
                }
            }

            echo "<script>alert('Data berhasil disimpan'); location.href = '" . base_url() . "panel/daftar_user';</script>";
        } else {
            $params = $_REQUEST;
            $data['fetch'] = [];
            $id = $params['id'];
            if ((int) $id > 0) {
                $this->db->where('id', $id);
                $data['fetch'] = $this->db->get('users')->row_array();
            }

            $data['desa'] = $this->db->get('desa')->result_array();
            $data['id'] = $id;
            $data['active'] = 'datauser';
            $this->load->view('v_header', $data);
            $this->load->view('v_tambah_user');
            $this->load->view('v_footer');
        }
    }

    // Mekanisme Hapus User
    public function delete_user()
    {
        $params = $_REQUEST;
        $this->db->where('id', $params['id']);
        $this->db->delete('users');

        echo "<script>alert('Dataset berhasil dihapus'); location.href = '" . base_url() . "panel/daftar_user';</script>";
    }
    // ====================== END.. MEKANISME / HALAMAN BELUM TERPAKAI =========================
}
