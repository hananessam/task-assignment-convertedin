<?php

namespace App\Listeners;

use App\Models\Statistic;
use App\Models\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateStatisticsListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Statistic::updateOrCreate([
            'user_id' => $event->task->assigned_to_id
        ],[
            'tasks_count' => Task::where('assigned_to_id', $event->task->assigned_to_id)->count(),
        ]);
    }
}
