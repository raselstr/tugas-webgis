<div class="row">
    <div class="col-sm-8">
        <div id="map" style="width: 100%; height: 600px;"></div>
    </div>
    <div class="col-sm-4">
        <?php 
            // Jika gagal
            echo validation_errors('<div class="alert alert-danger">','</div>');
            
            // Notifikasi Pesan data berhasil disimpan
            if($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('pesan');
                echo '</div>';
                
            }

        ?>
        <?= form_open('lokasi/input'); ?>
            <div class="form-group">
                <label>Nama Lokasi</label>
                <input class = "form-control" name="nama_lokasi" placeholder="Nama Lokasi">
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <input class = "form-control" name="latitude" id="Latitude" placeholder="Latitude">
            </div>
            <div class="form-group">
                <label>Longitude</label>
                <input class = "form-control" name="longitude" id="Longitude" placeholder="Longitude">
            </div>

            <button type = "submit" class = "btn btn-primary">Simpan</button>
            <button type = "reset" class = "btn btn-warning">Reset</button>
        <?= form_close(); ?>
    </div>
</div>


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
		zoom: 5,
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

    var layercontrol = L.control.layers(baseLayers).addTo(map);

    // Get Coordinate
    // var latInput = document.querySelector("[name=Latitude]");
    // var lngInput = document.querySelector("[name=Longitute]");

    var latInput = document.getElementById('Latitude');
    var lngInput = document.getElementById('Longitude');

    var curLocation = [-0.7361645183095288, 118.35163039557897];

    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: 'true',
    });

    // Mengambil Koordinat saat marker di pindah
    marker.on('dragend',function(e){
        var position = marker.getLatLng();
        marker.setLatLng(position,{
            curLocation
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng);
    });

    // Mengambil Koordinate saat map di klik
    map.on('click', function(e){
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        } else {
            
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    });

    map.addLayer(marker);


</script>