@extends('layouts.layout')
@section('content')
{{-- <div class="container"> --}}
    <div class="row">
        {{-- <div class="col-md-12 mt-5"> --}}
            {{-- <table class="table table-bordered"> --}}
                <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($all_products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('product.show',$product->id) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('product.destroy',$product->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $all_products->links() }}
        {{-- </div> --}}
    {{-- </div> --}}
@endsection

