<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('trading_license') && $request->file('trading_license') != null){
            $file = $request->file('trading_license');
            $trading_license = $file->getClientOriginalName();
            $file->move('./uploads/tradingLicenses', $trading_license);
        }else{
            $trading_license = null;
        }

        $supplier = new Supplier();
        $supplier->name = $request->get('name');
        $supplier->contact = $request->get('contact');
        $supplier->address = $request->get('address');
        $supplier->registration_no = $request->get('registration_no');
        $supplier->trading_license = $trading_license;
        $supplier->save();

        return redirect()->back()->with('success', 'Supplier has been created');
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
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', ['supplier' => $supplier]);
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
        $supplier = Supplier::findOrFail($id);

        if($request->hasfile('trading_license') && $request->file('trading_license') != null){
            $file = $request->file('trading_license');
            $trading_license = $file->getClientOriginalName();
            $file->move('./uploads/tradingLicenses', $trading_license);
        }else{
            $trading_license = $supplier->trading_license;
        }

        $supplier->name = $request->get('name');
        $supplier->contact = $request->get('contact');
        $supplier->address = $request->get('address');
        $supplier->registration_no = $request->get('registration_no');
        $supplier->trading_license = $trading_license;
        $supplier->save();

        return redirect()->back()->with('success', 'Supplier details have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->back()->with('success', 'Supplier has been deleted');
    }
}
