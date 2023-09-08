<!-- resources/views/company/partials/update-company-information-form.blade.php -->

<form method="POST" action="{{ route('company.profile.update') }}">
    @csrf
    @method('PATCH')

    <div>
        <x-label for="name" :value="__('Company Name')" />
        <x-input id="name" type="text" name="name" :value="old('name', $company->name)" required />
        <x-error for="name" />
    </div>

    <div class="mt-4">
        <x-label for="email" :value="__('Company Email')" />
        <x-input id="email" type="email" name="email" :value="old('email', $company->email)" required />
        <x-error for="email" />
    </div>

    <div class="mt-4">
        <x-button>
            {{ __('Update Information') }}
        </x-button>
    </div>
</form>
