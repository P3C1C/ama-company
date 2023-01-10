@extends('layout')

@section('title')
    Home
@endsection

@section('body')
    <h1 class="basic-full text-center text-4xl font-bold text-red-700">Lista Aziende</h1>
    <table class="basic-full">
        <tr class="border-b-2 border-rose-500">
            <td class="p-2 py-3">Nome</td>
            <td class="p-2 py-3">Sede legale</td>
            <td class="p-2 py-3">Fatturato</td>
            <td class="p-2 py-3">Impronta carbonica</td>
            <td colspan="3" class="p-2 py-3">Opzioni</td>
        </tr>
        @foreach ($companies as $company)
            <tr class="border-b-2 border-rose-500">
                <td class="p-2 py-3">{{ $company->nome }}</td>
                <td class="p-2 py-3">{{ $company->sede_legale }}</td>
                <td class="p-2 py-3">{{ $company->fatturato }}</td>
                <td class="p-2 py-3">{{ $company->impattoTotale($company->id) }} t</td>
                @if (Auth::id() == $company->owner_id)
                    <td class="p-2 py-3"><a href="/companies/edit/{{ $company->id }}"
                            class="hover:bg-red-600 p-3 bg-red-500 rounded ml-3 text-white">Edit</a></td>
                    <td class="p-2 py-3"><a href="/companies/destroy/{{ $company->id }}"
                            class="hover:bg-red-600 p-3 bg-red-500 rounded ml-3 text-white">Delete</a></td>
                @endif
                <td class="p-2 py-3"><a href="/companies/{{ $company->id }}/establishments"
                        class="hover:bg-red-600 p-3 bg-red-500 rounded ml-3 text-white">Stabilimenti</a></td>
            </tr>
        @endforeach
    </table>
    <a href="/companies/create" class="m-7 p-3 w-40 hover:bg-red-600 bg-red-500 rounded ml-3 text-white">Aggiungi
        Azienda</a>
@endsection
