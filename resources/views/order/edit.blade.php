<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update a Order') }}
        </h2>
    </x-slot>
    <div>
        <form class="row g-3" action="{{route('order.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$order->id}}">
            <div class="col-md-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$order->address}}" required>
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Total</label>
                <input type="number" name="total" class="form-control" id="total" value="{{$order->total}}" required>
            </div>
            <div class="col-md-6">
                <label for="payment_method" class="form-label">Price</label>
                <input type="text" name="payment_method" class="form-control" id="payment_method" value = "{{$order->payment_method}}" required>
            </div>
            <div class="col-md-6">
                <label for="user_id" class="form-label">Users</label>
                <select name="user_id" class="form-control" id="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}" @if ($user->id == $order->user_id) selected @endif>
                            {{$user->email}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{route("product.index")}}" type="button" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>