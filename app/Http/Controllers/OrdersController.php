<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderConfirmRequest;
use App\Http\Requests\OrdersRequest;
use App\Models\Branch;
use App\Models\Flower;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function create(Flower $flower)
    {
        $branches = Branch::all();
        return view('orders.create', compact('flower', 'branches'));
    }

    public function store(OrdersRequest $request)
    {
        $input = $request->validated();
        $flower = Flower::find($input['flower_id']);
        $input['price'] = $flower->price;
        $order = Order::create($input);

        return response()->json([
            'data' => [
                'order_number' => $order->id,
                'total' => $order->price
            ]
        ]);
    }

    public function confirmForm()
    {
        $branches = Branch::all();
        return view('orders.confirm', compact('branches'));
    }

    public function confirm(OrderConfirmRequest $request)
    {
        $input = $request->validated();
        $order = Order::find($input['order_number']);

        $order->update([
            'is_paid' => 1,
            'paying_branch_id' => $input['paying_branch_id']
        ]);
        return redirect('dashboard/orders/confirm');
    }
}
