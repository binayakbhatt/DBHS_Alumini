@isset($href)
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg']) }}>{{ $slot }}</a>
@else
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg']) }}>
        {{ $slot }}
    </button>
    @endif
