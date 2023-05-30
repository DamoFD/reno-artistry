<x-layout>

    <section id="create-post">
        <a href="/reno-artistry/public">Back</a>
    <div>
    <h1>Edit Post</h1>
    <p>Edit: {{ $post->title }}</p>
    <form method="POST" action="/reno-artistry/public/posts/{{ $post->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Title*</label>
        <input value="{{ $post->title }}" type="text" name="title" placeholder="Example: My Amazing Masterpiece" />
    
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    
        <label>Website (optional)</label>
        <input value="{{ $post->website }}" type="url" name="website" placeholder="Example: https://example.com" />
        
        @error('website')
            <p>{{ $message }}</p>
        @enderror
        
        <label>Contact Email (optional)</label>
        <input value="{{ $post->email }}" type="email" name="email" placeholder="Example: example@gmail.com" />
        
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        
        <label>Tags (Comma Seperated)*</label>
        <input value="{{ $post->tags }}" type="text" name="tags" placeholder="Example: Watercolor,Mural,Sculpture,etc" />
        
        @error('tags')
            <p>{{ $message }}</p>
        @enderror
        
        <label>Image</label>
        <input type="file" name="image" />

        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('/images/reno-artistry-logo.webp') }}" />
    
        @error('image')
            <p>{{ $message }}</p>
        @enderror
    
        <label>Description</label>
        <textarea placeholder="Talk about the what, why, and how with your art." name="description">
            {{ $post->description }}
        </textarea>
        
        @error('description')
            <p>{{ $message }}</p>
        @enderror
        
        <button type="submit">Create Post</button>
    </form>
    </div>
    </section>
    </x-layout>