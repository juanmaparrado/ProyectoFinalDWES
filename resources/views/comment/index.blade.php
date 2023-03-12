<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comments') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('comment.create')}}" type="button" style="background-color:#988270;height:50px;border-radius:2%;color:white;" class="grid items-center">
                    Add Comment
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Product ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                        <tr>
                            <td>{{ $comment->title }}</td>
                            <td>{{ $comment->description }}</td>
                            @foreach ($products as $product)
                                @if ($comment->product_id == $product->id)
                                    <td>{{ $product->name }}</td>
                                @endif
                            @endforeach
                            <td>
                                <a type="button" href="{{route('comment.edit',$comment->id)}}" style="text-align:center;text-decoration:none;background-color:green;color:white;heigh:40px;width:100px;">Edit</a>
                            </td>
                            <td>
                                <form method="POST" action="{{route('comment.destroy', $comment->id)}}">
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
    </div>
</x-app-layout>