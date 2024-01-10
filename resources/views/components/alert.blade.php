@php
    $message = session('success') ?? session('error');
    $type = session()->has('success') ? 'success' : 'error';

    $styles = [
        'success' => [
            'borderColor' => 'border-green-600',
            'bgColor' => 'bg-green-100',
            'textColor' => 'text-green-600',
        ],
        'error' => [
            'borderColor' => 'border-red-600',
            'bgColor' => 'bg-red-100',
            'textColor' => 'text-red-600',
        ],
    ];

    $alertStyles = $styles[$type];
@endphp

@if ($message)
    <div class="toast fixed top-20 z-10 flex w-full justify-center">
        <div
            class="{{ $alertStyles['borderColor'] }} {{ $alertStyles['bgColor'] }} {{ $alertStyles['textColor'] }} text-md absolute top-4 z-10 flex items-center gap-4 rounded-xl border p-4 text-sm">
            <div class="flex items-center gap-2">
                <span class="font-medium">{{ $message }}</span>
            </div>

            <div onclick="this.parentElement.remove()" class="font-bold">
                <x-icons.close />
            </div>
        </div>
    </div>
@endif
