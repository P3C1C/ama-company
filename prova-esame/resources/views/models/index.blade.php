@extends('layout')

@section('title')
    modelli
@endsection

@section('body')
    <a href="/brand/{{ $brandId }}/model/create">Aggiungi modello</a>
    <h1>numero: {{ $modelsCount }}</h1>
    <table>
        <tr>
            <td>modello</td>
            <td>anno</td>
            <td>cilindrata</td>
            <td>alimentazione</td>
            <td>segmento</td>
            <td>foto</td>
        </tr>
        @foreach ($models as $model)
            <tr>
                <td>{{ $model->modello }}</td>
                <td>{{ $model->anno }}</td>
                <td>{{ $model->cilindrata }}</td>
                <td>{{ $model->alimentazione }}</td>
                <td>{{ $model->segmento }}</td>
                <td> <img src="{{ $model->foto }}" style="height: 50px; widht: 50px;" alt="logo"></td>
                @if ($brand->userCanEdit())
                <td><a href="/model/edit/{{ $model->id }}">Edit</a></td>
                <td><a href="/model/delete/{{ $model->id }}">Delete</a></td>
                @endif
            </tr>
        @endforeach
    </table>
@endsection
