<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    
     public function __construct() {
       // $this->middleware('auth')->except('index');
    }

    public function index() {

    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'photo' => 'required',
            'visible' => 'required'
        ]);

        auth()->user()->publish(
                new Product(request(['name','description', 'price', 'qty', 'Photo', 'visible']))
        );
        return redirect('/admin/dashboard');
    }

    public function show($id) {
        $customer = Customer::find($id);
        return view ('customer.view',compact('customer'));
    }

    public function edit($id) {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required|integer',
            'photo' => 'required',
            'visible' => 'required'
        ]);

        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->qty = $request->get('qty');
        $product->photo = $request->get('photo');
        $product->visible = $request->get('visible');
        $product->save();

        return redirect('/admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/dashboard');
    }

}


