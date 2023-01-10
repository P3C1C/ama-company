@extends('layout')

@section('title')
    Modifica Azienda
@endsection

@section('body')
    <h1 class="ml-20 my-10 text-4xl font-bold text-red-700">Edit Company</h1>
    <form method="POST" action="/companies/update/{{ $company->id }}" class="flex flex-col gap-2 w-52 ml-20">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') ?? $company->nome }}"
            class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('nome')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="text" name="sede_legale" placeholder="Sede Legale"
            value="{{ old('sede_legale') ?? $company->sede_legale }}" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('sede_legale')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="text" name="fatturato" placeholder="Fatturato" value="{{ old('fatturato') ?? $company->fatturato }}"
            class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('fatturato')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="submit" class="hover:bg-red-600 p-3 bg-red-500 rounded text-white">
    </form>
@endsection
