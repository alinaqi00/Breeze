@extends('Frontend.layouts.app')

@section('content')
    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row gy-6">
                @foreach($products as $product)
                    <div class="col-md-4 col-lg-6 d-flex" data-aos="zoom-out">
                        <div class="card bg-light">
                            <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $product->image)) }}" alt="" class="card-img-top product-image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
