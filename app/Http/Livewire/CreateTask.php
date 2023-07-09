<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class CreateTask extends Component
{
    public $assigned_by = 0;
    public $assigned_to = 0;
    public $title;
    public $description;

    protected $rules = [
        'assigned_by' => 'required|exists:admins,id',
        'assigned_to' => 'required|exists:users,id',
        'title' => 'required|min:3|max:255',
        'description' => 'required|min:3|max:500',
    ];

    public function create()
    {
        $this->validate();
        $task = Task::create([
            'assigned_by_id' => $this->assigned_by,
            'assigned_to_id' => $this->assigned_to,
            'title' => $this->title,
            'description' => $this->description,
        ]);
        return redirect()->route('show-tasks');
    }

    public function render()
    {
        return view('livewire.create-task', [
            'admins' => Admin::get(),
            'users' => User::get(),
        ]);
    }
}
