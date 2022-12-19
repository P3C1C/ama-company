@extends('layout')

@section('title')
    edit brand
@endsection

@section('body')
    <form action="/brand/edit/update/{{ isset($brand)? $brand->id : '' }}" method="post">
        @csrf
        <input type="text" name="nome" value="{{ old('nome') ?? ($brand->nome ?? '') }}">
        @error('nome')
            {{ $message }}
        @enderror
        <input type="text" name="stato" value="{{ old('stato') ?? $brand->stato }}">
        @error('stato')
            {{ $message }}
        @enderror
        <input type="text" name="logo" value="{{ old('logo') ?? $brand->logo }}">
        @error('logo')
            {{ $message }}
        @enderror
        <input type="submit" value="Modifica">
    </form>
@endsection
