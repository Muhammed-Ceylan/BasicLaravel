@php
    if (empty($id)) {
        $id = uniqid('input-');
    }
@endphp

<div class="{{ $parentClass ?? '' }}">
    @isset($label)
        <label for="{{ $id }}" class="mb-2 {{ $labelClasses ?? '' }}">{{ $label }}</label>
    @endisset

    <input type="{{ $type ?? 'text' }}" name="{{ $name ?? '' }}" id="{{ $id }}"
        class="{{ $type != 'submit' && $type != 'button' ? 'form-control' : '' }} {{ $inputClasses ?? '' }}"
        placeholder="{{ (isset($placeholder) ? $placeholder : isset($label)) ? $label : '' }}"
        {{ isset($isDisabled) && $isDisabled ? 'disabled' : '' }} value="{{ $defaultValue ?? '' }}" />
</div>
