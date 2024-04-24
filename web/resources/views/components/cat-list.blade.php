@props(['list'])

<ul class="border rounded-xl p-3 shadow-xl bg-white mb-10">
    @foreach ($list as $item)
    <li class="px-1 py-3">
        <a
            class="flex gap-4 items-center rounded-xl transition text-blue-700 hover:bg-gray-600 hover:text-blue-200 px-4 py-3"
            href="/categories/{{$item->slug}}">
            @if(@$item->image)
            <img
                class="w-12 h-12"
                src="{{ env('ADMIN_URL') }}/storage/{{ $item->image }}"
                :alt="$item->name">
            @else
            <img
                class="w-12 h-12"
                src="https://fakeimg.pl/40x40"
                :alt="$item->name">
            @endif
            {{ $item->name }}
        </a>
    </li>
    @endforeach
</ul>
