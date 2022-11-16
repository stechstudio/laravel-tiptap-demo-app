<?php

declare(strict_types=1);

use App\Http\Livewire\Playground;
use Illuminate\Support\Facades\Route;

Route::redirect(uri: '/', destination: '/playground');

Route::get(uri: '/playground', action: Playground::class);
