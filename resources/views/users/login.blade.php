<x-layout>

    <section id="create-post">
        <a href="/reno-artistry/public">Back</a>
    <div>
    <h1>Login</h1>
    <p>Login to your account to post your local Reno artwork.</p>
    <form method="POST" action="/reno-artistry/public/users/authenticate">
        @csrf
    
        <label>Email</label>
        <input value="{{ old('email') }}" type="email" name="email" placeholder="Example: example@gmail.com" />
        
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        
        <label>Password</label>
        <input value="{{ old('password') }}" type="password" name="password" placeholder="Enter Password" />
        
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        
        <button type="submit">Sign In</button>
    </form>
    <p>Don't have an account? <a href="/reno-artistry/public/register">Register</a></p>
    </div>
    </section>
    </x-layout>