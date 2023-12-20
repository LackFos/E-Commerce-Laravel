@props(['type', 'message'])

@php
    $borderColor = $type === 'success' ? 'border-green-600' : 'border-red-600';
    $bgColor = $type === 'success' ? 'bg-green-100' : 'bg-red-100';
    $textColor = $type === 'success' ? 'text-green-600' : 'text-red-600';
@endphp

<div class="toast fixed top-2 flex w-full justify-center">
    <div class="{{ $borderColor }} {{ $bgColor }} {{ $textColor }} text-md absolute top-4 z-10 flex gap-4 rounded-xl border p-4 text-sm">
        <div class="flex items-center gap-2">
            <span class="font-medium">{{ $message }}</span>
        </div>
        <div onclick="this.parentElement.remove()" class="font-bold">X</div>
    </div>
</div>
