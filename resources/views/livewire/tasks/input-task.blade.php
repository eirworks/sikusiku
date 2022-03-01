<div class="md:w-1/2 md:mx-auto mx-2 rounded bg-white p-5 my-5">
    <div class="mb-3">
        <input type="text" name="tasks" placeholder="Add new tasks" class="w-full rounded border border-gray-300 p-3" wire:model.defer='task'>
        @error('task')<div class="text-red-500 my-1">{{ $message }}</div>@enderror
    </div>
    <div class="my-3 flex justify-center">
        <button type="button" class="rounded bg-orange-600 text-orange-50 py-3 px-6" wire:click='addTask()'>Add Task</button>
    </div>
</div>
