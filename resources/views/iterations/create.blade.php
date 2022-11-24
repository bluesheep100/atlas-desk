<x-template.form-page :action="route('projects.iterations.store', compact('project'))" header="New Iteration">
    <x-forms.input name="name"/>

    <button type="submit" class="btn btn-primary">Create</button>
</x-template.form-page>
