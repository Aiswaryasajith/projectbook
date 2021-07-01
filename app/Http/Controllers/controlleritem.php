<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelitem;

class controlleritem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item=modelitem::all();
        return view('item',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itemdetails');
    
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
        $getItem=request('item');
        $getAutor=request('autor');
        $getDecription=request('description');
        $getRate=request('rate');
        $getQuality=request('quality');
        $getImage=request('image');
        

        

        $item=new modelitem();
        $item->categoryname=$getCategory;
        $item->subcategory=$getSubcategory;
        $item->item=$getItem;
        $item->autor=$getAutor;
        $item->description=$getDecription;
        $item->rate=$getRate;
        $item->quality=$getQuality;
        $item->image=$getImage;
       
        $item->save();
        return view('itemdetails');
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
        $item=modelitem::find($id);
        return view('itemeditview',compact('item'));
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
        $item=modelitem::find($id);

        $getItem=request('categoryname');
        $getItem=request('subcategory');
        $getItem=request('item');
        $getItem=request('autor');
        $getItem=request('description');
        $getItem=request('rate');
        $getItem=request('quality');
        $getItem=request('image');


        $item->categoryname=$getItem;
        $item->subcategory=$getItem;
        $item->item=$getItem;
        $item->autor=$getItem;
        $item->description=$getItem;
        $item->rate=$getItem;
        $item->quality=$getItem;
        $item->image=$getItem;
       
        $item->save();

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
