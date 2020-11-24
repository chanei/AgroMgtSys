<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $suppliers = Supplier::count();
        $products = Product::count();
        $productcategories = ProductCategory::count();
        $users = User::count();
        return view('home', ['products' => $products, 'productcategories' => $productcategories, 'users' => $users, 'suppliers' => $suppliers]);
    }
}
