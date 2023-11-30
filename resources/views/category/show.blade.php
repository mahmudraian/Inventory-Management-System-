@extends('frontend.layouts.master')
@section('content')
      @include('global_partials.validation_error_display')
    <div class="row">
        <div class="col-md-12">
            <fieldset class="h-100">
                <legend>Basic Information</legend>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Id</th>
                        <td>{{$category->id}}</td>
                    <tr>
                        <th>Name</th>
                        <td>{{$category->name}}</td>
                    <tr>
                        <th>Slug</th>
                        <td>{{$category->slug}}</td>
                    <tr>
                        <th>Status</th>
                        <td>{{App\Models\Category::STATUS[$category->status]}}</td>
                    </tr>
                    <tr>
                        <th>Parent Category</th>
                        <td>{{$category->category?->name?? 'N/A'}} </td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $category->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td>{{$category->updated_at->toDayDateTimeString()}}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td><img class="img-thumbnail" alt="photo"
                                 src="{{asset(\App\Models\Category::PHOTO_UPLOAD_PATH.$category->image)}}" width="75px"></td>
                    </tr>

                </table>
            </fieldset>
        </div>
            {{-- @include('global_partials.activity_log', ['activity_logs'=> ) --}}
    </div>



@endsection


