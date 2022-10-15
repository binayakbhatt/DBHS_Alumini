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
                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $news_single->headline }}</h5>

                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">
                                    {{ \Carbon\Carbon::parse($news_single->date)->diffForHumans() }}</h5>
                                @if ($news_single->image)
                                    <img src="{{ asset('images/news/' . $news_single->image) }}"
                                        alt="{{ $news_single->slug }}" class="w-full rounded-lg shadow-lg">
                                @endif


                                <p class="text-gray-700 text-base my-4 text-justify">
                                    {{ $news_single->body }}
                                </p>

                            </div>
                            <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                                This news is reported by {{ $news_single->reporter }}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
