<?php

namespace App\Http\Livewire;

use App\Models\Statistic;
use Livewire\Component;

class ShowStatistics extends Component
{
    public function render()
    {
        return view('livewire.show-statistics', [
            'statistics' => Statistic::with(['user'])->orderBy('tasks_count', 'desc')->limit(10)->get(),
        ]);
    }
}
