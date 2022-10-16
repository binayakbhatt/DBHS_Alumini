<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="flex justify-center">
                        <div class="block rounded-lg shadow-lg bg-white max-w-full text-center">
                            <div class="py-3 px-6 border-b border-gray-300">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $event_single->name }}</h5>

                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2"> Event Starts on
                                    {{ \Carbon\Carbon::parse($event_single->start_date)->format('d-m-Y') }}</h5>
                                <h5 class="text-gray-900 text-xl font-medium mb-2"> Event Ends on
                                    {{ \Carbon\Carbon::parse($event_single->end_date)->format('d-m-Y') }}</h5>


                                <p class="text-gray-700 text-base my-4 text-justify">
                                    {{ $event_single->description }}
                                </p>

                            </div>
                            <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                                Event Location:  {{ $event_single->location }}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
