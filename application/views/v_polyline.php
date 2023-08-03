<div id="map" style="width: 100%; height: 600px;"></div>

<script>

	var map = L.map('map').setView([2.987555901997222, 99.6228673583151], 13);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);


    var latlngs = [
        [2.985714626714259, 99.62393717128738],
        [2.9875480773457763, 99.62393266036773],
        [2.987615649177878, 99.62266509194545]
    ];
    L.polyline(latlngs, {color: 'red', weight : 5}).addTo(map);

    var latAmik = [
        [2.973114009654883, 99.62759741620644],
        [2.9725893684259783, 99.62716624092711],
        [2.972142371070712, 99.62719469005157],
        [2.971393156365272, 99.62832367427046],
        [2.9635991671061275, 99.63261183506089],
        [2.9637071291815063, 99.63282994499038]
    ];
    L.polyline(latAmik, {color: 'blue', weight : 8}).addTo(map);

</script>