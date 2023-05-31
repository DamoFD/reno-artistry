<x-layout>

    <section id="manage">
        <a href="/reno-artistry/public">Back</a>
        <h1>Manage Posts</h1>
        <a href="/reno-artistry/public/posts/create">Add Post</a>
        <div>
            @unless($posts->isEmpty())
            @foreach($posts as $post)
            <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->created_at->format('F d, Y') }}</p>
            <a href="/reno-artistry/public/posts/{{ $post->id }}/edit">Edit</a>
            <form method="POST" action="/reno-artistry/public/posts/{{ $post->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>    
            </div>
            @endforeach
            @else
            <a href="/reno-artistry/public/posts/create">Add your first listing!</a>
            @endunless
        </div>
    </section>

</x-layout>