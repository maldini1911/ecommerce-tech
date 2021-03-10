<?php
namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Ordar;
use App\Model\Laptop;
use Session;
use SweetAlert;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Ordar::where('id_user', auth()->user()->id)->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->get();
        foreach($orders as $order)
        {
            $total += ($order->laptops['price'] * $order->count_shop);
            $total += ($order->tablets['price'] * $order->count_shop);
            $total += ($order->mobiles['price'] * $order->count_shop);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function order_products(Request $request)
    {
        //====> Add Cart Laptop
        if(request()->has('id_laptop'))
        {
            $check_laptop = Ordar::where('id_laptop', request('id_laptop'))->where('id_user', request('id_user'))
            ->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->first();
            if(!$check_laptop)
            {

                $data = $this->validate(request(), [
                    'id_user'        => 'required',
                    'id_laptop'      => 'required',
                    'count_shop'     => 'required',
                ]);

            }
        }

        //====> Add Cart Tablet
        if(request()->has('id_tablet'))
        {
            $check_tablet = Ordar::where('id_tablet', request('id_tablet'))->where('id_user', request('id_user'))
            ->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->first();
            if(!$check_tablet)
            {

                $data = $this->validate(request(), [
                    'id_user'        => 'required',
                    'id_tablet'      => 'required',
                    'count_shop'     => 'required',
                ]);

            }
        }

        //====> Add Cart Mobile
        if(request()->has('id_mobile'))
        {
            $check_mobile = Ordar::where('id_mobile', request('id_mobile'))->where('id_user', request('id_user'))
            ->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->first();
            if(!$check_mobile)
            {
                $data = $this->validate(request(), [
                    'id_user'        => 'required',
                    'id_mobile'      => 'required',
                    'count_shop'     => 'required',
                ]);

            }
        }

        $total = 0;
        //====> Send Data In Page Cart Shop
        $item = Ordar::create($data);
        $orders = Ordar::where('id_user', auth()->user()->id)->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->get();
        foreach($orders as $order)
        {
            $total += ($order->laptops['price'] * $order->count_shop);
            $total += ($order->tablets['price'] * $order->count_shop);
            $total += ($order->mobiles['price'] * $order->count_shop);
        }
        session()->put('total', $total);
        $html = view('design.row_shops', ['item' => $item])->render();
        //alert()->success('Success Message');
        return response(['status' => true, 'result' => $html, 'total' => $total]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $total = 0;
        //====> Send Data In Page Cart Shop
        Ordar::where('id', $id)->update(['count_shop' => request("qty")]);
        $orders = Ordar::where('id_user', auth()->user()->id)->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->get();
        foreach($orders as $order)
        {
            $total += ($order->laptops['price'] * $order->count_shop);
            $total += ($order->tablets['price'] * $order->count_shop);
            $total += ($order->mobiles['price'] * $order->count_shop);
        }
        session()->put('total', $total);
        //$html = view('design.row_shops', ['item' => $item])->render();
        //return response(['status' => true, 'result' => $html, 'total' => $total, 'qty' => request("qty")]);
       // alert()->success('Update Message', 'Optional Title');
        return response()->json(['qty' => request("qty"), 'total' => $total]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $total = 0;
        $item = Ordar::find($id);
        $item->delete();
        $orders = Ordar::where('id_user', auth()->user()->id)->where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->get();
        foreach($orders as $order)
        {
            $total += ($order->laptops['price'] * $order->count_shop);
            $total += ($order->tablets['price'] * $order->count_shop);
            $total += ($order->mobiles['price'] * $order->count_shop);
        }
        session()->put('total', $total);
        $html = view('design.row_shops', ['item' => $item, 'total' => $total])->render();
        return response()->json(['status' => true, 'order_id' => $id, 'total' => $total]);
    }

    public function check_out()
    {

        Ordar::where('id_user', auth()->user()->id)->update(['buy_state' => 'yes']);
        session()->put('total', 0);
        return back();
    }
}
