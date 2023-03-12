<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                {{ __('Create a Product') }}
            </h2>
        </x-slot>
        <form class="row g-3 " action="{{route('product.store')}}" method="POST">
            @csrf 
            <div class="mt-6">
                <x-input-label for="name" class="form-label">Name</x-input-label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="mt-6">
                <x-input-label for="description" class="form-label">Description</x-input-label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="col-md-6">
                <x-input-label for="price" class="form-label">Price</x-input-label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <div class="col-md-6">
                <x-input-label for="stock" class="form-label">Stock</x-input-label>
                <input type="number" name="stock" class="form-control" id="stock">
            </div>
            <div class="mt-6 grid grid-cols-2 gap-1">
                <button type="submit" style="background-color:green;height:50px;border-radius:2%;color:white;"class="button-green">Create</button>
                <a href="{{route("product.index")}}" type="get" style="background-color:red;height:50px;border-radius:2%;color:white;" class="grid items-center">Cancel</a>
            </div>        
        </form>
</x-app-layout>