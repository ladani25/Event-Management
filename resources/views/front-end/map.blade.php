<!DOCTYPE html>
<html>

<head>
    <title>Google Maps Integration</title>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ $googleMapsApiKey }}"></script>
        {{-- <div class="map">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
                height="585" style="border:0;" allowfullscreen="">
                </iframe>
        </div>
        </div> --}}
    <script>
        function initMap() {
            var defaultCoords = {
                lat: -34.397,
                lng: 150.644
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: defaultCoords
            });

            var marker = new google.maps.Marker({
                position: defaultCoords,
                map: map
            });

            map.addListener('click', function(event) {
                placeMarker(event.latLng, map);
            });
        }

        function placeMarker(location, map) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });

            document.getElementById('latitude').value = location.lat();
            document.getElementById('longitude').value = location.lng();
        }

        document.addEventListener('DOMContentLoaded', function() {
            initMap();
        });
    </script>
</head>

<body>
    <h1>Google Maps Integration</h1>
    <div id="map" style="height: 500px; width: 100%;"></div>
    <form action="{{ route('save_coordinates') }}" method="POST">
        @csrf
        <input type="text" id="latitude" name="latitude" placeholder="Latitude">
        <input type="text" id="longitude" name="longitude" placeholder="Longitude">
        <button type="submit">Save Coordinates</button>
    </form>
</body>

</html>
