<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Supplier;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $productcategories = ProductCategory::all();
        return view('products.create', ['productcategories' => $productcategories, 'suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('product_image') && $request->file('product_image') != null){
            $file = $request->file('product_image');
            $product_image = $file->getClientOriginalName();
            $file->move('./uploads/products', $product_image);
        }else{
            $product_image = null;
        }

        $product = new Product;
        $product->supplier_id = $request->get('supplier_id');
        $product->product_category_id = $request->get('product_category_id');
        $product->name = $request->get('name');
        $product->serial = $request->get('serial');
        $product->description = $request->get('description');
        $product->usage = $request->get('usage');
        $product->product_image = $product_image;
        $product->save();
        //add status and image upload

        return redirect()->back()->with('success', 'Product has been added successfully');
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
        $suppliers = Supplier::all();
        $productcategories = ProductCategory::all();
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product, 'productcategories' => $productcategories, 'suppliers' => $suppliers]);
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

        $product = Product::findOrFail($id);

        if($request->hasfile('product_image') && $request->file('product_image') != null){
            $file = $request->file('product_image');
            $product_image = $file->getClientOriginalName();
            $file->move('./uploads/products', $product_image);
        }else{
            $product_image = $product->product_image;
        }
        $product->supplier_id = $request->get('supplier_id');
        $product->product_category_id = $request->get('product_category_id');
        $product->name = $request->get('name');
        $product->serial = $request->get('serial');
        $product->description = $request->get('description');
        $product->usage = $request->get('usage');
        $product->product_image = $product_image;
        $product->save();

        return redirect()->back()->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product has been deleted');
    }
}
