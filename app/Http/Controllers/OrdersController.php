<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
     public function __construct() {
        // $this->middleware('auth')->except('index');
    }

    public function index() {
//        $products = Product::orderBy('qty','desc')->get();
       // $products = Product::where('visible', true )->get();
       // return view('products.index', compact('products'));
    }

    public function create() {
        //return view('products.create');
    }

    public function store(Request $request) {

    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }


    public function destroy($id) {

    }

    
}
