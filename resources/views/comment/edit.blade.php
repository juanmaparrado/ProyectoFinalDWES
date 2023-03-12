<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('Create a Comment') }}
        </h2>
    </x-slot>
    <div>
        <form class="row g-3" action="{{route('comment.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$comment->id}}">
            <div class="mt-6">
                <x-input-label for="title" class="form-label">Title</x-input-label>
                <input type="text" name="title" id="title" class="form-control" value="{{$comment->title}}" required>
            </div>
            <div class="mt-6">
                <x-input-label for="description" class="form-label">Description</x-input-label>
                <input type="text" name="description" class="form-control" id="description" value="{{$comment->description}}" required>
            </div>
            <div class="mt-6">
                <x-input-label for="product_id" class="form-label">Product Name</x-input-label>
                <select name="product_id" class="form-control w-100" id="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}" @if ($product->id == $comment->product_id) selected @endif>
                            {{$product->name}}
                        </option>
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