@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Youcan</h2>
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
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
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
            <th>Cat Name</th>
            <th>Products</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $categorie)
        <tr>
            <td>{{ $categorie->id }}</td>
            <td>{{ $categorie->name }}</td>
            <td>{{ $categorie->product }}</td>
            <td>
                <form action="{{ route('categories.destroy',$categorie->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show',$categorie->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$categorie->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $categories->links() }}


@endsection
