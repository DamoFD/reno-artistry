<x-layout>

    <section id="create-post">
        <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
    <div class="container">
    <h1 class="font-mont-bold color-primary">Edit Post</h1>
    <p class="font-roboto-regular color-secondary">Edit: {{ $post->title }}</p>
    <form method="POST" action="/reno-artistry/public/posts/{{ $post->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Title*</label>
        <input value="{{ $post->title }}" type="text" name="title" placeholder="Example: My Amazing Masterpiece" />
    
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror
    
        <label>Website (optional)</label>
        <input value="{{ $post->website }}" type="url" name="website" placeholder="Example: https://example.com" />
        
        @error('website')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <label>Contact Email (optional)</label>
        <input value="{{ $post->email }}" type="email" name="email" placeholder="Example: example@gmail.com" />
        
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <label>Tags (Comma Seperated)*</label>
        <input value="{{ $post->tags }}" type="text" name="tags" placeholder="Example: Watercolor,Mural,Sculpture,etc" />
        
        @error('tags')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <label>Image</label>
        <input type="file" name="image" />

        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('/images/reno-artistry-logo.webp') }}" alt="{{ $post->title }}" />
    
        @error('image')
            <p class="error">{{ $message }}</p>
        @enderror
    
        <label>Description</label>
        <textarea placeholder="Talk about the what, why, and how with your art." name="description">
            {{ $post->description }}
        </textarea>
        
        @error('description')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <button class="color-white-1 font-rale-bold" type="submit">Update Post</button>
    </form>
    </div>
    </section>
    </x-layout>