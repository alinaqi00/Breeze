@extends('Frontend.layouts.app')

@section('content')

<!-- About Section Start -->
<div id="about-us">
    <div class="container">
        <h3>About us</h3>
        <div class="row" style="margin-right: 0; margin-left: 0;" data-aos="fade-up" data-aos-delay="300">
            @foreach($aboutUsData as $about)
                <div class="col-md-6">
                    @if ($about->image)
                        <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $about->image)) }}" alt="Post Image" style="max-width: 100%; height: auto;">
                    @else
                        No Image
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="section-title" data-aos="zoom-out">
                        
                    </div>
                    <div class="row content" data-aos="fade-up">
                        <div class="col-lg-12">
                            <p>
                                {!! $about->content !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About Section End -->

@endsection
