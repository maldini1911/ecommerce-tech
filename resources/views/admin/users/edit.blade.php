@extends('admin.index')

@section('content')

<div class="box">
    <div class="box-header text-center">
        <i class="fa fa-edit"></i>
        <h3>  {{$title}}</h3>
    </div>
    <div class="box-body">

        {!! Form::open(['url' => 'users/'.$user->id, 'method' => 'PUT'])!!}
            <div class="form-group">
                {!! Form::label('name', trans('admin.name'))!!}
                {!! Form::text('name', $user->name, ['class' => 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('password', trans('admin.password')) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', trans('admin.email'))!!}
                {!! Form::email('email', $user->email, ['class' => 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('mobile', trans('admin.mobile'))!!}
                {!! Form::number('mobile', old('mobile'), ['class' => 'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('type', trans('admin.type'))!!}
                {!! Form::select('type', ['male' => trans('admin.male'), 'female' => trans('admin.female')],
                    $user->type, ['class' => 'form-control', 'placeholder' => '.........'])!!}
            </div>

            {!! Form::submit(trans('admin.add'), ['class'=>'btn btn-primary btn-lg']) !!}

        {!! Form::close() !!}
    </div>
</div>







@endsection