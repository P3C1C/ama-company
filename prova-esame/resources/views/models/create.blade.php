@extends('layout')

@section('title')
    create brand
@endsection

@section('body')
    <form action="{{ $actionUrl }}" method="POST">
        @csrf
        <input type="hidden" name="brand_id" value="{{ $brandId }}">
        <label for="modello">Modello</label>
        <input id="modello" type="text" name="modello" value="{{ old('modello') ?? ($model->modello ?? '') }}">
        @error('modello')
            {{ $message }}
        @enderror
        <input type="text" name="anno" value="{{ old('anno') ?? ($model->anno ?? '') }}">
        @error('anno')
            {{ $message }}
        @enderror
        <input type="text" name="cilindrata" value="{{ old('cilindrata') ?? ($model->cilindrata ?? '') }}">
        @error('cilindrata')
            {{ $message }}
        @enderror
        <input type="text" name="alimentazione" value="{{ old('alimentazione') ?? ($model->alimentazione ?? '') }}">
        @error('alimentazione')
            {{ $message }}
        @enderror
        <input type="text" name="segmento" value="{{ old('segmento' ?? ($model->segmento ?? '')) }}">
        @error('segmento')
            {{ $message }}
        @enderror
        <input type="text" name="foto" value="{{ old('foto') ?? ($model->foto ?? '') }}">
        @error('foto')
            {{ $message }}
        @enderror
        <input type="submit" value="Aggiungi">
    </form>
@endsection
