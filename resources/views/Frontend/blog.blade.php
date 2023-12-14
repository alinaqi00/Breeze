@extends('frontend.layouts.app')

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-12 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch d-md-flex">
                                    <a href="{{ route('Frontend.blog.show', $post->id) }}" class="block-20"
                                       style="background-image: url('{{ asset('admin-assets/' . str_replace(' ', '_', $post->image)) }}');">
                                    </a>
                                    <div class="text d-block pl-md-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">{{ $post->created_at->format('M d, Y') }}</a></div>
                                            <div><a href="#">{{ $post->author }}</a></div>
                                            <div><a href="#" class="meta-chat"><span
                                                        class="icon-chat"></span> {{ $post->comments_count }}</a></div>
                                        </div>
                                        <h3 class="heading"><a
                                                href="{{ route('Frontend.blog.show', $post->id) }}">{{ $post->title }}</a>
                                        </h3>
                                        <p>{!! \Illuminate\Support\Str::words($post->content, 20, '...') !!}</p>
                                        <p><a href="{{ route('Frontend.blog.show', $post->id) }}"
                                              class="btn btn-primary py-2 px-3">Read more</a></p>
                                    </div>
                                </div>
                            </div><!-- End post list item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection
