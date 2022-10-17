<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-12 py-12 bg-white border-b border-gray-200">


                    <x-form action="{{ route('events.update', $event_single->id) }}">
                        @csrf
                        @method('PUT')
                        <x-input-label for="name" :value="__('Name*')" />
                        <x-input name="name" value="{{ $event_single->name }}" disabled="true"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="name" class="text-red-500" />



                        <x-input-label for="start_date" :value="__('Start Date & Time*')" />
                        <x-flat-pickr name="start_date" value="{{ $event_single->start_date }}"
                            class=" block my-3 w-auto rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="start_date" class="text-red-500" />

                        <x-input-label for="end_date" :value="__('End Date & Time*')" />
                        <x-flat-pickr name="end_date" value="{{ $event_single->end_date }}"
                            class=" block my-3 w-auto rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="end_date" class="text-red-500" />


                        <x-input-label for="location" :value="__('Location*')" />
                        <x-input name="location" value="{{ $event_single->location }}"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="location" class="text-red-500" />


                        <x-input-label for="description" :value="__('Event Description*')" />
                        <x-textarea name="description" row="10"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-56">
                            {{ $event_single->description }}</x-textarea>
                        <x-error field="description" class="text-red-500" />

                        <div class="flex items-center justify-end">
                            <x-button class="mt-4 ">
                                {{ __('Update') }}
                            </x-button>
                        </div>

                    </x-form>

                </div>
            </div>
        </div>
</x-app-layout>
