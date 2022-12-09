<?php

namespace App\Http\Controllers;

use App\Models\Iteration;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IterationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\View\View
     */
    public function create(Project $project): View
    {
        return view('iterations.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Project $project): RedirectResponse
    {
         $iteration = $project->iterations()->create(request()->validate(Iteration::rules()));
         $iteration->update(['count' => $project->iterations()->count() + 1]);

        return Redirect::route('projects.show', compact('project'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iteration  $iteration
     * @return \Illuminate\View\View
     */
    public function show(Iteration $iteration): View
    {
        return view('iterations.show', compact('iteration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iteration  $iteration
     * @return \Illuminate\Http\Response
     */
    public function edit(Iteration $iteration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iteration  $iteration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iteration $iteration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iteration  $iteration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iteration $iteration)
    {
        //
    }
}
