<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Create a Order') }}
        </h2>
    </x-slot>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg "> 
        <form class="row g-3" action="{{route('order.store')}}" method="POST">
            @csrf
            <div class="mt-4">   
                <x-input-label for="address" class="form-label">Address</x-input-label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="mt-4">
                <x-input-label for="total" class="form-label">Total</x-input-label>
                <input type="number" name="total" class="form-control" id="total">
            </div>
            <div class="mt-4">
                <label for="payment_method" class="form-label">Payment method</label>
                <input type="text" name="payment_method" class="form-control" id="payment_method">
            </div>
            <div class="mt-4">
                <x-input-label for="user_id" class="form-label">Users</x-input-label>
                <select name="user_id" class="form-control" id="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-1">
                <button type="submit" style="background-color:green;height:50px;border-radius:2%;color:white;"class="button-green">Create</button>
                <a href="{{route("order.index")}}" type="get" style="background-color:red;height:50px;border-radius:2%;color:white;" class="grid items-center">Cancel</a>
            </div>           
        </form>
    </div>
</x-app-layout>