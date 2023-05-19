@extends('layouts')
   
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="bg-dark py-3">
            <div class ="container">
         <div class ="h4 text-white">Product Management</h4></div>
                </div>
            </div>
 <br>

            <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Show Product</div>
            <div>

          <div class="pull-left">
          <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>
 <br>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
            <br>
        </div>
        <div class="form-group">
                <strong>Price:</strong>
                {{ $product->price}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12"><br>
            <div class="form-group">
                <strong>Description:</strong>
                {{ $product->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12"><br>
            <div class="form-group">
                <strong>Image:</strong><br>
                <img src="/images/{{ $product->image }}" width="500px">
            </div>
        </div>
        <br>
    </div>
@endsection