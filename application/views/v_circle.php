<div id="map" style="width: 100%; height: 600px;"></div>

<script>

	var map = L.map('map').setView([2.987555901997222, 99.6228673583151], 13);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

    var icon1 = L.icon({
        iconUrl: '<?= base_url('icon/gedung.png'); ?>',
        // shadowUrl: 'leaf-shadow.png',

        iconSize:     [30, 55], // size of the icon
        // shadowSize:   [50, 64], // size of the shadow
        // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
        // shadowAnchor: [4, 62],  // the same for the shadow
        // popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var icon2 = L.icon({
        iconUrl: '<?= base_url('icon/RTLH.png'); ?>',

        iconSize:     [30, 55], // size of the icon
    });

    var icon3 = L.icon({
        iconUrl: '<?= base_url('icon/mck.png'); ?>',

        iconSize:     [30, 55], // size of the icon
    });


    // Marker
    L.marker([2.9873977117381325, 99.62285797909756], {icon: icon1}).bindPopup("<b> BKAD Kab. Asahan</b> <br>" +
                                                                    "Alamat Jl. Turi No. 7 Kisaran <br>" +
                                                                    "<img src='<?= base_url('foto/bkad.jpg')?>'width='280px'>").addTo(map);

    L.marker([2.9949262471847504, 99.7317974343648], {icon: icon2}).bindPopup("Rumah").addTo(map);

    L.marker([2.9636687575608565, 99.632756520392], {icon: icon3}).bindPopup("<b>STMIK Royal</b> <br>" +
                                                                "Alamat : Jln. Prof. H.M. Yamin No. 173 Kisaran <br>" +
                                                                "<img src='<?= base_url('foto/Royal.jpg')?>'width='280px'>").addTo(map);


// Circle
    L.circle([2.987394844406791, 99.62282149738866], {
        color: 'red',
        // fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(map);

    L.circle([2.9636687575608565, 99.632756520392], {
        color: 'green',
        // fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 800
    }).addTo(map);

    L.circle([2.9949262471847504, 99.7317974343648], {
        color: 'yellow',
        // fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 300
    }).addTo(map);

</script>