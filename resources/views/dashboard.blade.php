<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('user.test') }}" method="get" class="mb-3">
                <button class="btn btn-primary btn-lg login-button" type="submit">基本情報修正</button>
                </div>
            </form>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('user.login') }}" method="get" class="mb-3">
                <button class="btn btn-primary btn-lg login-button" type="submit">エリア条件設定</button>
                </div>
            </form>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('user.login') }}" method="get" class="mb-3">
                <button class="btn btn-primary btn-lg login-button" type="submit">こだわり条件</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>




</x-app-layout>
