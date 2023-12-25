<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentAccount;
use App\Rules\ValidBankDetails;

class PaymentAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.rekening')->with('hideFooter', true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.rekening-tambah')->with('hideFooter', true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bank_name' => 'bail|required',
            'bank_number' => ['bail', 'required', new ValidBankDetails()],
            'bank_owner' => 'bail|required',
        ]);

        $paymentAccount = new PaymentAccount([
            'bank_name' => $validated['bank_name'],
            'bank_number' => $validated['bank_number'],
            'bank_owner' => $validated['bank_owner'],
        ]);

        $paymentAccount->save();
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
        $validated = $request->validate([
            'bank_name' => 'bail|required',
            'bank_number' => ['bail', 'required', new ValidBankDetails()],
            'bank_owner' => 'bail|required',
        ]);

        $paymentAccount->update([
            'bank_name' => $validated['bank_name'],
            'bank_number' => $validated['bank_number'],
            'bank_owner' => $validated['bank_owner'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentAccount $paymentAccount)
    {
        $paymentAccount->delete();
    }
}
