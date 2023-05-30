@extends('layout')

@section('content')
@include('partials._hero')

<section id="listings">
    <div class="grid">
        @unless (count($posts) == 0)
            @foreach ($posts as $post)
                <div class="grid_item">
                    <img class="grid_img" src="{{ asset('images/reno-artistry-logo.webp') }}" />
                    <div class="grid_content_container">
                        <a href="/reno-artistry/public/posts/{{ $post->id }}">
                            <h2 class="font-mont-regular color-secondary font-size-lg">
                                {{ $post->title }}
                            </h2>
                        </a>
                        <h3 class="font-rale-bold font-size-sm">John Doe</h3>
                        <ul class="tag_container">
                            <li>Paint</li>
                            <li>Color</li>
                            <li>Brush</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        @else
            <p>No listings found.</p>
        @endunless
    </div>
</section>
@endsection
