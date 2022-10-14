<x-front-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gradient-to-r from-violet-500 to-fuchsia-500 border-b border-gray-200">


                    <div class="flex items-center justify-center m-5 p-5 ">
                        <div class="text-5xl font-bold">Don Bosco School Alumni Association,
                            Haflong </div>
                    </div>


                    <div class='flex items-center justify-center pt-8'>
                        <div class="rounded-xl border p-5 shadow-md  bg-white">
                            <div class="flex w-full items-center justify-between border-b pb-3">
                                <div class="flex items-center space-x-3">
                                    {{-- <div class="h-8 w-8 rounded-full bg-orange-400">
                                    </div> --}}
                                    <div class="text-lg font-bold text-slate-700">Latest News </div>
                                </div>
                                <div class="flex items-center space-x-8">

                                    <div class="text-xs text-neutral-500">
                                        {{ \Carbon\Carbon::parse($latest_news->date)->diffForHumans() }}</div>
                                </div>
                            </div>

                            <div class="mt-4 mb-6">
                                <div class="mb-3 text-xl font-bold">{{ $latest_news->headline }}</div>
                                <div class="text-sm text-neutral-600 text-justify">
                                    {{ Str::substr($latest_news->body, 0, 150) }}
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-end text-slate-500">
                                    <div class="flex space-x-4 md:space-x-8">
                                        <div class="flex items-center justify-end">
                                            <x-button href="{{ route('front.news') }}">Go
                                                to News</x-button>
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
