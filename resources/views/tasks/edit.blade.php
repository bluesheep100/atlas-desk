<x-template.form-page :action="route('tasks.update', compact('task'))" method="PATCH" header="Edit task" :back="route('projects.show', compact('project', 'iteration'))">
    <x-forms.input name="name" :model="$task"/>

    <x-forms.input name="description" :model="$task"/>

    <x-forms.radio name="status" :model="$task" label="Open" value="open"/>
    <x-forms.radio name="status" :model="$task" label="In Progress" value="progress"/>
    <x-forms.radio name="status" :model="$task" label="On Hold" value="hold"/>
    <x-forms.radio name="status" :model="$task" label="Closed" value="closed"/>

    <button type="submit" class="btn btn-primary">Update</button>
</x-template.form-page>
