<x-front-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container mx-auto my-5 p-5">
                        <div class="md:flex no-wrap md:-mx-2 ">
                            <!-- Left Side -->
                            <div class="w-full md:w-3/12 md:mx-2">
                                <!-- Profile Card -->
                                <div class="bg-white p-3 border-t-4 border-blue-400">

                                    @if ($alumni_detail->image)
                                        <div class="image overflow-hidden">
                                            <img class="h-auto w-full mx-auto"
                                                src="{{ asset('images/profile/' . $alumni_detail->image) }}">
                                        </div>
                                    @else
                                        <svg class=" w-32 h-32 rounded-full p-4 mx-auto flex items-center justify-center"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    @endif


                                    <h1
                                        class="text-gray-900 font-bold text-xl leading-8 my-1 flex items-center justify-center">
                                        {{ $alumni_detail->name }}
                                    </h1>
                                    <h3
                                        class="text-gray-600 font-lg text-semibold leading-6 flex items-center justify-center">
                                        {{ $alumni_detail->batch }}
                                        Batch</h3>

                                </div>
                                <!-- End of profile card -->
                                <div class="my-4"></div>

                            </div>
                            <!-- Right Side -->
                            <div class="w-full md:w-9/12 mx-2 h-64 bg-white p-3 border-t-4 border-blue-400 ">
                                <!-- Profile tab -->
                                <!-- Alumnus Section -->
                                <div class="bg-white p-3 shadow-sm rounded-sm">
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                        <span clas="text-green-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">Alumnus Information</span>
                                    </div>
                                    <div class="text-gray-700">
                                        <div class="grid md:grid-cols-2 text-sm">
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Name</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->name }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Email</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->email }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->mobile }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Birthday</div>
                                                <div class="px-4 py-2">
                                                    {{ Carbon\Carbon::parse($alumni_detail->dob)->format('d-m-Y') }}
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Occupation</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->occupation }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Current Residence</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->current_residence }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">City</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->city }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">State</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->state }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Country</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->country }}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Pin code</div>
                                                <div class="px-4 py-2">{{ $alumni_detail->pin_code }}</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="my-4"></div>

                                <!-- About me -->
                                <div class="bg-white p-3 shadow-sm rounded-sm">

                                    <div class="grid grid-cols-1">
                                        <div>
                                            <div
                                                class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">

                                                <span class="tracking-wide">About the Alumnus</span>
                                            </div>

                                            <p class="text-gray-700 text-base my-4 text-justify">
                                                {{ $alumni_detail->aboutme }}
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-front-layout>
