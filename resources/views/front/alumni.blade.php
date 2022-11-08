<x-front-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex items-center justify-center m-5 p-5 ">
                        <h1 class="text-3xl font-bold text-orange-600">Alumni of Don Bosco School, Haflong </h1>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-6">
                        @foreach ($alumni as $alumnus)
                            <div class="md:flex bg-gray-100 rounded-xl p-4 md:p-4 shadow-lg border border-blue-200">
                                @if ($alumnus->image)
                                    <img class="w-32 h-32 rounded-full p-4 mx-auto"
                                        src="{{ asset('images/profile/' . $alumnus->image) }}">
                                @else
                                    <img class="w-32 h-32 rounded-full p-4 mx-auto"
                                        src="{{ asset('images/misc/blank-profile.png') }}">
                                @endif

                                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">

                                    <p class="text-lg font-semibold">
                                        {{ $alumnus->name }}
                                    </p>

                                    <div class="font-medium">
                                        <div class="text-purple-700">
                                            {{ $alumnus->batch }} Batch
                                        </div>
                                        <div class="mt-4">
                                            <x-button href="{{ route('front.alumni-detail', $alumnus->id) }}">
                                                Visit Profile
                                            </x-button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="flex items-center justify-end my-4">
                        {{ $alumni->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>




</x-front-layout>
