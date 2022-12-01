<x-template.form-page :action="route('tasks.update', compact('task'))" method="PATCH" header="Edit task" :back="route('projects.show', compact('project', 'iteration'))">
    <x-forms.input name="name" :model="$task"/>

    <x-forms.input name="description" :model="$task"/>

    <button type="submit" class="btn btn-primary">Update</button>
</x-template.form-page>
