<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class InputTask extends Component
{
    // The task text
    public $task = "";

    public function addTask() {
        if (empty($this->task)) {
            $this->addError('task', "Please enter something you'd want to get things done!");
            return 1;
        }

        $task = new Task([
            'task' => $this->task,
        ]);
        $task->user_id = auth()->id();
        $task->save();

        // TODO put this into some reset function
        $this->task = "";

        $this->resetErrorBag();
        $this->emit('taskCreated', $task);
    }


    public function render()
    {
        return view('livewire.tasks.input-task');
    }
}
