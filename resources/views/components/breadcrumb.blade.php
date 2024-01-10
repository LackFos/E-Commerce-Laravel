<ul class="flex w-full justify-start gap-2">
    @foreach ($breadcrumb as $index => $crumb)
        @if (isset($crumb['link']))
            <a href={{ $crumb['link'] }} class='font-semibold text-black'>{{ $crumb['name'] }}</a>
        @else
            <ol class='text-gray-500'>{{ $crumb['name'] }}</ol>
        @endif

        @if ($index !== count($breadcrumb) - 1)
            <ol class='text-gray-500'>•</ol>
        @endif
    @endforeach
</ul>
