@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border border-gray-600 p-2 focus:border-gray-600 focus:ring focus:ring-gray-200 focus:ring-opacity-50']) !!}>
