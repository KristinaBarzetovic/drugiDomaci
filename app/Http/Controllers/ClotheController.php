<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClotheResource;
use App\Models\Clothe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClotheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ClotheResource::collection(Clothe::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:5|max:255',
            'color' => 'required|string|min:5|max:255',
            'url' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5',
            'brand_id' => 'required|integer|min:1',
            'clothe_category_id' => 'required|integer|min:1'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $clothe = Clothe::create($request->all());
        return response()->json(new ClotheResource($clothe));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function show(Clothe $clothe)
    {
        return response()->json(new ClotheResource($clothe));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clothe $clothe)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'string|min:5|max:255',
            'color' => 'string|min:5|max:255',
            'url' => 'string|min:5|max:255',
            'description' => 'string|min:5',
            'brand_id' => 'integer|min:1',
            'clothe_category_id' => 'integer|min:1'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $clothe->update($request->all());
        return response()->json(new ClotheResource($clothe));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clothe $clothe)
    {
        $clothe->delete();
        return response()->noContent();
    }
}
