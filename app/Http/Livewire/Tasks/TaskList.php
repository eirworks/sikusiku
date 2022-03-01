<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks = [];

    protected $listeners = [
        'taskCreated' => 'onTaskCreated',
    ];

    public function getTasks()
    {
        $tasks = Task::where('user_id', auth()->id())
            ->orderBy('done_at', 'asc')
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();

        $this->tasks = $tasks;
    }

    public function onTaskCreated()
    {
        $this->getTasks();
    }

    public function toggleTask($id)
    {
        $task = Task::find($id);
        if (!$task) {
            $this->addError('task-list', "Task not found!");
            return 1;
        }

        $task->done_at = $task->done_at ? null : now();
        $task->save();

        $this->getTasks();
        $this->emit('taskUpdated', $task->id);
    }

    public function render()
    {
        return view('livewire.tasks.task-list');
    }
}
