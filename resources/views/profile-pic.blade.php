<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Change Password') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-success-message />

                    <x-form action="{{ route('profile.change') }}" has-files>
                        @method('PUT')
                        @csrf

                        <div>
                            <x-input-label for="image" :value="__('Profile Picture')" />
                            <x-input name="image" type="file"
                                class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            <x-error field="image" class="text-red-500" />
                        </div>


                        <div class="flex items-center justify-end m-4">
                            <x-primary-button class="ml-3">
                                {{ __('Upload') }}
                            </x-primary-button>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
</x-app-layout>
