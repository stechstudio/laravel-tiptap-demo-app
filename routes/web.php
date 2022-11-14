<?php

declare(strict_types=1);

use App\Http\Livewire\TextArea;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: function () {
    return view(view: 'welcome');
});

Route::get(uri: '/playground', action: TextArea::class);
