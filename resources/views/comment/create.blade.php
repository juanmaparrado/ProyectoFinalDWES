<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Comment') }}
        </h2>
    </x-slot>
    <div>
        <form class="row g-3" action="{{route('comment.store')}}" method="POST">
            @csrf
            <div class="col-md-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="col-md-6">
                <label for="product_id" class="form-label">Product</label>
                <select name="product_id" class="form-control" id="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{route("comment.index")}}" type="button" class="btn btn-danger">Cancel</a>
            </div>
                        
        </form>
    </div>
</x-app-layout>