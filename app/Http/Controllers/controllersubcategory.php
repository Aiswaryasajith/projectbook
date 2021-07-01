<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelsubcategory;

class controllersubcategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory=modelsubcategory::all();
        return view('subcategory',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategorydetails');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getCategory=request('categoryname');
        $getSubcategory=request('subcategory');
        
         
               

        $subcategory=new modelsubcategory();
        $subcategory->categoryname=$getCategory;
        $subcategory->subcategory=$getSubcategory;
       
        $subcategory->save();
        return view('subcategorydetails');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory=modelsubcategory::find($id);
        return view('subcategoryeditview',compact('subcategory'));
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
        $subcategory=modelsubcategory::find($id);

        $getSubCategory=request('categoryname');
        $getSubCategory=request('subcategory');


        $subcategory->categoryname=$getSubCategory;
        $subcategory->subcategory=$getSubCategory;
       
        $subcategory->save();

        return view('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
