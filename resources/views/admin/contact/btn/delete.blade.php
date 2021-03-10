<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_contact{{$id}}">
<i class="fa fa-trash"> </i>
</button>

<!-- Modal -->
<div id="del_contact{{$id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="text-center"><i class="fa fa-trash btn btn-danger"> </i></h4>
      </div>

{!! Form::open(['route' => ['contact.destroy', $id], 'method' => 'DELETE'])!!}
      <div class="modal-body">
        <h3 class="text-center"> {{ trans('admin.delete_message')}}</h3>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.close')}}</button>
        {!! Form::submit(trans('admin.yes'), ['class'=>'btn btn-danger']) !!}
      </div>

</div>
{!! Form::close() !!}
  </div>
</div>