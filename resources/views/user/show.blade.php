@extends('layouts.layout')
@section('content')
      @include('global_partials.validation_error_display')
    <div class="row">
        <div class="col-md-12">
            <fieldset class="h-100">
                <legend>Basic Information</legend>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Id</th>
                        <td>{{$user->id}}</td>
                    <tr>
                        <th>Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $user->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td>{{$user->updated_at->toDayDateTimeString()}}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td><img src="{{ asset(Storage::url($user->image)) }}" alt="" width="50px"></td>
                            
                    </tr>

                </table>
            </fieldset>
        </div>
    </div>



@endsection


