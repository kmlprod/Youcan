@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>YouCan</h2>
            </div>

            <div class="pull-left">
                <a class="btn btn-primary" href="/"> Home</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="/products"> Produits</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="/categories"> Categories</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Categorie</a>
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
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Image</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->categorie }}</td>

            <td>{{ $product->price }}</td>
            <td>{{ $product->file }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}


@endsection
