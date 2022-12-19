@extends('layout')

        @section('title')
            create brand
        @endsection
        
        @section('body')
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="email" value="{{ old('email') }}">
                @error('email')
                    {{ $message }}
                @enderror
                <input type="password" name="password">
                <input type="submit" value="Login">
            </form>
            <a href="/register">registrati</a>
@endsection
