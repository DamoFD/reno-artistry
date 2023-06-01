<x-layout>

<section id="create-post">
    <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
<div class="container">
<h1 class="font-mont-bold color-primary">Create a Post</h1>
<p class="font-roboto-regular color-secondary">Post your local Reno artwork</p>
<form method="POST" action="/reno-artistry/public/posts" enctype="multipart/form-data">
    @csrf
    <label>Title*</label>
    <input value="{{ old('title') }}" type="text" name="title" placeholder="My Amazing Masterpiece" />

    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror

    <label>Website (optional)</label>
    <input value="{{ old('website') }}" type="url" name="website" placeholder="https://example.com" />
    
    @error('website')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <label>Contact Email (optional)</label>
    <input value="{{ old('email') }}" type="email" name="email" placeholder="example@gmail.com" />
    
    @error('email')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <label>Tags (Comma Seperated)*</label>
    <input value="{{ old('tags') }}" type="text" name="tags" placeholder="Watercolor,Mural,Sculpture,etc" />
    
    @error('tags')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <label>Image</label>
    <input type="file" name="image" />

    @error('image')
        <p class="error">{{ $message }}</p>
    @enderror

    <label>Description</label>
    <textarea placeholder="Talk about the what, why, and how with your art." name="description">
        {{ old('description') }}
    </textarea>
    
    @error('description')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <button class="color-white-1 font-rale-bold" type="submit">Create Post</button>
</form>
</div>
</section>
</x-layout>