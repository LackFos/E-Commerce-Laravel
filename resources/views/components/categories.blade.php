<div class="flex justify-start gap-3">
    @foreach ($categories as $category)
        <a href='/kategori/{{ $category->slug }}'
            class="flex items-center justify-center rounded-full bg-gray-200 px-6 py-3 text-black opacity-60 hover:bg-opacity-60">{{ $category->name }}</a>
    @endforeach
</div>
