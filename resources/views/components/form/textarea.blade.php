@props(['name'])
<x-form.div>
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <textarea name="description" cols="30" rows="10" {{ $attributes }}>{{ $slot??old($name) }}</textarea>
</x-form.div>