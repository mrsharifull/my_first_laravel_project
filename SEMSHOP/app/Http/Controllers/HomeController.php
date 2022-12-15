<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class HomeController extends Controller
{
    function home(){
        $catModel = CatModel::all();
        $cats = $catModel;
        return view('home',['datas'=>$cats]);
    }
}