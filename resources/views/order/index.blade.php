<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>
        <div class=" mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <a href="{{route('order.create')}}" type="button" style="background-color:#988270;height:50px;border-radius:2%;color:white;" class="grid items-center">
                        Add Order
                    </a>
                <table class="table table-dark">
                    <thead>
                        <tr class="badge-primary">
                            <th scope="col">Address</th>
                            <th scope="col">Total</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->payment_method }}</td>
                            @foreach ($users as $user)
                                @if ($order->user_id == $user->id)
                                    <td>{{ $user->email }}</td>
                                @endif
                            @endforeach
                            <td>
                                <a type="button" href="{{route('order.edit',$order->id)}}" style="text-decoration:none;background-color:green;color:white;heigh:40px;width:100px;">Edit</a>
                            </td>
                                <td>
                                    <form method="POST" action="{{route('order.destroy', $order->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="background-color:red;color:white;heigh:40px;width:100px;">DELETE</button>                   
                                    </form>                                    
                                    </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>