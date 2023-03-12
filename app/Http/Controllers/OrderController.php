<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $users = User::all();   
        return view('order.index', compact('orders', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('order.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required |min:5|max:250',
            'total' => 'required',
            'payment_method' => 'required |min:3',
            'user_id' => 'required',
        ]);
        $order = new Order;
        $order->address = $request->address;
        $order->total = $request->total;
        $order->payment_method = $request->payment_method;
        $order->user_id = $request->user_id;
        $order->save();

        return redirect()->route('order.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $users = User::all();
        return view('order.edit', compact('order', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required |min:5|max:250',
            'total' => 'required |min:1',
            'payment_method' => 'required |min:3',
            'user_id' => 'required',
        ]);
        $order = Order::find($request->id);
        $order->address = $request->address;
        $order->total = $request->total;
        $order->payment_method = $request->payment_method;
        $order->user_id = $request->user_id;
        $order->save();

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('order.index');
    }
}
