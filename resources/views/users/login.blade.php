<x-layout>

    <section id="create-post">
        <a class="back color-white-1 color-primary-bg" href="/reno-artistry/public">Back</a>
    <div class="container">
    <h1 class="font-mont-bold color-primary">Login</h1>
    <p class="font-roboto-regular color-secondary">Login to your account to post your local Reno artwork.</p>
    <form method="POST" action="/reno-artistry/public/users/authenticate">
        @csrf
    
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
        
        <button class="color-white-1 font-rale-bold" type="submit">Sign In</button>
    </form>
    <p class="font-size-sm color-secondary font-roboto-regular">Don't have an account? <a class="color-primary" href="/reno-artistry/public/register">Register</a></p>
    </div>
    </section>
    </x-layout>