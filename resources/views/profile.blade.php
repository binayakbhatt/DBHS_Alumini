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

                    <x-success-message />

                    <x-form action="{{ route('profile.update') }}" has-files>
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
                                <div>
                                    <x-input-label for="dob" :value="__('Date of Birth')" />
                                    <x-flat-pickr name="date" value="{{ auth()->user()->dob }}"
                                        class=" block my-3 w-auto rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                                </div>
                                <div>
                                    @if (auth()->user()->image)
                                        <img class="inline object-cover w-16 h-16 mr-2 rounded-full"
                                            src="{{ asset('images/profile/' . auth()->user()->image) }}"
                                            alt="Profile image" />
                                    @else
                                        <svg class="inline object-cover w-16 h-16 mr-2 rounded-full"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    @endif
                                </div>

                                <div>
                                    <x-input-label for="image" :value="__('Profile Picture')" />
                                    <x-input name="image" type="file"
                                        class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                                    <x-error field="image" class="text-red-500" />
                                </div>

                            </div>
                            {{-- <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-input-label for="new_password" :value="__('New password')" />
                                    <x-text-input id="new_password" class="block mt-1 w-full" type="password"
                                        name="password" autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="password_confirmation" :value="__('Confirm password')" />
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" autocomplete="confirm-password" />
                                    <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                                </div>
                            </div> --}}
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-input-label for="mobile" :value="__('Mobile')" />
                                    <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile"
                                        value="{{ auth()->user()->mobile }}" placeholder="Whatsapp no. is preferred" />
                                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="batch" :value="__('Batch*')" />
                                    <x-text-input id="batch" class="block mt-1 w-full" type="text" name="batch"
                                        value="{{ auth()->user()->batch }}" required placeholder="Year of Passing " />
                                    <x-input-error :messages="$errors->get('batch')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="occupation" :value="__('Occupation')" />
                                    <x-text-input id="occupation" class="block mt-1 w-full" type="text"
                                        name="occupation" value="{{ auth()->user()->occupation }}"
                                        placeholder="What is your current profession?" />
                                    <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-input-label for="current_residence" :value="__('Current Residence')" />
                                    <x-text-input id="current_residence" class="block mt-1 w-full" type="text"
                                        name="current_residence" value="{{ auth()->user()->current_residence }}"
                                        placeholder="Place of residence" />
                                    <x-input-error :messages="$errors->get('current_residence')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="city" :value="__('City*')" />
                                    <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                                        value="{{ auth()->user()->city }}" placeholder="City" />
                                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="state" :value="__('State')" />
                                    <x-text-input id="state" class="block mt-1 w-full" type="text" name="state"
                                        value="{{ auth()->user()->state }}" placeholder="State" />
                                    <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="country" :value="__('Country')" />
                                    <x-text-input id="country" class="block mt-1 w-full" type="text" name="country"
                                        value="{{ auth()->user()->country }}" placeholder="Country" />
                                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="pin_code" :value="__('Pin code')" />
                                    <x-text-input id="pin_code" class="block mt-1 w-full" type="text"
                                        name="pin_code" value="{{ auth()->user()->pin_code }}"
                                        placeholder="Pin code" />
                                    <x-input-error :messages="$errors->get('pin_code')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <x-input-label for="aboutme" :value="__('About Me')" class="mt-4" />
                                <x-textarea name="aboutme" row="10"
                                    class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-56"
                                    placeholder="Write something about Yourself">
                                    {{ auth()->user()->aboutme }} </x-textarea>
                                <x-input-error :messages="$errors->get('aboutme')" class="mt-2" />

                            </div>

                        </div>
                </div>
                <div class="flex items-center justify-end m-4">
                    <x-primary-button class="ml-3">
                        {{ __('Update') }}
                    </x-primary-button>
                </div>
                </x-form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
