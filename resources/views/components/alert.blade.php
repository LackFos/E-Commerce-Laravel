@props(['type' => 'success', 'message'])

<div class="relative flex justify-center w-full">
    <div class="absolute top-4 z-10 flex w-full max-w-lg justify-between rounded-xl border p-4
                @if($type === 'success') border-primary bg-primary-light text-primary @endif
                @if($type === 'danger') border-red-500 bg-red-100 text-red-500 @endif
            ">
        <div class="flex items-center gap-2">
            @if($type === 'success')
                <x-icons.check />
            @elseif($type === 'danger')
                <x-icons.check />
            @endif
            <span class="text-xl font-medium">{{ $message }}</span>
        </div>
        <button class="text-xl font-bold">X</button>
    </div>
</div>