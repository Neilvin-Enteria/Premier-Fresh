@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Stock</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->product_id}}</td>
            <td><img src="storage/images/{{ $product->product_image }}" width="100px"></td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->product_type }}</td>
            <td>{{ $product->product_stock }}</td>
            <td>{{ $product->product_description }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->product_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->product_id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->product_id) }}">Edit</a>
     

                    
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    

        
@endsection