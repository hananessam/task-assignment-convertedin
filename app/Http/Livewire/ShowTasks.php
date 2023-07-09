<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTasks extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.show-tasks', [
            'tasks' => Task::latest()->paginate(10),
        ]);
    }
}
