    @extends('index')

    @section('page')
        <div class="my-10 flex justify-center">
            <div class="flex w-full max-w-[1440px] flex-col gap-10">
                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Kategori</span>
                </div>

                <div class="flex gap-8">
                    <div class="flex h-fit w-full max-w-[248px] flex-col gap-6 rounded-3xl border border-solid border-gray-200 bg-white p-6">
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold">Kategori Lain</span>
                            <x-icons.filter />
                        </div>

                        <div class="h-px w-full border-t border-gray-300"></div>

                        <div class="flex flex-col gap-2">
                            @foreach ($categories as $category)
                                <a href='/kategori/{{ $category->slug }}'
                                    class="{{ $slug == $category->slug ? 'text-primary' : 'text-gray-500' }} flex h-14 items-center rounded-xl px-4 hover:bg-primary-light hover:text-primary">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex w-full flex-col gap-4 rounded-lg py-6">
                        <div class="flex items-center justify-between">
                            <span class="text-4xl font-bold">{{ $selectedCategory->name }}</span>
                            <div class="flex items-center gap-2">
                                <span>Urutkan:</span>
                                <div class="">
                                    <select id="sort" name="sort" class="w-full rounded-md bg-transparent py-2 pl-3 text-base text-primary">
                                        <option value="harga-terendah">Harga Terendah</option>
                                        <option value="harga-tertinggi">Harga Tertinggi</option>
                                        <option value="terbaru">Terbaru</option>
                                        <option value="terpopuler">Terpopuler</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-6">
                            <div class="grid grid-cols-5 gap-4 max-lg:grid-cols-3 max-md:grid-cols-2 max-sm:grid-cols-2">

                                @foreach ($products as $product)
                                    <x-product-card :product="$product" />
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection