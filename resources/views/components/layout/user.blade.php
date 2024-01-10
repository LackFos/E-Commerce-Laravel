@if (!isset($hideHeader))
    <x-layout.header :user="$user" />
@endif

<main class="min-h-[calc(100vh-392px)] pb-10">
    {{ $slot }}
</main>

@if (!isset($hideFooter))
    <x-layout.footer />
@endif
