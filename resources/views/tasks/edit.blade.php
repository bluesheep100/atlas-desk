<x-template.form-page :action="route('tasks.update', compact('task'))" header="Edit task">
    <x-forms.input name="name" :model="$task"/>

    <x-forms.input name="description" :model="$task"/>

    <button type="submit" class="btn btn-primary">Create</button>
</x-template.form-page>
