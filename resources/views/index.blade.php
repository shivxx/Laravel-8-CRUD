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
            <div class="h4">Products</div>
            <div>

          <div class="pull-left">
                <a class="btn btn-success" href="{{ route('create') }}"> Create </a>
            </div>
        </div>
    </div>
 <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <div class=" card border-0 shadow-lg"></div>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->description }}</td>
         
            <td>
                <form action="{{ route('destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
        
@endsection