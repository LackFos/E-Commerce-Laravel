    @extends('index')

    @section('page')
        <div class="flex justify-center my-10">
            <div class="flex w-full max-w-[1440px] flex-col gap-10">
                <div class="flex justify-start w-full gap-2">
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

                        <div class="w-full h-px border-t border-gray-300"></div>

                        <div class="flex flex-col gap-2">
                            @foreach ($categories as $category)
                                <a href='/kategori/{{ $category->slug }}'
                                    class="{{ $slug == $category->slug ? 'text-primary' : 'text-gray-500' }} flex h-14 items-center rounded-xl px-4 hover:bg-primary-light hover:text-primary">{{ $category->name }}</a>
                            @endforeach
                        </div>

                    </div>
                    <div class="flex flex-col w-full gap-4 py-6 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span class="text-4xl font-bold">{{ $selectedCategory->name }}</span>
                            <div class="flex items-center gap-2">
                                <span>Urutkan:</span>
                                <div class="">
                                    <select id="sort" name="sort" class="w-full py-2 pl-3 text-base bg-transparent rounded-md text-primary">
                                        <option value="harga-terendah">Harga Terendah</option>
                                        <option value="harga-tertinggi">Harga Tertinggi</option>
                                        <option value="terbaru">Terbaru</option>
                                        <option value="terpopuler">Terpopuler</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="grid grid-cols-4 gap-4 max-sm:grid-cols-2 max-md:grid-cols-2 max-lg:grid-cols-3">

                                @foreach ($products as $product)
                                <x-card :product="$product"/>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
