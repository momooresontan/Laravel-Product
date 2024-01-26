@props(['name'])
<div>
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <textarea name="{{$name}}" {{ $attributes }}>{{ $slot??old($name) }}</textarea>
</div>