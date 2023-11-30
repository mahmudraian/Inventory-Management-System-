<fieldset>
    <legend>Basic Information</legend>
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Category name']) !!}
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif



        </div>
        <div class="col-md-6">
            {!! Form::label('quantity', 'Quantity') !!}
            {!! Form::number('quantity', null, ['class'=>'form-control', 'placeholder'=>'Enter Quantity']) !!}
            @if ($errors->has('quantity'))
                <span class="text-danger">{{ $errors->first('quantity') }}</span>
            @endif
        </div>
        <div class="col-md-6">
            {!! Form::label('price', 'Price') !!}
            {!! Form::number('price', null, ['class'=>'form-control', 'placeholder'=>'Enter Price']) !!}
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
            
       
    </div>
</fieldset>
