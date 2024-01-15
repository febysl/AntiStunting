<style>
    .why-choose .choose-left h3:before {
        background: #A7CAFF !important;
    }

    .contact-us .contact-us-form h2:before {
        background: #fff !important;
    }

    .contact-us .inner {
        box-shadow: unset !important;
    }

    .container::after {
        content: '';
        display: block;
        clear: both;
    }

    .container {
        position: relative;
    }

    @media (min-width: 1024px) {
        .circle-background {
            position: absolute;
            top: 0%;
            left: 0%;
            transform: translateX(-50%);
            width: 500px;
            height: 500px;
            background: url(http://localhost/anti_stunting/assets_frontend/img/login/bg.svg);
            text-align: center;
            z-index: 0;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }
    }
</style>

<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <form class="form" method="post" action="<?php echo base_url(); ?>login/do_login">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- <div class="contact-us-left">
                            <img src="<?php echo base_url(); ?>assets_frontend/img/login/bg.svg" style="width: 100%; height: auto;" />
                        </div> -->
                    </div>
                    <div class="col-lg-8">
                        <div class="container">
                            <div class="contact-us-form" style="border-radius: 20px; background: url('<?php echo base_url(); ?>assets_frontend/img/login/bg-form.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                                <h2 style="color: white;">Log In</h2>
                                <p style="color: white;">Silahkan masukkan kredensial Anda dibawah ini</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Username" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form -->
                            </div>
                            <div class="contact-us-form" style="padding: 0px; margin-top: 2%;">
                                <div class="form-group login-btn">
                                    <button class="btn" type="submit" style="background: #A7CAFF; border-radius: 20px;">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="circle-background"></div>
    </div>
</section>