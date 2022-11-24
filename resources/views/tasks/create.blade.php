<x-template.form-page :action="route('iterations.tasks.store', compact('iteration'))" :header="'New Task for ' . $iteration->name">
    <x-forms.input name="name"/>

    <button type="submit" class="btn btn-primary">Create</button>
</x-template.form-page>
