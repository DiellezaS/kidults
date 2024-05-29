@props(['id',  'options'])
<select id="{{ $id }}"  {{ $attributes->merge(['class' => 'block rounded-lg px-2.5 pb-2.5 w-full text-sm text-gray-900 bg-gray-200  appearance-none  focus:outline-none peer' ]) }}>
@foreach($options as $value => $label)
        <option value="{{ $value }}" >{{ $label }}</option>
    @endforeach
</select>