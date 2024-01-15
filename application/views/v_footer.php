</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2023 Anti Stunting</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Silahkan klik keluar untuk melanjutkan</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>panel/logout">Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
    $("#pilihRole").on("change", function() {
        var _role = $(this).val()
        if (_role == 'user') {
            $('.pilihDesa').hide()
        } else {
            $('.pilihDesa').show()
        }
    });
</script>

<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"><  /script> -->

<!-- Grafik Pada Halaman Hasil Akurasi Pengujian Naive Bayes Waktu Klasifikasi Stunting & Tidak Stunting -->
<!-- Menggunakan Pie Chart -->
<?php if ($this->uri->segment(2) && $this->uri->segment(2) == 'hasil_akurasi') { ?>
    <script>
        try {
            var ctx2 = document.getElementById("myPieChart2");
            var myPieChart2 = new Chart(ctx2, {
                type: 'doughnut',
                data: {
                    labels: ["Sesuai (%)", "Tidak Sesuai (%)"],
                    datasets: [{
                        data: [<?php echo (int) $hasil_acc; ?>, <?php echo (int) 100 - $hasil_acc; ?>],
                        backgroundColor: ['#1cc88a', '#ff5252'],
                        hoverBackgroundColor: ['#17a673', '#ff0000'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                },
            });
        } catch (error) {}
    </script>
<?php } ?>

<!-- Grafik Pada Halaman Dashboard -->
<!-- Menggunakan Pie Chart -->
<?php if ($this->uri->segment(2) == '') { ?>
    <script>
        try {
            // Grafik Stunting & Tidak Stunting
            var ctx = document.getElementById("myPieChart3");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Stunting", "Tidak Stunting"],
                    datasets: [{
                        data: [<?php echo (int) $stunting; ?>, <?php echo (int) $tidak_stunting; ?>],
                        backgroundColor: ['#e74a3b', '#1cc88a'],
                        hoverBackgroundColor: ['#e71a3b', '#1ec88a'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                },
            });
        } catch (error) {}
    </script>

    <script>
        try {
           // Grafik Laki-Laki dan Perempuan
            var ctx = document.getElementById("myPieChart4");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Laki-Laki", "Perempuan"],
                    datasets: [{
                        data: [<?php echo (int) $l_data_anak; ?>, <?php echo (int) $p_data_anak; ?>],
                        backgroundColor: ['#1cc88a', '#36b9cc'],
                        hoverBackgroundColor: ['#17a673', '#2c9faf'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                },
            });
        } catch (error) {}
    </script>
<?php } ?>

<!-- Grafik Pada Halaman Hasil Klasifikasi Stunting & Tidak Stunting atau Grafik Pengujian -->
<!-- Menggunakan Pie Chart -->
<?php if ($this->uri->segment(2) && $this->uri->segment(2) == 'grafik_pengujian') { ?>
    <script>
        try {
            var ctx = document.getElementById("myBarChart1");
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Tidak Stunting", "Stunting"],
                    datasets: [{
                        label: ["Jumlah Anak"],
                        backgroundColor: ["#77DD77", "#FF6961"],
                        hoverBackgroundColor: ["green", "red"],
                        borderColor: ["#77DD77", "#FF6961"],
                        data: [<?php echo $laki_laki_tidak_stunting + $perempuan_tidak_stunting; ?>, <?php echo $laki_laki_stunting + $perempuan_stunting; ?>],
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 6
                            },
                            maxBarThickness: 25,
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                maxTicksLimit: 5,
                                padding: 10,
                                callback: function(value, index, values) {
                                    return '' + number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }],
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                            }
                        }
                    },
                }
            });
        } catch (error) {

        }
    </script>
<?php } ?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script>
    try {
        $('#datatable2').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                text: 'Download Excel',
                extend: 'excel',
                title: null,
                exportOptions: {
                    columns: ':visible:not(.exclude-export)'
                }
            }, ],
        });
        $('.buttons-excel').hide();
        $('#exportData').on('click', function() {
            $('.buttons-excel').click();
        });
    } catch (error) {

    }
</script>

</body>

</html>