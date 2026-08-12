<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes — Archon Special Machineries Inc.
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Quote form submission
Route::post('/quote', function (Request $request) {
    $request->validate([
        'first_name' => 'required|string|max:100',
        'last_name'  => 'required|string|max:100',
        'email'      => 'required|email|max:255',
        'phone'      => 'required|string|max:30',
        'product'    => 'nullable|string|max:100',
        'message'    => 'nullable|string|max:2000',
        'privacy'    => 'accepted',
    ]);

    // TODO: Add email notification or DB save here in future phases
    // Mail::to('sales@archon.com.ph')->send(new QuoteRequestMail($request->all()));

    return redirect()->route('home')
        ->with('quote_success', true)
        ->withFragment('quote');

})->name('quote.submit');
