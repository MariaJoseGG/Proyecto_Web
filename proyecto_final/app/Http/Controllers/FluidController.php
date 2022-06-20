<?php

namespace App\Http\Controllers;

use App\Models\Fluid;
use App\Http\Requests\StoreFluidRequest;
use App\Http\Requests\UpdateFluidRequest;
use Illuminate\Http\Request;

class FluidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fluids=Fluid::all();
       // return view('fluids.index',compact('hours'));
        return view('fluids.index', compact('fluids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFluidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exit = false;
        foreach (Fluid::all() as $fluid) {
            if($fluid->input==null && $exit==false){
                $fluid->update([
                    'input'=>(float)$request->input
                ]);
                $exit = true;
            }
        }
        return FluidController::index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fluid  $fluid
     * @return \Illuminate\Http\Response
     */
    public function show(Fluid $fluid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fluid  $fluid
     * @return \Illuminate\Http\Response
     */
    public function edit(Fluid $fluid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFluidRequest  $request
     * @param  \App\Models\Fluid  $fluid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFluidRequest $request, Fluid $fluid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fluid  $fluid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fluid $fluid)
    {
        //
    }
}
