<!-- resources/views/company/partials/delete-company-form.blade.php -->

<form method="POST" action="{{ route('company.delete') }}">
    @csrf
    @method('DELETE')

    <div class="text-red-500">
        {{ __('Warning: This will permanently delete your company account.') }}
    </div>

    <div class="mt-4">
        <x-button class="bg-red-600 hover:bg-red-700">
            {{ __('Delete My Company Account') }}
        </x-button>
    </div>
</form>
