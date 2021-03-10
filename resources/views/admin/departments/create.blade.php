@extends('admin.index')

@section('content')



@push('js')
<script type="text/javascript">
$(document).ready(function(){
  $('#jstree').jstree({
  "core" : {
    'data' : {!! load_dep(old('parent')) !!},
    "themes" : {
      "variant" : "large"
    }
  },
  "checkbox" : {
    "keep_selected_style" : false
  },
  "plugins" : [ "wholerow"]
});


$('#jstree').on('changed.jstree', function(e,data){
var i, j, r = [];
for(i=0,j = data.selected.length;i < j;i++){
    r.push(data.instance.get_node(data.selected[i]).id);
}
$('.parent_id').val(r.join(', '));
}).jstree();
});
</script>

@endpush

<div class="box">
    <div class="box-header text-center">
      <i class="fas fa-cart-plus"></i>
      <h3> {{$title}} </h3>
    </div>
    <div class="box-body">

{!! Form::open(['url'=>'departments', 'files'=>true])!!}

<div class="form-group">
{!! Form::label('deb_name_ar', trans('admin.deb_name_ar')) !!}    
{!! Form::text('deb_name_ar', old('deb_name_ar'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('deb_name_en', trans('admin.deb_name_en')) !!}    
{!! Form::text('deb_name_en', old('deb_name_en'), ['class'=>'form-control']) !!}
</div>
<!-- @@@@@@@@@@@@@ -->
<div class="clearfix"> </div>

<div id="jstree"></div>
<input type="hidden" name="parent" class="parent_id" value="{{ old('parent') }}">

<div class="clearfix"> </div>
<!-- @@@@@@@@@@@@@ -->
<div class="form-group">
{!! Form::label('description', trans('admin.description')) !!}    
{!! Form::textarea('description', old('description'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('keyword', trans('admin.keyword')) !!}    
{!! Form::textarea('keyword', old('keyword'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('icon', trans('admin.icon_dep')) !!}    
{!! Form::file('icon', old('icon'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('width', trans('admin.width')) !!}    
{!! Form::number('width', old('width'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('height', trans('admin.height')) !!}    
{!! Form::number('height', old('height'), ['class'=>'form-control']) !!}
</div>

{!! Form::submit(trans('admin.add'), ['class'=>'btn btn-primary']) !!}


{!! Form::close()!!}
</div>
</div>











@endsection