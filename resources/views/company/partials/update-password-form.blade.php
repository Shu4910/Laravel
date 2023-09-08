<!-- resources/views/company/partials/update-password-form.blade.php -->

<form method="POST" action="{{ route('company.password.update') }}">
    @csrf
    @method('PATCH')

    <div>
        <x-label for="current_password" :value="__('Current Password')" />
        <x-input id="current_password" type="password" name="current_password" required />
        <x-error for="current_password" />
    </div>

    <div class="mt-4">
        <x-label for="password" :value="__('New Password')" />
        <x-input id="password" type="password" name="password" required />
        <x-error for="password" />
    </div>

    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm New Password')" />
        <x-input id="password_confirmation" type="password" name="password_confirmation" required />
    </div>

    <div class="mt-4">
        <x-button>
            {{ __('Update Password') }}
        </x-button>
    </div>
</form>
