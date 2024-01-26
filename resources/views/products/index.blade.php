<x-layout>
    <h1>Product</h1>
    <div>
        <table border="1"> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layout>