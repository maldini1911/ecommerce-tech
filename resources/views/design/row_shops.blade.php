@if($item->id_laptop != null)
<div class="col-sm-3 img" id-order="{{$item->id}}">
    <img src="{{Storage::url($item->laptops['laptop_image'])}}" width="60px" height="60px" />
</div>

<div class="col-sm-7 details" id-order="{{$item->id}}">
    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#delete_item">
        <i class="fa fa-trash" style="color:#fff"> </i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="delete_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center alert alert-danger"> Do You Soure Delete This Order ? </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="delete_order('{{url('ordar/delete/'.$item->id)}}')" id="delete-order">Delete</button>
            </div>
            </div>
        </div>
    </div>

    <h5> {{$item->laptops['name']}} </h5>
    <p class="count_order">
        <span>QTY</span>
        <input type="hidden" value="{{$item->laptops['price']}}" class="price_order">
        <input type="text" style="width:100px;text-align:center" data-url="{{url('edit/order/'.$item->id)}}" value="{{$item->count_shop}}" class="qty" name="count_shop" min="1">
    </p>
    <p class="count-price">{{$item->laptops['price'] * $item->count_shop}} USD </p>
    <hr>
</div>
@endif

<!-- ______________________________________________ -->

@if($item->id_tablet != null)
<div class="col-sm-3 img">
    <img src="{{Storage::url($item->tablets['tablet_image'])}}" width="60px" height="60px" />
</div>

<div class="col-sm-7 details">
    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#delete_item">
            <i class="fa fa-trash" style="color:#fff"> </i>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="delete_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center alert alert-danger"> Do You Soure Delete This Order ? </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="delete_order('{{url('ordar/delete/'.$item->id)}}')" id="delete-order">Delete</button>
            </div>
            </div>
        </div>
    </div>

    <h5> {{$item->tablets['name']}} </h5>

    <p class="count_order">
         <span>QTY</span>
         <input type="hidden" value="{{$item->tablets['price']}}" class="price_order">
         <input type="text" style="width:100px;text-align:center" data-url="{{url('edit/order/'.$item->id)}}" value="{{$item->count_shop}}" class="qty" name="count_shop">
    </p>

    <p class="count-price"><span> {{$item->tablets['price'] * $item->count_shop}} </span> USD </p>

</div>
@endif
<hr>
<!-- ______________________________________________ -->

@if($item->id_mobile != null)
<div class="col-sm-3 img">
    <img src="{{Storage::url($item->mobiles['mobile_image'])}}" width="60px" height="60px" />
</div>

<div class="col-sm-7 details">
    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#delete_item">
            <i class="fa fa-trash" style="color:#fff"> </i>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="delete_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center alert alert-danger"> Do You Soure Delete This Order ? </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="delete_order('{{url('ordar/delete/'.$item->id)}}')" id="delete-order">Delete</button>
            </div>
            </div>
        </div>
    </div>
    <h5> {{$item->mobiles['name']}} </h5>

    <p class="count_order">
         <span>QTY</span>
         <input type="hidden" value="{{$item->mobiles['price']}}" class="price_order">
         <input type="text" style="width:100px;text-align:center" data-url="{{url('edit/order/'.$item->id)}}" value="{{$item->count_shop}}" class="qty" name="count_shop">
    </p>

    <p class="count-price"><span> {{$item->mobiles['price'] * $item->count_shop}} </span> USD </p>

</div>
@endif
