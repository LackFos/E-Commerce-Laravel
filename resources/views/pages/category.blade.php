    @extends('index')

    @section('page')
        <div class="flex justify-center my-10">
            <div class="flex w-full max-w-[1440px] flex-col gap-10">
                <div class="flex justify-start w-full gap-2">
                    <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                    <span>></span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Kategori</span>
                </div>
                <div class="flex gap-8">
                    <div class="flex h-fit w-full max-w-[248px] flex-col gap-6 rounded-3xl border border-solid border-gray-200 bg-white p-6">
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold">Filters</span>
                            <x-icons.filter />
                        </div>
                        <div class="w-full h-px border border-gray-300 border-solid"></div>
                        <div class="flex flex-col">
                            <div class="flex justify-between py-2">
                                <label class="text-gray-500" for="category">Cardigan</label>
                                <input type="checkbox" id="category" name="category">
                            </div>
                            <div class="flex justify-between py-2">
                                <label class="text-gray-500" for="category">Cardigan</label>
                                <input type="checkbox" id="category" name="category">
                            </div>
                            <div class="flex justify-between py-2">
                                <label class="text-gray-500" for="category">Cardigan</label>
                                <input type="checkbox" id="category" name="category">
                            </div>
                            <div class="flex justify-between py-2">
                                <label class="text-gray-500" for="category">Cardigan</label>
                                <input type="checkbox" id="category" name="category">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-4 py-6 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span class="text-4xl font-bold">{{ $category->name }}</span>
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
                            <div class="grid grid-cols-8 gap-4">

                                @foreach ($products as $product)
                                    <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                                        <a href="/produk/{{ $product->slug }}" class="block">
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full bg-gray-300 h-60 rounded-t-2xl" />
                                        </a>
                                        <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                            <div class="flex flex-col justify-start gap-2">
                                                <span class="text-base font-medium">{{ $product->name }}</span>
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-xl font-bold text-primary">
                                                        @money($product->price)
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="/kategori/{{ $product->category->slug }}" class="text-sm text-gray-400">{{ $product->category->name }}</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
