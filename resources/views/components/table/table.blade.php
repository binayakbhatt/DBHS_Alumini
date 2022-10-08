<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-blue-900 border-b">
                        <tr>
                            @foreach ($headers as $header)
                                <th scope="col" class="text-xl font-bold text-white px-6 py-4 text-justify">
                                    {{ $header }}
                                </th>
                            @endforeach
                    </thead>
                    <tbody>

                        {{ $slot }}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
