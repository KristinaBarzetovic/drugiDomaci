<?php

namespace App\Http\Controllers;

use App\Models\ClotheCategory;

class ClotheCategoryController extends Controller
{

    public function index()
    {
        return response()->json(ClotheCategory::all());
    }
}
