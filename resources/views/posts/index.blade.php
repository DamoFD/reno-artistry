<x-layout>
@include('partials._hero')

<section id="listings">
@include('partials._search')

    <a href="/reno-artistry/public#listings">Show all</a>
    <a href="/reno-artistry/public/posts/create">Add Your Art</a>
    <div class="grid">
        @unless (count($posts) == 0)
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        @else
            <p>No listings found.</p>
        @endunless
    </div>

    <div class="pagination">
        {{ $posts->links() }}
    </div>
</section>
</x-layout>
