@extends('layouts.app')

@section('title')
    Tasks
@endsection

@section('content')
    <div class="text-lg text-center my-3 font-bold">My Tasks</div>

    @livewire('tasks.input-task')
    @livewire('tasks.task-list')


@endsection

