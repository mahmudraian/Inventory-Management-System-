<fieldset>
    <legend>Basic Information</legend>
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Category name']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Enter slug']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Enter Description']) !!}
        </div>

        <div class="col-md-6">
            {!! Form::label('parent_category_id', 'Parent Category') !!}
           {!! Form::select('parent_category_id', $all_categories, null, ['class'=>'form-select', 'placeholder'=>'Select parent category']) !!}
        </div>

        <div class="col-md-6">
            <label class="form-label">Related Category</label>
            <select  class="form-select select2" name="related_categories_id[]" multiple="multiple" data-placeholder="Choose ...">
                @foreach ($all_categories as $key => $categoryName)
                <option value="{{$key}}" {{ in_array($key, old('related_categories_id', $category->relatedCategories?->pluck('id')->toArray())) ? 'selected' : '' }}>
                    {{$categoryName}}
                </option>
                @endforeach
            </select>
        </div>

        {{-- <option value="{{$key}}" {{ in_array($key, old('related_categories_id', [])) ? 'selected' : '' }}> --}}

        
        
        <div class="col-md-6">
            {!! Form::label('Status', 'Status') !!}
            {!! Form::select('status', \App\Models\Category::STATUS , null, ['class'=>'form-select', 'placeholder'=>'Select status']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('photo', 'Photo',['class'=>'label-style']) !!}
            {!! Form::file('image', ['class'=>'form-control d-none photo-input', 'placeholder'=>'Enter Image']) !!}
            <div class="photo-preview-area">
                <i class="ri-camera-line"></i>
                <div class="overly"></div>
                <img
                    src="{{isset($category->image) ? asset(\App\Models\Category::PHOTO_UPLOAD_PATH.$category->image)  : asset('uploads/images.jpg')}}"
                    alt="photo display area" class="photo photo-preview-area-photo"/>
            </div>
        </div>
    </div>
</fieldset>
{{-- <fieldset class="mt-4">
    <legend>Seo</legend>
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('meta_title', ' Seo Title', ['class'=>'mt-0']) !!}
            {!! Form::text('meta_title',$blogCategory->seos->title ?? null, ['class'=>'form-control', 'placeholder'=>'Enter blog category title']) !!}
        </div>

        <div class="col-md-6">
            {!! Form::label('meta_title_bn', 'Seo Title_bn', ['class'=>'mt-0']) !!}
            {!! Form::text('meta_title_bn',$blogCategory->seos->title_bn ?? null, ['class'=>'form-control', 'placeholder'=>'Enter seo title bn']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('meta_keywords', 'Keywords') !!}
            {!! Form::text('meta_keywords',isset( $blogCategory) ?  $blogCategory?->seos?->keywords ?? null : null, ['class'=>'form-control', 'placeholder'=>'Enter Keywords']) !!}
        </div>

        <div class="col-md-6">
            {!! Form::label('meta_keywords_bn', 'Keywords bn') !!}
            {!! Form::text('meta_keywords_bn',isset( $blogCategory) ?  $blogCategory?->seos?->keywords_bn ?? null : null, ['class'=>'form-control', 'placeholder'=>'Enter Keywords bn']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('meta_description', 'Seo Description ') !!}
            {!! Form::text('meta_description', $blogCategory->seos->description ?? null, ['class'=>'form-control', 'placeholder'=>'Enter Seo Description']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('meta_description_bn', 'Seo Description bn ') !!}
            {!! Form::text('meta_description_bn', $blogCategory->seos->description_bn ??null, ['class'=>'form-control', 'placeholder'=>'Enter Seo Description bn ']) !!}
        </div>

        <div class="col-md-8">
            {!! Form::label('og_image', 'Og image',['class'=>'label-style']) !!}
            {!! Form::file('og_image', ['class'=>'form-control d-none photo-input', 'placeholder'=>'Og image']) !!}
            <div class="photo-preview-area" style="width: 250px; height: 150px">
                <i class="ri-camera-line"></i>
                <div class="overly"></div>
                <img
                    src="{{isset($blogCategory?->seos?->og_image) ? asset(\App\Models\Seo::Seo_PHOTO_UPLOAD_PATH . $blogCategory?->seos?->og_image)  : asset('uploads/canvas.webp')}}"
                    alt="photo display area" class="photo photo-preview-area-photo"/>
            </div>
        </div>
    </div>
</fieldset> --}}
