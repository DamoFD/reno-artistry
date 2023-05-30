@extends('layout')

@section('content')

<section id="post">
    <a href="/reno-artistry/public">Back</a>
    <img src="{{ asset('images/reno-artistry-logo.webp') }}" />
    <h1>{{ $post->title }}</h1>
    <h2>John Doe</h2>
    <ul>
        <li>watercolor</li>
        <li>painting</li>
        <li>landscape</li>
    </ul>
    <p>{{ $post->description }}</p>
    <a href="mailto:{{ $post->email }}">Contact</a>
    <a href="{{ $post->website }}">View Website</a>
</section>

    @endsection
