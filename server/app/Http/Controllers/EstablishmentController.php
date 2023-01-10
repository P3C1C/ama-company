<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create($id)
    {
        return view('establishments.create', ['companyId' => $id]);
    }

    public function store(Request $request, $id)
    {
        $validation = $request->validate([
            'sede' => ['required'],
            'dipendenti' => ['required'],
            'kwh' => ['required'],
            'mc_gas' => ['required'],
            'km_aziendali' => ['required'],
            'km_dipendenti' => ['required'],
        ]);
        $establishment = new Establishment();
        $establishment->fill($validation);
        $establishment->company_id = $id;
        $establishment->owner_id = Auth::id();
        $establishment->save();
        return redirect('companies/' . $id . '/establishments');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $establishment = Establishment::find($id);
        return view('establishments.edit', ['establishment' => $establishment]);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'sede' => ['required'],
            'dipendenti' => ['required'],
            'kwh' => ['required'],
            'mc_gas' => ['required'],
            'km_aziendali' => ['required'],
            'km_dipendenti' => ['required'],
        ]);
        $establishment = Establishment::find($id);
        $establishment->fill($validation);
        $establishment->owner_id = Auth::id();
        $establishment->save();
        return redirect('companies/' . $establishment->company_id . '/establishments');
    }

    public function destroy($id)
    {
        $companyId = Establishment::find($id)->company_id;
        Establishment::destroy($id);
        return redirect('companies/' . $companyId . '/establishments');
    }
}
