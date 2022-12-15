<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catModel = CatModel::all();
        $allData = $catModel;
        return view('admin.category',['data'=>$allData]);
        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catName = $request->catName;
        $catModel = new CatModel();
        $catModel->category_name = $catName;
        $catModel->save();
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catModel= CatModel::find($id);
        return view('admin.editCategory',compact('catModel'));
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
        $catModel = CatModel::find($id);
        $catName = $request->catName;
        $catModel->category_name = $catName;
        $catModel->save();
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catModel = CatModel::find($id);
        $catModel->delete();
        return redirect('category');
    }
}