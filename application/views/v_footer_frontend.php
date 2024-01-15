<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>Copyright &copy; 2023 Anti Stunting</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- jquery Min JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/easing.js"></script>
<!-- Color JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/colors.js"></script>
<!-- Popper JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/owl-carousel.js"></script>
<!-- counterup JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/steller.js"></script>
<!-- Wow JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="<?php echo base_url(); ?>assets_frontend/js/main.js"></script>
</body>

</html>

<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

<script>
    $("#tinggi_lansia").on("input", function() {
        var tinggiLansia = $(this).val()
        var beratBadan = $('#berat_badan').val()
        var result = beratBadan / ((tinggiLansia / 100) * (tinggiLansia / 100))
        $('#imt').val(result.toFixed(4))
    });
    $("#berat_badan").on("input", function() {
        var tinggiLansia = $('#tinggi_lansia').val()
        var beratBadan = $(this).val()
        var result = beratBadan / ((tinggiLansia / 100) * (tinggiLansia / 100))
        $('#imt').val(result.toFixed(4))
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var data = {
        labels: <?php echo json_encode($nama_wilayah); ?>,
        datasets: <?php echo json_encode($datasets); ?>
    };

    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(context) {
                        var label = context.dataset.label || '';
                        if (label) {
                            label += ': ';
                        }
                        label += context.parsed.y + '%';
                        return label;
                    }
                }
            }
        }
    };

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
<script>
    var markerData = <?php echo json_encode($peta); ?>;
    var map = L.map('map').setView([-7.4054, 109.2244], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    var categories = <?php echo json_encode($kategori); ?>;
    var colors = ['#e74c3c', '#3498db', '#2ecc71'];
    var categoryIcons = <?php echo json_encode($icon_kategori); ?>

    var legend = L.control({ position: 'topright' });
    legend.onAdd = function (map) {
        var div = L.DomUtil.create('div', 'legend');
        for (var i = 0; i < categories.length; i++) {
            div.innerHTML += '<i style="background:' + colors[i] + '"></i> ' + categories[i] + '<br>';
        }
        return div;
    };
    legend.addTo(map);

    var banyumasBounds = L.latLngBounds(
        L.latLng(-7.5, 109.1),
        L.latLng(-7.0, 109.7)
    );

    for (var i = 0; i < markerData.length; i++) {
        var marker = L.marker([markerData[i].lat, markerData[i].lng], { 
            title: markerData[i].label,
            icon: L.icon({
                iconUrl: categoryIcons[markerData[i].category],
                iconSize: [25, 41],
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            })
        });
        marker.bindPopup('<strong>' + markerData[i].label + '</strong><br>Kategori: ' + markerData[i].category);
        marker.addTo(map);
    }
    // var predefinedPolygonCoords = [
    //     [-7.3363, 108.9136],
    //     [-7.5855, 109.1105],
    //     [-7.5872, 109.1624],
    //     [-7.5595, 109.1967],
    //     [-7.5151, 109.2001],
    //     [-7.4868, 109.1575],
    //     [-7.4907, 109.1285],
    //     [-7.5149, 109.1161],
    //     [-7.5363, 109.1136]
    // ];

    // var predefinedPolygon = L.polygon(predefinedPolygonCoords, {
    //     color: 'grey',
    //     weight: 3,
    //     opacity: 0.7,
    //     fillOpacity: 0.2
    // }).addTo(map);
</script>