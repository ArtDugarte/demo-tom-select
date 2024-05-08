<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Select extends Component
{
    public $user_id = null;

    public $multi = false;

    public function render()
    {
        $options = User::orderBy('name')->get();

        return view('livewire.select', compact('options'));
    }

    public function DDSelected()
    {
        dd($this->user_id);
    }
}
