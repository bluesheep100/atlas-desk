<x-template.form-page :action="route('projects.store')" header="New Project">
    <x-forms.input name="name"/>

    <button type="submit" class="btn btn-primary">Create</button>
</x-template.form-page>
