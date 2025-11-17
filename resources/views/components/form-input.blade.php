@props(['label', 'name', 'type' => 'text', 'value' => '', 'required' => false])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label fw-bold">{{ $label }}</label>
    @if($type === 'textarea')
        <textarea 
            name="{{ $name }}" 
            id="{{ $name }}" 
            class="form-control" 
            rows="4"
            {{ $required ? 'required' : '' }}
            placeholder="Masukkan {{ strtolower($label) }}"
        >{{ old($name, $value) }}</textarea>
    @else
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            class="form-control" 
            value="{{ old($name, $value) }}"
            {{ $required ? 'required' : '' }}
            placeholder="Masukkan {{ strtolower($label) }}"
        >
    @endif
    @error($name)
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>