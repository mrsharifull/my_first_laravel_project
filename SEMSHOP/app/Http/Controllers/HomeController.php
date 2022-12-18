<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;
use App\Models\SubCatModel;


class HomeController extends Controller
{
    function home(){
        // $catModel = CatModel::all();
        $subCat = SubCatModel::with(['catSubCat'])->get()->groupBy('category_id');
        return view('home', ['data2' => $subCat]);
    }
}