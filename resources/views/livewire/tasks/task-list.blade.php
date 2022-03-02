<div wire:init='getTasks'>
    <div class="my-3 mx-auto w-1/2 flex">
        <button @class(['mx-1', 'rounded', 'py-1', 'px-3', 'bg-gray-300' => $filterDone != 0, 'bg-gray-500' => $filterDone == 0, 'text-white' => $filterDone == 0]) class="mx-1 rounded py-1 px-3 bg-gray-500 text-white" wire:click="$set('filterDone', 0)">All</button>
        <button @class(['mx-1', 'rounded', 'py-1', 'px-3', 'bg-gray-300' => $filterDone != 2, 'bg-gray-500' => $filterDone == 2, 'text-white' => $filterDone == 2]) class="mx-1 rounded py-1 px-3 bg-gray-300" wire:click="$set('filterDone', 2)">Done</button>
        <button @class(['mx-1', 'rounded', 'py-1', 'px-3', 'bg-gray-300' => $filterDone != 1, 'bg-gray-500' => $filterDone == 1, 'text-white' => $filterDone == 1]) class="mx-1 rounded py-1 px-3 bg-gray-300" wire:click="$set('filterDone', 1)">Undone</button>
        <button class="mx-1 rounded py-1 px-3 bg-gray-300 ml-auto">Options</button>
    </div>
    @foreach($tasks as $task)
        <div class="md:w-1/2 md:mx-auto mx-2 rounded bg-white p-5 my-2">
            @if($task['done_at'])
                <div class="flex space-x-2">
                    <div class="cursor-pointer" wire:click='toggleTask({{ $task['id'] }})'>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z" />
                        </svg>
                    </div>
                    <div class="line-through text-gray-400 cursor-pointer" wire:click='toggleTask({{ $task['id'] }})'>{{ $task['task'] }}</div>
                </div>
            @else
                <div class="flex space-x-2">
                    <div class="cursor-pointer" wire:click='toggleTask({{ $task['id'] }})'>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19H5V5H19Z" />
                        </svg>
                    </div>
                    <div wire:click='toggleTask({{ $task['id'] }})' class="cursor-pointer">
                        {{ $task['task'] }}
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</div>
