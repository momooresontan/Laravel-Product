<x-layout>
    <h1>Edit product</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" id="qty" placeholder="qty">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id=price" placeholder="price">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
        </div>
        <button>Edit product</button>
    </form>
</x-layout>