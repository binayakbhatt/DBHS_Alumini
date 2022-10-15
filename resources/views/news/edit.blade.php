<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-12 py-12 bg-white border-b border-gray-200">




                    <x-form action="{{ route('news.update', $news_single->id) }}" has-files>
                        @csrf
                        @method('PUT')
                        <x-input-label for="date" :value="__('Date & Time')" />
                        <x-flat-pickr name="date" value="{{ $news_single->date }}"
                            class=" block my-3 w-auto rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="date" class="text-red-500" />

                        <x-input-label for="headline" :value="__('Headline')" />
                        <x-input name="headline" value="{{ $news_single->headline }}"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="headline" class="text-red-500" />

                        <x-input-label for="body" :value="__('Body')" />
                        <x-textarea name="body" row="10"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-56">
                            {{ $news_single->body }}</x-textarea>
                        <x-error field="body" class="text-red-500" />
                        <x-input-label for="image" :value="__('Image')" />
                        <x-input name="image" type="file"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="image" class="text-red-500" />
                        <x-input-label for="reporter" :value="__('Reporter')" />
                        <x-input name="reporter" value="{{ $news_single->reporter }}"
                            class=" block my-3 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        <x-error field="reporter" class="text-red-500" />
                        <div class="flex items-center justify-end">
                            <x-button class="mt-4 ">
                                Update
                            </x-button>
                        </div>

                    </x-form>

                </div>
            </div>
        </div>
</x-app-layout>
