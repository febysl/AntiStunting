<style>
    .why-choose .choose-left h3:before {
        background: #FFFFFF !important;
        position: unset !important;
    }

    .why-choose .choose-left h3 {
        background-color: #A7CAFF !important;
        color: white !important;
        border-radius: 10px;
        padding: 10px;
        width: 30%;
        text-align: center;
        font-size: 20px;
    }

    .blog .single-news .news-body .date {
        background: #E5EFFE;
        color: #1877F2;
    }

    .row::after {
        content: '';
        display: block;
        clear: both;
    }

    .row {
        position: relative;
    }

    .circle-background {
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 50%;
        background-color: #a7caff;
        border-radius: 50%;
        text-align: center;
        z-index: 0;
    }

    .zindex1 {
        z-index: 1;
    }

    @media (max-width: 767px) {
        .why-choose .choose-left h3 {
            width: 100%;
        }
    }
</style>

<section class="why-choose section" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="choose-left">
                    <h3>Pencegahan Stunting</h3>
                    <p class="mb-3" style="color: #000000; text-align: justify;">Salah satu fokus pemerintah saat ini adalah pencegahan stunting. Upaya ini bertujuan agar anak-anak Indonesia dapat tumbuh dan berkembang secara optimal dan maksimal, dengan disertai kemampuan emosional, sosial, dan fisik yang siap untuk belajar, serta mampu berinovasi dan berkompetisi di tingkat global.</p>
                    <p style="color: #000000; text-align: justify;">Terdapat beberapa hal yang bisa dilakukan untuk mengurangi potensi stunting pada anak, yaitu memberikan ASI eksklusif pada bayi hingga berusia 6 bulan, memantau perkembangan anak dan membawa ke posyandu secara berkala, mengkonsumsi secara rutin Tablet tambah Darah (TTD), memberikan MPASI yang begizi dan kaya protein hewani untuk bayi yang berusia diatas 6 bulan.</p>
                    <hr />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog section" id="blog" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="font-weight: 700;" class="mb-3">Artikel Terkait</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 zindex1">
                <div class="single-news">
                    <div class="news-head">
                        <img src="<?php echo base_url(); ?>assets_frontend/img/blog/1.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">Pertumbuhan Anak</div>
                            <div class="date">Balita</div>
                            <h2><a href="<?php echo base_url(); ?>blog/artikel_1">Stunting Akibat Gizi Buruk, Ini 3 Faktanya</a></h2>
                            <p class="text">Stunting merupakan gangguan pertumbuhan dan perkembangan yang dialami oleh anak.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 zindex1">
                <div class="single-news">
                    <div class="news-head">
                        <img src="<?php echo base_url(); ?>assets_frontend/img/blog/2.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">Stunting</div>
                            <h2><a href="<?php echo base_url(); ?>blog/artikel_2">Ketahui Cara Tepat untuk Mencegah Stunting pada Anak</a></h2>
                            <p class="text">Stunting membuat anak bertubuh pendek dari seumurannya dan rentan terserang penyakit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 zindex1">
                <div class="single-news">
                    <div class="news-head">
                        <img src="<?php echo base_url(); ?>assets_frontend/img/blog/3.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">Stunting</div>
                            <h2><a href="<?php echo base_url(); ?>blog/artikel_3">4 Dampak Stunting yang Terjadi pada Anak.</a></h2>
                            <p class="text">Stunting bisa memberikan dampak negatif untuk kesehatan dan pertumbuhan anak. Stunting, atau pertumbuhan...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="<?php echo base_url(); ?>assets_frontend/img/blog/4.png" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">05 Jan, 2020</div>
                            <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="circle-background"></div>
        </div>
    </div>
</section>