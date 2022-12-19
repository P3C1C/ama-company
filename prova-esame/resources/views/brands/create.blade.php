@extends('layout')

@section('title')
    create brand
@endsection

@section('body')
    <form action="/brand/create/store" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') ?? ($brand->nome ?? '') }}">
        @error('nome')
            {{ $message }}
        @enderror
        <input type="text" id="stato" name="stato" value="{{ old('stato') }}">
        @error('stato')
            {{ $message }}
        @enderror
        <input type="text" id="logo" name="logo" value="{{ old('logo') }}">
        @error('logo')
            {{ $message }}
        @enderror
        <input type="submit" value="Aggiungi">
    </form>
@endsection
