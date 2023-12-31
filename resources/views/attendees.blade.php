
@extends('layout.app')

@section('content')
    <h1>Register now Attendees</h1>
    <form action="{{route('register')}}" method="post">
        @csrf  
        <div>
            <label for="name">Name
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <label for="address">Address
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="username">Username

                @error('username')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password
                @error('password')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
@endsection

@section('title')
    Contact Us Page
@endsection