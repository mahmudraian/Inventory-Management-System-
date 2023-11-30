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
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>



        <div class="col-md-6">
            {!! Form::label('phone', 'Phone') !!}
            {!! Form::number('phone', null, ['class'=>'form-control', 'placeholder'=>'Enter Phone']) !!}
            @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="col-md-6">
            {!! Form::label('address', 'Address') !!}
            {!! Form::text('Address', null, ['class'=>'form-control', 'placeholder'=>'Enter Address']) !!}
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>

        <div class="col-md-6">
            {!! Form::label('password', 'Password') !!}
            {!! Form::text('password', null, ['class'=>'form-control', 'placeholder'=>'Enter Password']) !!}
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="col-md-6">
            {!! Form::label('image', 'Photo', ['class' => 'label-style']) !!}
            {!! Form::file('image', ['class' => 'form-control photo-input', 'placeholder' => 'Enter Image', 'id' => 'photo']) !!}
            
              <div class="col-md-4">
                  <div class="photo-preview-area">
                <img id="photo-preview" src="#" alt="Photo Preview" style="display: none; max-width: 100%; max-height: 150px;">
                  </div>
                  @isset($user)
                  @if($user->image)
                      <div class="photo-preview-area">
                          <img id="photo-preview" src="{{ asset('storage/'.$user->image) }}" alt="Photo Preview" style="max-width: 100%; max-height: 150px;">
                      </div>
                  @endif
              @endisset
              
                   

             </div>
        </div>
        
       
            
       
    </div>
</fieldset>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function(){
        // Listen for file input change event
        $('.photo-input').change(function(){
            // Check if a file is selected
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Display the preview image
                    $('#photo-preview').attr('src', e.target.result).show();
                }

                // Read the file
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
