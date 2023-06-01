<x-layout>

    <section id="manage">
        <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
        <div class="container">
            <h1 class="font-mont-bold color-primary">Manage Posts</h1>
            <a class="btn color-white-1 color-primary-bg" href="/reno-artistry/public/posts/create">Add Post</a>
        </div>
        @unless ($posts->isEmpty())
            @foreach ($posts as $post)
                <div class="item-container">
                    <div class="item-text">
                        <h2 class="font-rale-bold color-secondary">{{ $post->title }}</h2>
                        <p class="font-roboto-regular color-secondary">{{ $post->created_at->format('F d, Y') }}</p>
                    </div>
                    <div class="btns">
                    <a class="btn color-white-1 color-primary-bg"
                        href="/reno-artistry/public/posts/{{ $post->id }}/edit">Edit</a>
                    <form method="POST" action="/reno-artistry/public/posts/{{ $post->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn color-white-1" type="submit">Delete</button>
                    </form>
                    </div>
                </div>
            @endforeach
        @else
            <a href="/reno-artistry/public/posts/create">Add your first listing!</a>
        @endunless
    </section>

</x-layout>
