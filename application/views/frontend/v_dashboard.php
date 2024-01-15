<style>
    .why-choose .choose-left h3:before {
        background: #A7CAFF !important;
    }
    
    #map {
        width: 100%;
    }

    .legend {
        background: white;
        padding: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .legend i {
        width: 20px;
        height: 20px;
        margin-right: 5px;
        display: inline-block;
    }
</style>

<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="choose-left">
                    <h3>Apa itu Stunting?</h3>
                    <p class="mb-3" style="color: #000000; text-align: justify;">Stunting atau sering disebut kerdil adalah kondisi gagal tumbuh pada anak di bawah usia lima tahun (balita) akibat masalah kurang gizi kronis, ini disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama. Kurangnya asupan nutrisi selama masa pertumbuhan anak merupakan penyebab utama stunting. stunting bukan hanya urusan tinggi badan tetapi yang paling berbahaya adalah rendahnya kemampuan anak untuk belajar, keterbelakangan mental, dan munculnya penyakit-penyakit kronis.</p>
                    <p style="color: #000000; text-align: justify;">Menurut WHO, suatu negara dikatakan memiliki masalah stunting bila kasusnya mencapai angka di atas 20%. Sementara itu Kementerian Kesehatan mengumumkan hasil Survei Status Gizi Indonesia (SSGI) pada Rapat Kerja Nasional BKKBN, Prevalensi Stunting di Indonesia Turun dari 24,4% di tahun 2021 menjadi 21,6% di 2022. Menteri Kesehatan Budi Gunadi Sadikin mengharapkan di masa yang normal tahun ini penurunan kasus stunting diharapkan bisa lebih tajam lagi sehingga target penurunan stunting di angka 14% di 2024 dapat tercapai.</p>
                </div>
            </div>
            <div class="col-lg-4 col-12" style="margin: auto;">
                <center>
                    <img src="<?php echo base_url(); ?>assets_frontend/img/index/sidebar.svg" style="width: 100%;" />
                </center>
            </div>
        </div>
    </div>
</section>

<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Grafik Data Stunting di Kabupaten Banyumas per-Kecamatan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12" style="margin: auto;">
                <center>
                    <!-- <img src="<?php echo base_url(); ?>assets_frontend/img/index/grafik.svg" style="width: 100%;" /> -->
                    <canvas id="myChart" width="auto" height="100"></canvas>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Pemetaan Kabupaten Banyumas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- <img src="<?php echo base_url(); ?>assets_frontend/img/index/pemetaan.svg" style="width: 100%;" /> -->
                <div class="map_container">
                    <div class="map">
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>