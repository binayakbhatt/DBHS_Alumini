<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-36 py-12 bg-white border-b border-gray-200">

                    {{-- <form method="POST" action="{{ route('news.store') }}">
                        @csrf

                        <!-- Date -->
                        <div>
                            <x-input-label for="date" :value="__('Date')" />

                            <x-text-input id="date" class=" block mt-2 w-auto" type="date" name="date"
                                :value="old('date')" required autofocus />

                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>

                        <!-- Headline -->
                        <div class="mt-4">
                            <x-input-label for="headline" :value="__('Headline')" />

                            <x-text-input id="headline" class="block mt-1 w-full" type="text" name="headline"
                                :value="old('headline')" required />

                            <x-input-error :messages="$errors->get('headline')" class="mt-2" />
                        </div>

                        <!-- Headline -->
                        <div class="mt-4">

                            <x-input-label for="body" :value="__('News Details')" />


                            <x-text-input id="body" class="w-full h-56 resize-y text-justify m-0 p-1"
                                type="text" name="body" :value="old('body')" required />

                            <x-input-error :messages="$errors->get('body')" class="mt-2" />

                        </div>
                        <!-- Reporter -->
                        <div class="mt-4">
                            <x-input-label for="reporter" :value="__('News Reported By')" />

                            <x-text-input id="reporter" class="block mt-1 w-full " type="text" name="reporter"
                                :value="old('reporter')" />

                            <x-input-error :messages="$errors->get('reporter')" class="mt-2" />
                        </div>




                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ml-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form> --}}
                    <div class="flex items-center justify-center">
                        <x-label for="Note: All fields are mandatory" class="text-xl" />
                    </div>

                    <x-form action="{{ route('news.store') }}" has-files>
                        @csrf
                        <x-label for="date" class=" block mt-2 w-auto font-medium text-sm text-blue-500" />
                        <x-flat-pickr name="date"
                            class=" block mt-2 w-auto rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="date" class="text-red-500" />

                        <x-label for="headline" class=" block mt-2 w-auto font-medium text-sm text-blue-500" />
                        <x-input name="headline"
                            class=" block mt-2 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="headline" class="text-red-500" />

                        <x-label for="body" class=" block mt-2 w-auto font-medium text-sm text-blue-500" />
                        <x-textarea name="body"
                            class=" block mt-2 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="body" class="text-red-500">
                            </x-textarea>

                            <x-label for="reporter" class=" block mt-2 w-auto font-medium text-sm text-blue-500" />
                            <x-input name="reporter"
                                class=" block mt-2 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            <x-error field="body" class="text-red-500" />
                            <div class="flex items-center justify-end">
                                <x-button class="mt-4 ">
                                    Save
                                </x-button>
                            </div>

                    </x-form>

                </div>
            </div>
        </div>
</x-app-layout>
