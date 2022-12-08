<x-template.form-page :back="route('projects.show', ['project' => $iteration->project])" :action="route('iterations.tasks.store', compact('iteration'))" :header="'New Task for ' . $iteration->name">
    <x-forms.input name="name"/>
    <x-forms.input name="description"/>

    <button type="submit" class="btn btn-primary">Create</button>
</x-template.form-page>
