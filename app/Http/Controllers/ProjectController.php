<?php

namespace App\Http\Controllers;

use App\Models\Iteration;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('projects.index', ['projects' => Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(): RedirectResponse
    {
        Project::create(request()->validate(Project::rules()));

        return Redirect::route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\View\View
     */
    public function show(Project $project): View
    {
        $iteration = Iteration::find(request('iteration')) ?? Iteration::first();

        return view('projects.show', compact('project', 'iteration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\View\View
     */
    public function edit(Project $project): View
    {
        $availableUsers = User::whereNotIn('id', $project->users->map->id->toArray())->get();

        return view('projects.edit', compact('project', 'availableUsers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Project $project): RedirectResponse
    {
        $project->update(request()->validate(Project::rules()));

        return Redirect::route('projects.show', compact('project'));
    }

    /**
     * Attach the specified User to the Project.
     *
     * @param  \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function attachUser(Project $project): RedirectResponse
    {
        request()->validate(['user_id' => 'required|exists:App\Models\User,id']);
        $project->users()->attach(request('user_id'));

        return Redirect::route('projects.edit', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return Redirect::route('projects.index');
    }
}
