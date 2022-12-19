@extends('layout')

@section('title')
    home
@endsection

@section('body')
    @auth
        Utente: {{Auth::user()->name}}
        <a href="/logout">lolaut</a>
    @endauth
    <a href="/brand/create">Aggiungi Brand</a>
    <table>
        <tr>
            <td>nome</td>
            <td>stato</td>
            <td>logo</td>
        </tr>
        @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->nome }}</td>
                <td>{{ $brand->stato }}</td>
                <td> <img src="{{ $brand->logo }}" style="height: 50px; widht: 50px;" alt="logo"></td>
                @if (Auth::id() == $brand->owner_id)
                <td><a href="/brand/edit/{{ $brand->id }}">Edit</a></td>
                <td><a href="/brand/delete/{{ $brand->id }}">Delete</a></td>
                @endif
                <td><a href="/brand/{{ $brand->id }}/models">Dettaglio</a></td>
            </tr>
        @endforeach
    </table>
@endsection
