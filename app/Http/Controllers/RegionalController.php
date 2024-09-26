<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionalRequest;
use App\Models\Centro;
use App\Models\Regional;
use App\Models\Regionale;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use function PHPSTORM_META\map;

class RegionalController extends Controller
{

<<<<<<< HEAD
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('can:roles.index')->only('index');
    //     $this->middleware('can:roles.create')->only('create', 'store');
    //     $this->middleware('can:roles.edit')->only('edit', 'update');
    //     $this->middleware('can:roles.destroy')->only('destroy');
    // }
    /**
     * Display a listing of the resource.
     */
=======
>>>>>>> 668a2d1abe4ce372b6e1c1d0284b18767830774c
    public function index()
    {
        $regionales = Regionale::all();
        return view('regionales.index', compact('regionales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regionales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionalRequest $request)
    {
        Regionale::create($request->all());
        return redirect()->route('regionales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regionale $regionale)
    {
        // dd($request->id);
        return view('regionales.edit',compact('regionale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegionalRequest $request, Regionale $regionale)
    {
        $regionale->update($request->all());
        return redirect()->route('regionales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regionale $regionale)
    {
        $regionale->delete();
        return redirect()->route('regionales.index');
    }

    // $resultado = $ciclas->map(function ($cicla) {     return [         'id' => $cicla->id,         'nombre' => $cicla->nombre, // Otras columnas que necesites ]; });

    public function getCentrosMaps(string $id){
        $regional = Regionale::where('id', $id)->first();
        $name = $regional->nombre_regional;
        $region = ['lat' => "$regional->latitud", 'long' => "$regional->longitud"];
        $centros = Centro::where('regional_id', $id)->get();
        $puntos = [];
        foreach ($centros as $centro => $x) {
            $puntos[] = ['lat' => $x->altura, 'long' => $x->longitud];
        }
        return view('regionales.regionalMap', compact('puntos', 'region', 'name'));
    }
}

