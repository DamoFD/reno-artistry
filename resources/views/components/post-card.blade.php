@props(['post'])

<div class="grid_item">
    <a class="img_link" href="/reno-artistry/public/posts/{{ $post->id }}">
    <img class="grid_img" src="{{ $post->image ? asset('storage/' . $post->image) : asset('/images/reno-artistry-logo.webp') }}" />
    </a>
    <div class="grid_content_container">
        <a href="/reno-artistry/public/posts/{{ $post->id }}">
            <h2 class="font-mont-regular color-secondary">
                {{ $post->title }}
            </h2>
        </a>
        <p class="font-roboto-regular color-secondary">{{ $post->created_at->format('F d, Y') }}</p>
        <h3 class="font-rale-bold font-size-sm">{{ $post->user->name }}</h3>
        <x-post-tags :tagsCsv="$post->tags" />
    </div>
</div>