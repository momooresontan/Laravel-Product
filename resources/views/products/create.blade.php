<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create product</h1>
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
        <x-form.textarea name="description" placeholder='description' cols="30" rows="5" />
        <x-form.button>Add product</x-form.button>
    </form>
</body>
</html>