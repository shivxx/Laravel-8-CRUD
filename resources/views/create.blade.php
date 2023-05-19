@extends('layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
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
            <div class="h4">Add New Product</div>
            <div>
        
            <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>
 <br>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12"> <br>
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12"> <br>
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12"> <br>
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">  <br>
        
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection