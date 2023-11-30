@extends('layouts.layout')
@section('content')

<div class="row">
        <div class="col-md-12">
            {!! Form::open(['route'=>'user.store', 'method'=>'post','files'=>true]) !!}
            @include('user.form')
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="d-grid">
                        {!! Form::button('Create Category', ['class' => 'btn btn-outline-theme mt-4', 'type'=>'submit']) !!}
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('#name').on('input', function () {
            $('#slug').val(formatSlug($(this).val()))
        })
    </script>
@endpush


