<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-success-message />
                    <div class="flex items-center justify-end">
                        <x-button href="{{ route('news.create') }}"> {{ __('Add News') }} </x-button>
                    </div>
                    <x-table.table :headers="['Date', 'Headline', 'Body', 'Reporter', 'View', 'Edit', 'Delete']">
                        @foreach ($news as $item)
                            <tr class="bg-blue-200 border-b transition duration-300 ease-in-out hover:bg-blue-100">
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $item->date }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $item->headline }} </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $item->body }} </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $item->reporter }} </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <a href="{{ route('news.show', $item->id) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">View
                                    </a>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <a href="{{ route('news.edit', $item->id) }}"
                                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded shadow-lg">Edit
                                    </a>
                                <td class="px-4 py-4 whitespace-wrap">
                                    <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="px-3 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                                            Delete </button>
                                    </form>
                                </td>



                            </tr>
                        @endforeach
                    </x-table.table>

                </div>
            </div>
        </div>
</x-app-layout>
