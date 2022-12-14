<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Playground extends Component
{
    public string $message = '';

    public function render(): View
    {
        return view(view: 'livewire.playground');
    }
}
