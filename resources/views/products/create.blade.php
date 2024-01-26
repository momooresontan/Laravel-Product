<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        <x-form.input name="name" placeholder="name"  />
        <x-form.input name="qty" placeholder="qty"  />
        <x-form.input name="price" placeholder="price"  />
       

        {{-- <div>
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
        </div> --}}
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
        </div>
        <button>Add product</button>
    </form>
</body>
</html>