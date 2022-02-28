@extends('layouts.app')

@section('title')
    Tasks
@endsection

@section('content')
<div class="md:w-1/2 md:mx-auto mx-2 rounded bg-white p-5 my-5">
    <div class="text-lg text-center mb-5">My Tasks</div>

    <div class="mb-3">
        <input type="text" name="tasks" placeholder="Add new tasks" class="w-full rounded border border-gray-300 p-3">
    </div>
    <div class="my-3 flex justify-center">
        <button type="submit" class="rounded bg-orange-600 text-orange-50 py-3 px-6">Add Task</button>
    </div>
</div>

    @foreach($tasks as $task)
        <div class="md:w-1/2 md:mx-auto mx-2 rounded bg-white p-5 my-2 cursor-pointer">
            {{ $task->task }}
        </div>
    @endforeach
@endsection

