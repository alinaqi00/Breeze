@extends('Frontend.layouts.app')

@section('content')

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row">
            <!-- Left side: Cards -->
            <div class="col-md-6 mb-5">
                <div class="row d-flex mb-5 contact-info">
                    <!-- Card 1: Address -->
                    <div class="col-md-12 mb-4">
                        <div class="info bg-white p-4">
                            <p><span>Address:</span> 198 West 21th Street,<br> Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                    <!-- Card 2: Phone -->
                    <div class="col-md-12 mb-4">
                        <div class="info bg-white p-4">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98 <br></a></p>
                        </div>
                    </div>
                    <!-- Card 3: Email -->
                    <div class="col-md-12 mb-4">
                        <div class="info bg-white p-4">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com <br></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side: Form -->
            <div class="col-md-6">
                <form action="{{ route('contact.submit') }}" method="post" class="bg-white p-5 contact-form">
                    @csrf
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row">
            <div class="col-md-12">
                <div id="map" class="map"></div>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
<script>
    function initMap() {
        var myLatLng = {lat: 40.7128, lng: -74.0060}; // Replace with your business location coordinates

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Your Business Location'
        });
    }
</script>

@endsection
