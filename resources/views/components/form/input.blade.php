@props(['name'])
<div>
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input type="text" name="{{$name}}" {{ $attributes(['value' => old($name)]) }} >
</div>