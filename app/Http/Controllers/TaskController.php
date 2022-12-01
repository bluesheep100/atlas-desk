<?php

namespace App\Http\Controllers;

use App\Models\Iteration;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Models\Iteration $iteration
     * @return \Illuminate\View\View
     */
    public function create(Iteration $iteration): View
    {
        return view('tasks.create', compact('iteration'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Iteration $iteration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Iteration $iteration): RedirectResponse
    {
        $iteration->tasks()->create(request()->validate(Task::rules()));

        return Redirect::route('iterations.show', compact('iteration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\View\View
     */
    public function edit(Task $task): View
    {
        $iteration = $task->iteration;
        $project = $iteration->project;

        return view('tasks.edit', compact('task', 'iteration', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Task $task): RedirectResponse
    {
        $task->update(request()->validate(Task::rules()));

        return Redirect::route('tasks.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return Redirect::route('iterations.show', ['iteration' => $task->iteration]);
    }
}
