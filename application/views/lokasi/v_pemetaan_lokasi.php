<?php 
// Notifikasi Pesan data berhasil disimpan
        if($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('pesan');
            echo '</div>';

        }
?>

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
		center: [2.99913657150925, 99.62827943754945],
		zoom: 13,
		layers: [peta2],
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

    var layercontrol = L.control.layers(baseLayers).addTo(map);

    <?php foreach($lokasi as $key=>$value) { ?>
        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
        .bindPopup('<b><?= $value->nama_lokasi ?></b><br>'+
                    'Latitude : <?= $value->latitude ?><br>'+
                    'Longitude : <?= $value->longitude ?><br><br>'+
                    '<div class="text-center">' +
                    '<a class="btn btn-xs btn-success"' +
                    'href="<?= base_url("lokasi/edit/".$value->id) ?>">Edit</a>   '+
                    '<a class="btn btn-xs btn-warning"' +
                    'href="<?= base_url("lokasi/detail/".$value->id) ?>">Detail</a>   '+
                    '<a onclick="return confirm()" class="btn btn-xs btn-danger"' +
                    'href="<?= base_url('lokasi/delete/'.$value->id) ?>">Hapus</a>'+
                    '</div></div>')
        .addTo(map);

    
    <?php } ?>

</script>