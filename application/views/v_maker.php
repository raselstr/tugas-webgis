<div id="map" style="width: 100%; height: 600px;"></div>

<script>
    // var map = L.map('map').setView([2.987555901997222, 99.6228673583151], 13);

    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    });


    var peta2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: '© Google Maps',
        maxZoom: 20,
    });


    var peta3 = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });


    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox/outdoors-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q'
    });


    var peta5 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });


    var peta6 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10'
    });


    var peta7 = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://carto.com/attributions">CARTO</a>'
    });


    var peta8 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Map data &copy; <a href="https://www.arcgis.com/">ArcGIS</a>'
    });


    var peta9 = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });


    var peta10 = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });

    var map = L.map('map', {
		center: [2.987555901997222, 99.6228673583151],
		zoom: 14,
		layers: [peta3],
	});

    var baseLayers = {
		'Peta': peta1,
		'Google Map': peta2,
        'Satelit': peta3,
        'Jalan': peta4,
        'Jalan dan Jalur Transportasi': peta5,
        'Mode Malam': peta6,
        'Bangunan': peta7,
        'Atlas': peta8,
        'Satelit Lokasi & Tempat': peta9,
        'Peta Lokasi & Tempat': peta10,

	};

    var layerControl = L.control.layers(baseLayers).addTo(map);

    // Icon Marker
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

</script>