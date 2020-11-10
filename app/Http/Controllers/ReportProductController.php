<?php

namespace App\Http\Controllers;

use App\ReportProduct;
use Illuminate\Http\Request;

class ReportProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportedproducts = ReportProduct::all();
        return view('reportproducts.index', ['reportedproducts' => $reportedproducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reportproduct = new ReportProduct;
        $reportproduct->name = $request->get('name');
        $reportproduct->phone_number = $request->get('phone_number');
        $reportproduct->product_name = $request->get('product_name');
        $reportproduct->product_dealer = $request->get('product_dealer');
        $reportproduct->reason = $request->get('reason');
        $reportproduct->save();
        //add product image

        return redirect()->back()->with('success', 'Your request has been submitted successfully');
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
