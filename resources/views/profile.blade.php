<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        value="{{ auth()->user()->name }}" :disabled=true autofocus />
                                </div>
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        value="{{ auth()->user()->email }}" :disabled=true autofocus />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-input-label for="new_password" :value="__('New password')" />
                                    <x-text-input id="new_password" class="block mt-1 w-full" type="password"
                                        name="password" autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="confirm_password" :value="__('Confirm password')" />
                                    <x-text-input id="confirm_password" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" autocomplete="confirm-password" />
                                    <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
