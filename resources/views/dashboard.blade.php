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
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-4">

                        <div class="flex justify-center">
                            <div class="block  rounded-lg shadow-lg bg-gradient-to-r from-blue-500 to-blue-300 max-w-sm">
                                <h5
                                    class="flex items-center justify-center text-white text-xl leading-tight font-medium mb-2 bg-blue-900 p-3">
                                    Total News</h5>
                                <p class="flex items-center justify-center text-gray-900 text-5xl p-3">
                                    {{ $news }}

                            </div>
                        </div>

                        <div class="flex justify-center">
                            <div
                                class="block  rounded-lg shadow-lg bg-gradient-to-r from-blue-500 to-blue-300 max-w-sm">
                                <h5
                                    class="flex items-center justify-center text-white text-xl leading-tight font-medium mb-2 bg-blue-900 p-3">
                                    Total Events</h5>
                                <p class="flex items-center justify-center text-gray-900 text-5xl p-3">
                                    {{ $news }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
