<x-layout>

    <section id="create-post">
        <a href="/reno-artistry/public">Back</a>
    <div>
    <h1>Register</h1>
    <p>Create an account to post your local Reno artwork.</p>
    <form method="POST" action="/reno-artistry/public/users">
        @csrf
        <label>Name</label>
        <input value="{{ old('name') }}" type="text" name="name" placeholder="Example: John Doe" />
    
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    
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
        
        <label>Confirm Password</label>
        <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" placeholder="Confirm Password" />
        
        @error('password_confirmation')
            <p>{{ $message }}</p>
        @enderror
        
        <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="/reno-artistry/public/login">Login</a></p>
    </div>
    </section>
    </x-layout>