@extends('admin.index')
@section('content')


<div class="box">
    <div class="box-header text-center">
        <i class="fa fa-cart-plus"></i>
        <h3> {{$title}} </h3>
    </div>
    
    <div class="box-body">

        {!! Form::open(['route'=>'laptop.store', 'files'=>true]) !!}

        <div class="form-group">
        {!! Form::label('name', trans('admin.name_protect')) !!}    
        {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('desc', trans('admin.desc_protect')) !!}    
        {!! Form::textarea('desc', old('desc'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('price', trans('admin.price_protect')) !!}    
        {!! Form::number('price', old('price'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('cpu', trans('admin.cpu')) !!}    
        {!! Form::text('cpu', old('cpu'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ram', trans('admin.ram')) !!}    
        {!! Form::text('ram', old('ram'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('battry', trans('admin.battry')) !!}    
        {!! Form::text('battry', old('battry'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('wifi', trans('admin.wifi')) !!}    
        {!! Form::text('wifi', old('wifi'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('screen_size', trans('admin.screen_size')) !!}    
        {!! Form::text('screen_size', old('screen_size'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('hard_drive', trans('admin.hard')) !!}    
        {!! Form::text('hard_drive', old('hard_drive'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('processor_type', trans('admin.processor_type')) !!}    
        {!! Form::text('processor_type', old('processor_type'), ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('sale', trans('admin.sale')) !!}    
        {!! Form::number('sale', old('sale'), ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('os_type', trans('admin.os_type')) !!}    
        {!! Form::select('os_type', ['DOS' => 'DOS', 'Mac' => 'Mac', 'Windows' => 'Windows'],
         old('os_type'), ['class'=>'form-control', 'placeholder' => '.........']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('offer_type', trans('admin.offer_type')) !!}    
        {!! Form::select('offer_type', ['1' => trans('admin.heighlight'),
         '2' => trans('admin.most_poubler'), '3' => trans('admin.most_recent')],
          old('offer_type'), ['class'=>'form-control', 'placeholder' => '.........']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('parent_lap', trans('admin.parent')) !!}    
        {!! Form::select('parent_lap', App\Model\Department::where('parent', 1)->pluck('deb_name_en', 'id'),
         old('parent_lap'), ['class'=>'form-control', 'placeholder' => '.........']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('laptop_image', trans('admin.laptop_image')) !!}    
        {!! Form::file('laptop_image', ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.add'), ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

</div>
</div>





@endsection
