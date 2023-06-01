<x-layout>

    <section id="create-post">
        <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
    <div class="container">
    <h1 class="font-mont-bold color-primary">Register</h1>
    <p class="font-roboto-regular color-secondary">Create an account to post your local Reno artwork.</p>
    <form method="POST" action="/reno-artistry/public/users">
        @csrf
        <label>Name</label>
        <input value="{{ old('name') }}" type="text" name="name" placeholder="John Doe" />
    
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror
    
        <label>Email</label>
        <input value="{{ old('email') }}" type="email" name="email" placeholder="example@gmail.com" />
        
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <label>Password</label>
        <input value="{{ old('password') }}" type="password" name="password" placeholder="Enter Password" />
        
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <label>Confirm Password</label>
        <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" placeholder="Confirm Password" />
        
        @error('password_confirmation')
            <p class="error">{{ $message }}</p>
        @enderror
        
        <button class="color-white-1 font-rale-bold" type="submit">Sign Up</button>
    </form>
    <p class="font-size-sm color-secondary font-roboto-regular">Already have an account? <a class="color-primary" href="/reno-artistry/public/login">Login</a></p>
    </div>
    </section>
    </x-layout>