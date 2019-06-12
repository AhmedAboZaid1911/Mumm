

        var map = new GMaps({
            div: '#gmap_geocoding',
            lat: 30.0444196,
            lng: 31.23571160000006
        });


        if(lat != '' && long != ''){

            map.removeMarkers();
            map.setCenter(lat, long);
            map.addMarker({
                lat: lat,
                lng: long
            });
        }

        map.addListener("click", function (e) {

            //lat and lng is available in e object
            var latLng = e.latLng;
            var lat = latLng.lat();
            var long = latLng.lng();
            setMark(lat, long);

            $('#lat').val(lat);
            $('#long').val(long);

        });

        $('#set_mark_btn').click(function () {
            var lat = $('#lat').val();
            var long = $('#long').val();
            setMark(lat, long);
        });

        var setMark = function(lat, long) {
            map.removeMarkers();
            map.setCenter(lat, long);
            map.addMarker({
                lat: lat,
                lng: long
            });
        }


