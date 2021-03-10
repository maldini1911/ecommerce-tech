@extends('admin.index')
@section('content')


<div class="box">
    <div class="box-header text-center">
      <h3> {{$title}} </h3>
    </div>
    
    <div class="box-body">

    <div class="table-responsive">
        <form action="{{url('laptop/delete/all')}}" method="post" id="form_delete">  
          {!! csrf_field() !!}
          <input type="hidden" name="_method" value="DELETE">

        {!! $dataTable->Table(['class' => 'dataTable table table-bordered table-hover text-center'], true) !!}
        </form>

    </div>
</div>
</div>

<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="multiDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><i class="fa fa-trash btn btn-danger"> </i> </h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"> 

       <div class="empty_delete hidden">
         <h1 class="text-center">{{trans('admin.not_data_delete')}}</h1>
       </div>

       <div class="full_delete hidden">
            <h1 class="text-center">{{trans('admin.ask_delete')}}  <span class="delete_count"></span></h1>
        </div>

        </div>
      </div>
      <div class="modal-footer">
      <div class="empty_delete hidden">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.close')}}</button>
      </div>

  <div class="full_delete hidden">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.no')}}</button>
        <input type="submit" name="del_all" value="{{trans('admin.yes')}}" class="btn btn-danger del_all">
   </div>

      </div>
    </div>

  </div>
</div>

@push('js')

<script> delete_all(); </script>

{!! $dataTable->scripts() !!}

@endpush



@endsection
