<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Edit a Product') }}
        </h2>
    </x-slot>
    <div>
        <form class="row g-3" action="{{route('product.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="mt-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" required>
            </div>
            <div class="mt-4">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" value="{{$product->description}}" required>
            </div>
            <div class="mt-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="price" value = "{{$product->price}}" required>
            </div>
            <div class="mt-4">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" id="stock" value = "{{$product->stock}}" required>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-1">
                <button type="submit" style="background-color:green;height:50px;border-radius:2%;color:white;"class="button-green">Create</button>
                <a href="{{route("product.index")}}" type="get" style="background-color:red;height:50px;border-radius:2%;color:white;" class="grid items-center">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>