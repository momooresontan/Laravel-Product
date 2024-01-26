@props('name')

<input type="text" name="{{$name}}" {{ $attributes(['value' => old($name)]) }} >