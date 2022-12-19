<?php

namespace App\Http\Controllers;

use App\Models\Modell;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModelController extends Controller
{
    public function index($id)
    {
        $modelsCount = Brand::find($id)->models()->count();
        $models = Brand::find($id)->models;
        return view('models.index', [
            'models' => $models,
            'modelsCount' => $modelsCount,
            'brandId' => $id
        ]);
    }
    public function create($id)
    {
        $actionUrl = '/brand/' . $id . '/model/store';
        return view('models.create', [
            'brandId' => $id,
            'actionUrl' => $actionUrl
        ]);
    }
    public function store(Request $request, $brandId)
    {
        $validated = $request->validate([
            "modello" => ["required"],
            "anno" => ["required"],
            "cilindrata" => ["required"],
            "alimentazione" => ["required"],
            "segmento" => ["required"],
            "foto" => ["required"],
        ]);

        $validated['owner_id'] = Auth::id();
        $model = new Modell();
        $model->fill($validated);
        $model->brand_id = $brandId;
        $model->save();
        return redirect('/brand/' . $brandId . '/models');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $model = Modell::find($id);
        $actionUrl = '/model/update/' . $id;
        return view('models.create', [
            'model' => $model,
            'brandId' => $id,
            'actionUrl' => $actionUrl
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "modello" => ["required"],
            "anno" => ["required"],
            "cilindrata" => ["required"],
            "alimentazione" => ["required"],
            "segmento" => ["required"],
            "foto" => ["required"],
        ]);
        $model = Modell::find($id);
        $model->fill($validated);
        $model->save();
        return redirect('/brand/' . $model->brand_id . '/models');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brandId = Modell::find($id)->brand_id;
        Modell::destroy($id);
        return redirect('/brand/' . $brandId . '/models');
    }
}
