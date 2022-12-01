<x-template.form-page :action="route('users.update', compact('user'))" method="PATCH" header="Update user" :back="route('users.index')">
    <x-forms.input name="name" :model="$user"/>
    <x-forms.input name="email" type="email" :model="$user"/>

    <button type="submit" class="btn btn-primary">Update</button>
</x-template.form-page>
