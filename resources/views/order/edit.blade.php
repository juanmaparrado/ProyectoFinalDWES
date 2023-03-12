<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
            {{ __('Update a Order') }}
        </h2>
    </x-slot>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg ">
        <form class="row g-3" action="{{route('order.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$order->id}}">
            <div class="col-md-12">
                <x-input-label for="address" class="form-label">Address</x-input-label>
                <input type="text" name="address" id="address" class="form-control" value="{{$order->address}}" required>
            </div>
            <div class="mt-4">
                <x-input-label for="description" class="form-label">Total</x-input-label>
                <input type="number" name="total" class="form-control" id="total" value="{{$order->total}}" required>
            </div>
            <div class="mt-4">
                <x-input-label for="payment_method" class="form-label">Price</x-input-label>
                <input type="text" name="payment_method" class="form-control" id="payment_method" value = "{{$order->payment_method}}" required>
            </div>
            <div class="mt-4">
                <label for="user_id" class="form-label">Users</label>
                <select name="user_id" class="form-control" id="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}" @if ($user->id == $order->user_id) selected @endif>
                            {{$user->email}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-1">
                <button type="submit" style="background-color:green;height:50px;border-radius:2%;color:white;"class="button-green">Save</button>
                <a href="{{route("product.index")}}" type="button" style="background-color:red;height:50px;border-radius:2%;color:white;" class="grid items-center">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>