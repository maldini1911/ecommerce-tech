@extends('admin.index')
@section('content')




@push('js')
<script type="text/javascript">
$(document).ready(function(){
  $('#jstree').jstree({
  "core" : {
    'data' : {!! load_dep($department->parent, $department->id) !!},
    "themes" : {
      "variant" : "large"
    }
  },
  "checkbox" : {
    "keep_selected_style" : false
  },
  "plugins" : [ "wholerow"]
});
});

$('#jstree').on('changed.jstree', function(e,data){
var i, j, r = [];
for(i=0,j = data.selected.length;i < j;i++){
    r.push(data.instance.get_node(data.selected[i]).id);
}
$('.parent_id').val(r.join(', '));
});

</script>

@endpush

<div class="box">
    <div class="box-header text-center">
      <i class="fa fa-edit"> </i>
      <h3> {{$title}} </h3>
    </div>
    
    <div class="box-body">

{!! Form::open(['url'=> url('departments/'.$department->id), 'method'=>'put', 'files'=>true])!!}

<div class="form-group">
{!! Form::label('deb_name_ar', trans('admin.deb_name_ar')) !!}    
{!! Form::text('deb_name_ar', $department->deb_name_ar, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('deb_name_en', trans('admin.deb_name_en')) !!}    
{!! Form::text('deb_name_en', $department->deb_name_en, ['class'=>'form-control']) !!}
</div>
<!-- @@@@@@@@@@@@@ -->
<div class="clearfix"> </div>

<div id="jstree"></div>
<input type="hidden" name="parent_id" class="parent_id" value="{{ $department->paren_id }}">

<div class="clearfix"> </div>
<!-- @@@@@@@@@@@@@ -->
<div class="form-group">
{!! Form::label('description', trans('admin.description')) !!}    
{!! Form::textarea('description',  $department->description, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('keyword', trans('admin.keyword')) !!}    
{!! Form::textarea('keyword',  $department->keyword, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('icon', trans('admin.icon_dep')) !!}    
{!! Form::file('icon',  ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('width', trans('admin.width')) !!}    
{!! Form::number('width', $department->width, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('height', trans('admin.height')) !!}    
{!! Form::number('height', $department->height, ['class'=>'form-control']) !!}
</div>

{!! Form::submit(trans('admin.edit'), ['class'=>'btn btn-primary']) !!}


{!! Form::close()!!}
</div>
</div>







@endsection