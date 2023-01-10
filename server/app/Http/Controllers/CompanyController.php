<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('welcome', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nome' => ['required'],
            'sede_legale' => ['required'],
            'fatturato' => ['required'],
        ]);
        $validation['owner_id'] = Auth::id();
        Company::create($validation);
        return redirect('/');
    }

    public function show($id)
    {
        $establishments = Company::find($id)->establishments;
        return view('establishments.index', ['establishments' => $establishments, 'companyId' => $id]);
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', ['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'nome' => ['required'],
            'sede_legale' => ['required'],
            'fatturato' => ['required'],
        ]);
        $company = Company::find($id);
        $company->fill($validation);
        $company->owner_id = Auth::id();
        $company->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect('/');
    }
}
