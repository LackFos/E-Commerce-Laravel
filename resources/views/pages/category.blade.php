    @extends('index')

    @section('page')
        <div class="flex justify-center my-10">
            <div class="flex max-w-[1440px] w-full flex-col gap-10">
                <div class="flex justify-start w-full gap-2">
                    <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                    <span>></span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Kategori</span>
                </div>
                <div class="flex gap-8">
                    <div class="flex flex-col bg-white h-fit p-6 gap-6 max-w-[248px] w-full rounded-3xl border border-solid border-gray-200">
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-xl">Filters</span>
                            <x-icons.filter/>
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
                    <div class="flex w-full flex-col gap-4 py-6 rounded-lg">
                        <div class="flex justify-between items-center">
                            <span class="text-4xl font-bold">Outwear</span>
                            <div class="flex gap-2 items-center">
                                <span>Urutkan:</span>
                                <div class="">
                                    <select id="sort" name="sort" class="w-full pl-3 py-2 text-base bg-transparent text-primary rounded-md">
                                        <option value="harga-terendah">Harga Terendah</option>
                                        <option value="harga-tertinggi">Harga Tertinggi</option>
                                        <option value="terbaru">Terbaru</option>
                                        <option value="terpopuler">Terpopuler</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex justify-start w-full gap-4">
                                <div class="flex flex-col w-1/3 bg-white rounded-2xl">
                                    <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                                    <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                        <div class="flex flex-col justify-start gap-2">
                                            <span class="text-base font-medium">Cardigan</span>
                                            <div class="flex flex-col gap-1">
                                                <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                            </div>
                                        </div>
                                        <span class="text-sm text-gray-400">Outwear</span>
                                    </div>
                                </div>
                                <div class="flex flex-col w-1/3 bg-white rounded-2xl">
                                    <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                                    <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                        <div class="flex flex-col justify-start gap-2">
                                            <span class="text-base font-medium">Cardigan</span>
                                            <div class="flex flex-col gap-1">
                                                <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                            </div>
                                        </div>
                                        <span class="text-sm text-gray-400">Outwear</span>
                                    </div>
                                </div>
                                <div class="flex flex-col w-1/3 bg-white rounded-2xl">
                                    <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                                    <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                        <div class="flex flex-col justify-start gap-2">
                                            <span class="text-base font-medium">Cardigan</span>
                                            <div class="flex flex-col gap-1">
                                                <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                            </div>
                                        </div>
                                        <span class="text-sm text-gray-400">Outwear</span>
                                    </div>
                                </div>
                        </div>
                        <div class="flex justify-start w-full gap-4">
                            <div class="flex flex-col w-1/3 bg-white rounded-2xl">
                                <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                                <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                    <div class="flex flex-col justify-start gap-2">
                                        <span class="text-base font-medium">Cardigan</span>
                                        <div class="flex flex-col gap-1">
                                            <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-400">Outwear</span>
                                </div>
                            </div>
                            <div class="flex flex-col w-1/3 bg-white rounded-2xl">
                                <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                                <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                    <div class="flex flex-col justify-start gap-2">
                                        <span class="text-base font-medium">Cardigan</span>
                                        <div class="flex flex-col gap-1">
                                            <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-400">Outwear</span>
                                </div>
                            </div>
                            <div class="flex flex-col w-1/3 bg-white rounded-2xl">
                                <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                                <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                                    <div class="flex flex-col justify-start gap-2">
                                        <span class="text-base font-medium">Cardigan</span>
                                        <div class="flex flex-col gap-1">
                                            <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-400">Outwear</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
