<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = Order::select(['id', 'user_id', 'product_id' , 'created_at']);
            return DataTables::of($orders)
                ->addColumn('product_name', function ($order) {
                    // Ensure the image path is correctly concatenated
                    return $order->product->name;
                })
                ->addColumn('user_name', function ($order) {
                    return $order->user->name;
                })
                ->addColumn('date', function ($order) {
                    return Carbon::parse($order->created_at)->format('Y-m-d H:i:s');
                })
                ->addColumn('action', function ($order) {
                    return '
                    <form action="'.route('orders.destroy', $order->id).'" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure you want to delete this order?\');">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button type="submit" class="btn btn btn-danger">Delete</button>
                    </form>';
                })
                ->rawColumns(['product_name', 'user_name' , 'date' , 'action'])
                ->make(true);
        }
    
        // Additional logic here
        
        return view('backend.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index')
        ->with('success', 'Order Deleted successfully!');
    }
}
