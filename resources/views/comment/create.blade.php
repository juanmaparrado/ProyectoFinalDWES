<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Create a Comment') }}
        </h2>
    </x-slot>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg ">
        <form class="row g-3" action="{{route('comment.store')}}" method="POST">
            @csrf
            <div class="mt-4">
                <x-input-label for="title" class="form-label">Title</x-input-label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mt-4">
                <x-input-label for="description" class="form-label">Description</x-input-label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="mt-4">
                <x-input-label for="product_id" class="form-label">Product</x-input-label>
                <select name="product_id" class="form-control" id="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-1">
                <button type="submit" style="background-color:green;height:50px;border-radius:2%;color:white;"class="button-green">Create</button>
                <a href="{{route("comment.index")}}" type="button"  style="background-color:red;height:50px;border-radius:2%;color:white;" class="grid items-center">Cancel</a>
            </div>
                        
        </form>
    </div>
</x-app-layout>