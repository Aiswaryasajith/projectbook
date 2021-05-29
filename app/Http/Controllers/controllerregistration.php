<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelregistration;

class controllerregistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=modelregistration::all();
        return view('customer',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getFname=request('fname');
        $getLname=request('lname');
        $getHousename=request('housename');
        $getStreet=request('street');
        $getCity=request('city');
        $getState=request('state');
        $getPhno=request('phno');
        $getLemail=request('lemail');
        $getLpassword=request('lpassword');
        $getLcpassword=request('lcpassword');
        

        

        $customer=new modelregistration();
        $customer->fname=$getFname;
        $customer->lname=$getLname;
        $customer->housename=$getHousename;
        $customer->street=$getStreet;
        $customer->city=$getCity;
        $customer->state=$getState;
        $customer->phno=$getPhno;
        $customer->lemail=$getLemail;
        $customer->lpassword=$getLpassword;
        $customer->lcpassword=$getLcpassword;
       
        $customer->save();
        return view('login');

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
        //
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
        //
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
