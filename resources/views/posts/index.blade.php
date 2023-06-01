<x-layout>
    @include('partials._hero')

    <section id="listings">
        @include('partials._search')

        <div class="btn-container">
            <a class="btn font-roboto-regular color-primary-bg color-white-1" href="/reno-artistry/public#listings">Show all</a>
            <a class="btn font-roboto-regular color-primary-bg color-white-1" href="/reno-artistry/public/posts/create">Add Your Art</a>
        </div>
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
