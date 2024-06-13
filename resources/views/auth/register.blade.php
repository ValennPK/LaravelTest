<x-layouts.app 
    title="Register" 
    meta-description="Register meta description">

    <h1>Register</h1>  
    <form action="{{route('register')}}" method="POST"> @csrf
        <div>
            <label>
                Name <br>
                <input name="name" autofocus="autofocus" type="text" value="{{old('name')}}">
            </label>
        </div>
        
        @error('name')
            <small style="color:red;">{{$message}}</small>
        @enderror

        <div>
            <label> Email <br>
                <input name="email" type="email" value="{{old('email')}}">
            </label>
        </div>
        
        @error('email')
            <small style="color:red;">{{$message}}</small>
        @enderror

        <div>
            <label> Password <br>
                <input name="password" type="password">
            </label>
        </div>
        
        @error('password')
            <small style="color:red;">{{$message}}</small>
        @enderror
    
        <div>
            <label> Password Confirmation <br>
                <input name="password_confirmation" type="password">
            </label>
        </div>
        
        @error('password_confirmation')
            <small style="color:red;">{{$message}}</small>
        @enderror
        <div><button type="submit">Register</button></div>
    </form> 

    <a href="{{ route('login')}}">Login</a>

</x-layout>

