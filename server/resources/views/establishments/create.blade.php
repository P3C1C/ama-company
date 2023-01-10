@extends('layout')

@section('title')
    Crea Azienda
@endsection

@section('body')
    <h1 class="ml-20 my-10 text-4xl font-bold text-red-700">Add Company</h1>
    <form method="POST" action="/companies/{{ $companyId }}/establishment/store" class="flex flex-col gap-2 w-52 ml-20">
        @csrf
        <input type="text" name="sede" placeholder="Sede" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('sede')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="dipendenti" placeholder="Dipendenti" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('dipendenti')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="kwh" placeholder="kWh" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('kwh')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="mc_gas" placeholder="Mc gas" class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('mc_gas')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="km_aziendali" placeholder="Km Aziendali"
            class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('km_aziendali')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="number" name="km_dipendenti" placeholder="Km Dipendenti"
            class="border-2 p-1 border-red-700 rounded-md h-12">
        @error('km_dipendenti')
            <span class="text-red-800 font-bold">{{ $message }}</span>
        @enderror
        <input type="submit" class="hover:bg-red-600 p-3 bg-red-500 rounded text-white">
    </form>
@endsection
