<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create a Product') }}
            </h2>
        </x-slot>

        <form class="row g-3" action="{{route('product.store')}}" method="POST">
            @csrf 
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <div class="col-md-6">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" id="stock">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{route("product.index")}}" type="button" class="btn btn-danger">Cancel</a>
            </div>
                        
        </form>
</x-app-layout>