@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-green-700 dark:text-gray-300', 'style' => 'color: red;']) }}>
    {{ $value ?? $slot }}
</label>
