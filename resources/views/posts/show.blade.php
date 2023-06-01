<x-layout>

<section id="post">
    <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
    <div class="container">
    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('/images/reno-artistry-logo.webp') }}" />
    <h1 class="font-mont-bold color-primary">{{ $post->title }}</h1>
    <p class="color-secondary font-roboto-regular">{{ $post->created_at->format('F d, Y') }}</p>
    <h2 class="color-secondary font-rale-bold">{{ $post->user->name }}</h2>
    <x-post-tags :tagsCsv="$post->tags" />
    <p class="font-roboto-regular color-secondary">{{ $post->description }}</p>
    @if(isset($post->email))
    <a class="btn color-primary-bg font-roboto-regular color-white-1" href="mailto:{{ $post->email }}">Contact</a>
    @endif
    @if(isset($post->website))
    <a class="btn color-primary-bg font-roboto-regular color-white-1" href="{{ $post->website }}">View Website</a>
    @endif
    </div>
</section>

</x-layout>
