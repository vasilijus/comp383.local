<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! <b>{{ $user->name }}</b>,

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        <p>Today is: {{ date('Y/m/d')}}</p>
                        <p>{{ date('h:i:sa')}}</p>
                    </div>

                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    Your location is <b>{{ $user->location }}</b>,
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
