@extends('layout')

@section('title')
    Crea Azienda
@endsection

@section('body')
    <h1 class="ml-20 my-10 text-4xl font-bold text-red-700">Add Company</h1>
    <form method="POST" action="/establishment/update/{{ $establishment->id }}" class="flex flex-col gap-2 w-52 ml-20">
        @csrf
        <input type="text" name="sede" placeholder="Sede" value="{{ old('sede') ?? $establishment->sede }}" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('sede')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="dipendenti" placeholder="Dipendenti" value="{{ old('dipendenti') ?? $establishment->dipendenti }}" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('dipendenti')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="kwh" placeholder="kWh" value="{{ old('kwh') ?? $establishment->kwh }}" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('kwh')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="mc_gas" placeholder="Mc gas" value="{{ old('mc_gas') ?? $establishment->mc_gas }}" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('mc_gas')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="km_aziendali" placeholder="Km Aziendali" value="{{ old('km_aziendali') ?? $establishment->km_aziendali }}"
            class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('km_aziendali')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="km_dipendenti" placeholder="Km Dipendenti" value="{{ old('km_dipendenti') ?? $establishment->km_dipendenti }}"
            class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('km_dipendenti')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="submit" class="hover:bg-red-600 p-3 bg-red-500 rounded text-white">
    </form>
@endsection
