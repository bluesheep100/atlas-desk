<x-template.form-page :action="route('users.store')" header="Create User" :back="route('users.index')">
    <x-forms.input name="name"/>
    <x-forms.input name="email" type="email"/>

    <x-forms.input name="password" type="password"/>
    <x-forms.input name="password_confirmation" type="password"/>

    <button type="submit" class="btn btn-primary">Create</button>
</x-template.form-page>
