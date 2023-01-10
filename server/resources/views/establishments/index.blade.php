@extends('layout')

@section('title')
    Home
@endsection

@section('body')
    <h1 class="basic-full text-center text-4xl font-bold text-red-700">Lista Aziende</h1>
    <table class="basic-full">
        <tr class="border-b-2 border-rose-500">
            <td class="p-2 py-3">Sede</td>
            <td class="p-2 py-3">N. Dipendenti</td>
            <td class="p-2 py-3">kWh</td>
            <td class="p-2 py-3">MC gas</td>
            <td class="p-2 py-3">Km aziendali</td>
            <td class="p-2 py-3">Km Dipendenti</td>
            <td class="p-2 py-3">Impronta carbonica</td>
            <td colspan="2" class="p-2 py-3">Opzioni</td>
        </tr>
        @foreach ($establishments as $establishment)
            <tr class="border-b-2 border-rose-500">
                <td class="p-2 py-3">{{ $establishment->sede }}</td>
                <td class="p-2 py-3">{{ $establishment->dipendenti }}</td>
                <td class="p-2 py-3">{{ $establishment->kwh }}</td>
                <td class="p-2 py-3">{{ $establishment->mc_gas }}</td>
                <td class="p-2 py-3">{{ $establishment->km_aziendali }}</td>
                <td class="p-2 py-3">{{ $establishment->km_dipendenti }}</td>
                <td class="p-2 py-3">{{ $establishment->impatto() }}</td>
                @if (Auth::id() == $establishment->owner_id)
                    <td class="p-2 py-3"><a href="/establishment/edit/{{ $establishment->id }}"
                            class="hover:bg-red-600 p-3 bg-red-500 rounded ml-3 text-white">Edit</a></td>
                    <td class="p-2 py-3"><a href="/establishment/destroy/{{ $establishment->id }}"
                            class="hover:bg-red-600 p-3 bg-red-500 rounded ml-3 text-white">Delete</a></td>
                @endif
            </tr>
        @endforeach
    </table>
    <a href="/companies/{{ $companyId }}/establishment/create"
        class="m-7 p-3 w-40 hover:bg-red-600 bg-red-500 rounded ml-3 text-white">Aggiungi
        Stabilimento</a>
@endsection
