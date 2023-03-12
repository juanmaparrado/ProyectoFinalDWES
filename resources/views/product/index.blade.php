<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('product.create')}}" type="button" style="background-color:#988270;height:50px;border-radius:2%;color:white;" class="grid items-center">
                    Add Producto
                </a>
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        <a type="button" href="{{route('product.edit', $product->id)}}" style="text-decoration:none;background-color:green;color:white;heigh:40px;width:100px;">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('product.destroy', $product->id)}}">
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
</x-app-layout>