<x-layout>

<section id="post">
    <a href="/reno-artistry/public">Back</a>
    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('/images/reno-artistry-logo.webp') }}" />
    <h1>{{ $post->title }}</h1>
    <h2>John Doe</h2>
    <x-post-tags :tagsCsv="$post->tags" />
    <p>{{ $post->description }}</p>
    <a href="mailto:{{ $post->email }}">Contact</a>
    <a href="{{ $post->website }}">View Website</a>
</section>

</x-layout>
