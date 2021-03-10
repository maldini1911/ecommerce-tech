@extends('admin.index')
@section('content')


<div class="box">
    <div class="box-header text-center">
        <i class="fa fa-edit"></i>
        <h3> {{$title}} </h3>
    </div>
    <div class="box-body">

        {!! Form::open(['url'=>'tablet/'.$tap->id, 'method'=>'PUT', 'files'=>true]) !!}

        <div class="form-group">
        {!! Form::label('name', trans('admin.name_protect')) !!}    
        {!! Form::text('name', $tap->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('desc', trans('admin.desc_protect')) !!}    
        {!! Form::textarea('desc', $tap->desc, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('price', trans('admin.price_protect')) !!}    
        {!! Form::number('price', $tap->price, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('cpu', trans('admin.cpu')) !!}    
        {!! Form::text('cpu', $tap->cpu, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ram', trans('admin.ram')) !!}    
        {!! Form::text('ram', $tap->ram, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('camera', trans('admin.camera')) !!}    
        {!! Form::text('camera', $tap->camera, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('memory', trans('admin.memory')) !!}    
        {!! Form::text('memory', $tap->memory, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('screen_size', trans('admin.screen_size')) !!}    
        {!! Form::text('screen_size', $tap->screen_size, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('sale', trans('admin.sale')) !!}    
        {!! Form::text('sale', $tap->sale, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('parent_tap', trans('admin.parent')) !!}    
        {!! Form::select('parent_tap', App\Model\Department::where('parent', 8)->pluck('deb_name_en', 'id'),
            $tap->parent_tap, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('offer_type', trans('admin.offer_type')) !!}    
        {!! Form::select('offer_type', ['1' => trans('admin.heighlight'),
         '2' => trans('admin.most_poubler'), '3' => trans('admin.most_recent')],
         $tap->offer_type, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('tablet_image', trans('admin.tablet_image')) !!}    
        {!! Form::file('tablet_image', ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.edit'), ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

</div>
</div>





@endsection
