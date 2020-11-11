<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewsController extends Controller
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
        $productreviews = ProductReview::all();
        return view('productreviews.index', ['productreviews' => $productreviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('productreviews.create', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productreview = new ProductReview;
        $productreview->user_id = Auth::user()->id;
        $productreview->product_id  = $request->get('product_id');
        $productreview->product_status = $request->get('product_status');
        $productreview->rating  = $request->get('rating');
        $productreview->review = $request->get('review');
        $productreview->save();

        return redirect()->back()->with('success', 'Review has been saved');
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
        $products = Product::all();
        $productreview = ProductReview::findOrFail($id);
        return view('productreviews.edit', ['review' => $productreview, 'products' => $products]);
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
        $productreview = ProductReview::findOrFail($id);
        $productreview->product_id  = $request->get('product_id');
        $productreview->product_status = $request->get('product_status');
        $productreview->rating  = $request->get('rating');
        $productreview->review = $request->get('review');
        $productreview->save();

        return redirect()->back()->with('success', 'Review has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productreview = ProductReview::findOrFail($id);
        $productreview->delete();

        return redirect()->back()->with('success', 'Review has been deleted');
    }
}
