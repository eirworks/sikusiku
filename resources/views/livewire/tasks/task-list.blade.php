<div wire:init='getTasks'>
    @foreach($tasks as $task)
        <div class="md:w-1/2 md:mx-auto mx-2 rounded bg-white p-5 my-2 cursor-pointer" wire:click='toggleTask({{ $task['id'] }})'>
            @if($task['done_at'])
                <div class="line-through text-gray-400">{{ $task['task'] }}</div>
            @else
                {{ $task['task'] }}
            @endif
        </div>
    @endforeach
</div>
