@extends('Frontend.layouts.app')

@section('content')
<br><br><br>
<div id="about-us" class="bg-light">
  <div class="container">
      <div class="row" style="margin-right: 0; margin-left: 0;" data-aos="fade-up" data-aos-delay="300">
          @foreach($aboutUsData as $about)
              <div class="col-md-12">
                  <div class="card bg-light" style="border:none">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-7">
                                  @if ($about->image)
                                      <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $about->image)) }}" alt="Post Image" class="img-fluid" style="width: 100%; height: auto;">
                                  @else
                                      No Image
                                  @endif
                              </div>
                              <div class="col-md-5">
                                  <div class="row content" data-aos="fade-up">
                                      <div class="col-lg-12 text-center">
                                          <p>
                                              {!! $about->content !!}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</div>



    
    <br><br>

    <!-- Featured Products Section Start -->
    <section class="featured-products">
        <div class="container">
            <h2 class="text-center">Featured Products</h2>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row gy-4">
                @foreach($products->take(6) as $product)
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-light">
                            <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $product->image)) }}" alt="" class="card-img-top product-image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                
                                
                            
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Products Section End -->
     <br><br>
     <!-- Featured Services Section Start -->
     <section  class="bg-light">
         <div class="container">
             <h2 class="text-center" >Our Strength</h2>
     
             <div class="row gy-4">
                 @foreach($services->take(3) as $service)
                     <div class="col-xl-4 col-md-6" data-aos="zoom-out">
                         <div class="service-item position-relative box d-flex flex-column" style="background-color: #82ae46; padding: 20px; border-radius: 10px; color: white; height: 100%;">
                             <div class="icon"><i class="{{ $service->icon }} icon"></i></div>
                             <h4 style="margin-bottom: 15px;"><a href="#" class="stretched-link" style="color: white;">{{ $service->title }}</a></h4>
                             <p style="list-style-type: disc; margin-bottom: 0; color: white; flex-grow: 1;">{!! $service->content !!}</p>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>
     <!-- Featured Services Section End -->
     <br><br>
     

    {{--  <!-- Team Section Start -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Team</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>
            <div class="row gy-5">
                @foreach($team as $teamMember)
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 200 }}">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $teamMember->image)) }}" alt="{{ $teamMember->name }}" class="img-fluid" style="max-width: 350px; margin-right: 20px;">
                            </div>
                            <div class="member-info">
                                <h4>{{ $teamMember->name }}</h4>
                                <span>{{ $teamMember->role }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section End -->  --}}

    <div class="container">
        <div class="row">
            <!-- Visit Us -->
            <div class="row">
                <!-- Visit Us -->
                <div class="col-md-4">
                    <div class="card h-100 mb-3">
                        <img src="wp-content/uploads/2023/11/location.gif" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title">VISIT US</h3>
                            <p class="card-text">Po Box no: 15826<br>Office # G-01 Mubarak Al Jafla Building Near Latifa Mosque Al Murar Deira Dubai UAE</p>
                        </div>
                    </div>
                </div>
            
                <!-- Message Us -->
                <div class="col-md-4">
                    <div class="card h-100 mb-3">
                        <div class="card-body">
                            <h3 class="card-title">MESSAGE US</h3>
                            <p class="card-text">info@burjarabfst.com<br>Imran@burjarabfst.com<br>burjarabfoodstufftrading@gmail.com</p>
                        </div>
                    </div>
                </div>
            
                <!-- Call Us -->
                <div class="col-md-4">
                    <div class="card h-100 mb-3">
                        <div class="card-body">
                            <h3 class="card-title">CALL US</h3>
                            <p class="card-text">Landline no: 043941184<br>Mobile no: 0507673781</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
@endsection
