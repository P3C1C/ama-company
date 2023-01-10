@extends('layout')

@section('title')
    Crea Azienda
@endsection

@section('body')
    <h1 class="ml-20 my-10 text-4xl font-bold text-red-700">Add Company</h1>
    <form method="POST" action="/companies/store" class="flex flex-col gap-2 w-52 ml-20">
        @csrf
        <input type="text" name="nome" placeholder="Nome" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('nome')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="text" name="sede_legale" placeholder="Sede Legale" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('sede_legale')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="text" name="fatturato" placeholder="Fatturato" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('fatturato')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="submit" class="hover:bg-red-600 p-3 bg-red-500 rounded text-white">
    </form>
@endsection
