@extends('admin.index')
@section('content')


<div class="box">
    <div class="box-header text-center">
      <i class="fa fa-edit"></i>
      <h3> {{$title}} </h3>
    </div>

    <div class="box-body">

        {!! Form::open(['url'=>'mobile/'.$mob->id, 'method'=>'PUT', 'files'=>true]) !!}

        <div class="form-group">
        {!! Form::label('name', trans('admin.name_protect')) !!}    
        {!! Form::text('name', $mob->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('desc', trans('admin.desc_protect')) !!}    
        {!! Form::textarea('desc', $mob->desc, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('price', trans('admin.price_protect')) !!}    
        {!! Form::number('price', $mob->price, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('cpu', trans('admin.cpu')) !!}    
        {!! Form::text('cpu', $mob->cpu, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ram', trans('admin.ram')) !!}    
        {!! Form::text('ram', $mob->ram, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('camera', trans('admin.camera')) !!}    
        {!! Form::text('camera', $mob->camera, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('memory', trans('admin.memory')) !!}    
        {!! Form::text('memory', $mob->memory, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('screen_size', trans('admin.screen_size')) !!}    
        {!! Form::text('screen_size', $mob->screen_size, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('sale', trans('admin.sale')) !!}    
        {!! Form::text('sale', $mob->sale, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('parent_mob', trans('admin.parent')) !!}    
        {!! Form::select('parent_mob', App\Model\Department::where('parent', 13)->pluck('deb_name_en', 'id'),
            $mob->parent_mob, ['class'=>'form-control', 'placeholder'=> '...............']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('offer_type', trans('admin.offer_type')) !!}    
        {!! Form::select('offer_type', ['1' => trans('admin.heighlight'),
         '2' => trans('admin.most_poubler'), '3' => trans('admin.most_recent')],
         $mob->offer_type, ['class'=>'form-control', 'placeholder' => '.........']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('mobile_image', trans('admin.mobile_image')) !!}    
        {!! Form::file('mobile_image', ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.edit'), ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

</div>
</div>





@endsection
