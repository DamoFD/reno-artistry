<x-layout>

<section id="post">
    <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
    <div class="container">
    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('/images/reno-artistry-logo.webp') }}" />
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created_at->format('F d, Y') }}</p>
    <h2>{{ $post->user->name }}</h2>
    <x-post-tags :tagsCsv="$post->tags" />
    <p>{{ $post->description }}</p>
    @if(isset($post->email))
    <a href="mailto:{{ $post->email }}">Contact</a>
    @endif
    @if(isset($post->website))
    <a href="{{ $post->website }}">View Website</a>
    @endif
    </div>
</section>

</x-layout>
