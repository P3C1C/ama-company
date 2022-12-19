@extends('layout')

        @section('title')
            create brand
        @endsection
        
        @section('body')
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
                <input type="text" name="email" value="{{ old('email') }}">
                @error('email')
                    {{ $message }}
                @enderror
                <input type="password" name="password">
                <input type="password" name="password_confirmation">
                <input type="submit" value="Rester-in">
            </form>
            <a href="/login">login</a>
@endsection
