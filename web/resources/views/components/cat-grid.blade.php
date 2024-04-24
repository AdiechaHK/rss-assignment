@props(['list'])

<ul class="flex mb-10 gap-4">
    @foreach ($list as $item)
    <li class="px-1 py-3 border rounded-xl shadow-xl bg-white hover:scale-125 transition">
        <a
            class="items-center rounded-xl transition text-blue-700 px-4 py-3"
            href="/categories/{{$item->slug}}">
            @if(@$item->image)
            <img
                class="w-48 h-48"
                src="{{ env('ADMIN_URL') }}/storage/{{ $item->image }}"
                :alt="$item->name">
            @else
            <img
                class="w-48 h-48"
                src="https://fakeimg.pl/100x100"
                :alt="$item->name">
            @endif
            <div class="text-center text-lg">
                    {{ $item->name }}
            </div>
        </a>
        <p>{{ $item->description }}</p>
    </li>
    @endforeach
</ul>
