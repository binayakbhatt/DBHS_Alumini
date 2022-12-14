<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
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

                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        value="{{ auth()->user()->name }}" :disabled=true autofocus />
                                </div>
                            </div>


                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        value="{{ auth()->user()->email }}" :disabled=true autofocus />
                                </div>
                            </div>

                            <div class="grid grid-rows-1 gap-6">

                                <div>
                                    <x-input-label for="dob" :value="__('Date of Birth')" />
                                    <x-flat-pickr name="dob"
                                        value="{{ Carbon\Carbon::parse(auth()->user()->dob)->format('d-m-Y') }}"
                                        class=" block my-3 w-auto rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                                </div>
                            </div>
                            


                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="mobile" :value="__('Mobile')" />
                                    <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile"
                                        value="{{ auth()->user()->mobile }}" placeholder="Whatsapp no. is preferred" />
                                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                                </div>
                            </div>

                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="batch" :value="__('Batch*')" />
                                    <x-text-input id="batch" class="block mt-1 w-full" type="text" name="batch"
                                        value="{{ auth()->user()->batch }}" required placeholder="Year of Passing " />
                                    <x-input-error :messages="$errors->get('batch')" class="mt-2" />
                                </div>
                            </div>

                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="occupation" :value="__('Occupation')" />
                                    <x-text-input id="occupation" class="block mt-1 w-full" type="text"
                                        name="occupation" value="{{ auth()->user()->occupation }}"
                                        placeholder="What is your current profession?" />
                                    <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                                </div>
                            </div>
                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="current_residence" :value="__('Current Residence')" />
                                    <x-text-input id="current_residence" class="block mt-1 w-full" type="text"
                                        name="current_residence" value="{{ auth()->user()->current_residence }}"
                                        placeholder="Place of residence" />
                                    <x-input-error :messages="$errors->get('current_residence')" class="mt-2" />
                                </div>
                            </div>

                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="city" :value="__('City*')" />
                                    <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                                        value="{{ auth()->user()->city }}" placeholder="City" />
                                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                </div>
                            </div>
                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="state" :value="__('State')" />
                                    <x-text-input id="state" class="block mt-1 w-full" type="text" name="state"
                                        value="{{ auth()->user()->state }}" placeholder="State" />
                                    <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                </div>
                            </div>

                            <div class="grid grid-rows-1 gap-6">
                                <div>
                                    <x-input-label for="country" :value="__('Country')" />
                                    <x-text-input id="country" class="block mt-1 w-full" type="text" name="country"
                                        value="{{ auth()->user()->country }}" placeholder="Country" />
                                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                </div>
                            </div>

                            <div class="grid grid-rows-1 gap-6">
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

</x-app-layout>
