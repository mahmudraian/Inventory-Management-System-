@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <fieldset class="h-100">
                <legend>Basic Information</legend>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Id</th>
                        <td>{{$product->id}}</td>
                    <tr>
                        <th>Name</th>
                        <td>{{$product->name}}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $product->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td>{{$product->updated_at->toDayDateTimeString()}}</td>
                    </tr>

                </table>
            </fieldset>
        </div>
    </div>



@endsection


