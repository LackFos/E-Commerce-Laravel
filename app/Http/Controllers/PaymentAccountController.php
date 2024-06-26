<?php

namespace App\Http\Controllers;

use App\Utils\Utils;
use App\Http\Requests\StorePaymentAccountRequest;
use Illuminate\Http\Request;
use App\Models\PaymentAccount;

class PaymentAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metaTitle = 'Rekening';

        $paymentAccounts = PaymentAccount::all();
        return view(
            'pages.dashboard.rekening',
            compact('metaTitle', 'paymentAccounts')
        )->with('hideFooter', true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $metaTitle = 'Tambah Rekening';

        return view(
            'pages.dashboard.rekening-tambah',
            compact('metaTitle')
        )->with('hideFooter', true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentAccountRequest $request)
    {
        $validated = $request->validated();
        $paymentAccount = new PaymentAccount($validated);
        $paymentAccount->save();
        return redirect()
            ->back()
            ->with('success', 'Nomor Rekening berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentAccount $paymentAccount)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentAccount $paymentAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaymentAccount $paymentAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentAccount $paymentAccount)
    {
        if (Utils::isAdmin()) {
            $paymentAccount->delete();
            return redirect()
                ->back()
                ->with('success', 'Nomor Rekening berhasil dihapus');
        }
    }
}
