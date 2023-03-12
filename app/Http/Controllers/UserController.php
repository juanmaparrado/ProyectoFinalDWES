<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function misPedidos(){
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('user.misPedidos', compact('orders'));
    }
}
