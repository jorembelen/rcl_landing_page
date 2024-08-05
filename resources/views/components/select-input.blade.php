
@props(['model', 'modelName', 'label'])

    <label for="{{ $modelName }}" class="form-label">{{ $label }}</label>
    <select class="form-control @error($modelName) is-invalid @enderror" wire:model="{{ $model }}">
        <option value="">-- Choose One --</option>
        {{ $slot }}
     </select>