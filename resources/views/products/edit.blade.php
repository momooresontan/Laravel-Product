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
        <x-form.input name="name" placeholder="name" :value="old('name', $product->name)" />
        <x-form.input name="qty" placeholder="qty" :value="old('qty', $product->qty)" />
        <x-form.input name="price" placeholder="price" :value="old('price', $product->price)" />
        <x-form.textarea name="description" placeholder='description' cols="30" rows="5" />
        <x-form.button>Edit product</x-form.button>
    </form>
</x-layout>