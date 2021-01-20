<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ContactAutoComplete;
use App\Http\Livewire\ShowContact;
use App\Http\Livewire\Contact;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('contact', Contact::class)->name('contact');
    Route::get('auto-complete', ContactAutoComplete::class)->name('auto-complete');
    Route::get('show-contact/{id}', ShowContact::class)->name('show-contact');
});
