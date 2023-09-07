@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-base text-[#014a75]']) }}>
    {{ $value ?? $slot }}
</label>
