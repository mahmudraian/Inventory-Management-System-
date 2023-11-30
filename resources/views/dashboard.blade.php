@extends('layouts.layout')
@section('content')
    

<div class="container">
    <div class="col-12">
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">{{$all_users}}</h3>
                        <span class="badge bg-primary font-size-12">Total Users</span>
                    </div>
                    <h5 class="text-muted font-size-14 mb-0">New Visitors</h5>
                </div>
                <div class="card-footer">
                    <div id="visitors_charts" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">{{$all_products}}</h3>
                        <span class="badge bg-primary font-size-12">Total Products</span>
                    </div>
                    <h5 class="text-muted font-size-14 mb-0">New</h5>
                </div>
                <div class="card-footer">
                    <div id="visitors_charts" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-6 mt-5">
        <h3>Top 5 Stock Products</h3>
        <table class="table table-bordered">
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
                @foreach($top_stock_products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info">Edit</a>
                
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="col-md-6 mt-5">
        <h3>Latest User</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($latest_users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td><img src="{{ asset(Storage::url($user->image)) }}" alt="" width="50px"></td>
                    <td>
                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-info">Edit</a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>








@endsection

<style>
    .card{
        margin: 20px;
    }
</style>





  