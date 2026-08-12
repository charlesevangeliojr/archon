<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Quote;

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
    $validated = $request->validate([
        'full_name'  => 'required|string|max:200',
        'email'      => 'required|email|max:255',
        'phone'      => 'nullable|string|max:30',
        'product'    => 'nullable|string|max:100',
        'message'    => 'nullable|string|max:2000',
        'privacy'    => 'accepted',
    ]);

    // Save to database
    Quote::create([
        'full_name' => $validated['full_name'],
        'email'     => $validated['email'],
        'phone'     => $validated['phone'] ?? null,
        'product'   => $validated['product'] ?? null,
        'message'   => $validated['message'] ?? null,
    ]);

    // TODO: Add email notification here in future phases

    return redirect()->route('home')
        ->with('quote_success', true)
        ->withFragment('quote');

})->name('quote.submit');

// Admin Routes
Route::get('/admin/quotes', function () {
    $quotes = Quote::orderBy('created_at', 'desc')->get();
    return view('admin.quotes', compact('quotes'));
})->name('admin.quotes');
