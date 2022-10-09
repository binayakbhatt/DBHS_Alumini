<x-front-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">




                    <div class="flex justify-center">
                        <div class="block rounded-lg shadow-lg bg-white max-w-full text-center">
                            <div class="py-3 px-6 border-b border-gray-300">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $news_detail->headline }}</h5>

                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">
                                    {{ \Carbon\Carbon::parse($news_detail->date)->diffForHumans() }}</h5>
                                <p class="text-gray-700 text-base mb-4 text-justify">
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