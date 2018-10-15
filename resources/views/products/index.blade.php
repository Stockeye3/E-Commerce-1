@extends('layouts.master')




@section('title')
<title> All Products </title>
@endsection

@section('content')

<div class="container">
    <h3 class="h3"> Shop </h3>
    @if (count($products))
    @foreach ($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" height="200" width="200" src={{$product->photo}}  " >
                        
                    </a>


                </div>
                
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                    <div class="price"> {{ $product->price  . ' $'}} 
                    </div>
                    <a class="add-to-cart" href="">Add To Cart</a>
                </div>
            </div>
        </div>
         @endforeach
         @else 
         
            NO PRODUCTS FOUND ...   
@endif
</div>

<hr>
<hr>
<hr>
 


  

@endsection


