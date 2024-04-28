@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  dark focus:border-[--orange]  rounded-md shadow-sm']) !!}>
