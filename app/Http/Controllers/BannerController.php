<?php

namespace App\Http\Controllers;

use App\Utils\Utils;
use App\Models\Banner;
use Illuminate\Support\Arr;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('pages.dashboard.banner', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.banner-tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $validated = Arr::except($request->validated(), ['image']);

        if ($request->hasFile('image')) {
            $imagePath = Utils::uploadImage(
                $request->file('image'),
                'banner_images'
            );
            $validated['image'] = $imagePath;
        }

        Banner::create($validated);
        return redirect()
            ->back()
            ->with('success', 'Banner berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('pages.dashboard.banner-edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $validated = Arr::except($request->validated(), ['image']);
        $banner->update($validated);
        if ($request->hasFile('image')) {
            $newImagePath = Utils::uploadImage(
                $request->file('image'),
                'banner_images',
                $banner->image
            );
            $banner->image = $newImagePath;
            $banner->save();
        }

        return redirect()
            ->back()
            ->with('success', 'Banner berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if (Utils::isAdmin()) {
            Utils::deleteImage($banner->image, 'banner_images');
            $banner->delete();
            return redirect()
                ->back()
                ->with('success', 'Banner berhasil dihapus');
        }
    }
}
