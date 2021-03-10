@extends('admin.index')
@section('content')

<div class="boxt">
    <div class="box-header text-center">
         <i class="fa fa-plus"></i>
        <h3>{{$title}}</h3>
    </div>

    <div class="box-body">
        {!! Form::open(['route' => 'contact.store']) !!}
            <div class="col-lg-12">

                <div class="col-lg-12">
                    <div class="form-group">
                        {!! Form::label('contact', trans('admin.name')) !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('contact', trans('admin.email')) !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('contact', trans('admin.message')) !!}
                        {!! Form::textarea('message', old('message'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('contact', trans('admin.do_readed')) !!}
                        {!! Form::select('do_readed', ['No' => trans('admin.no'), 'Yes' => trans('admin.yes')], '',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit(trans('admin.add'), ['class' => 'form-control btn btn-primary']) !!}
                    </div>
                </div>

          
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection