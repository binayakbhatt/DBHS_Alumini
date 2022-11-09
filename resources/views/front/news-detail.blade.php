<x-front-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-14 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="flex justify-center">
                        <div class="block rounded-lg shadow-lg bg-white max-w-full text-center">
                            <div class="py-3 px-6 border-b border-gray-300">
                                <h1 class="text-gray-900 text-xl font-medium my-2">{{ $news_detail->headline }}</h1>

                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">
                                   {{ Carbon\Carbon::parse($news_detail->date)->format('d-m-Y') }}</h5>
                                @if ($news_detail->image)
                                    <img src="{{ asset('images/news/' . $news_detail->image) }}"
                                        alt="{{ $news_detail->slug }}" class="w-full rounded-lg shadow-lg">
                                @endif
                                <p class="text-gray-700 text-base my-4 text-justify">
                                    {{ $news_detail->body }}
                                </p>

                            </div>
                            <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                                {{ $news_detail->reporter }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
