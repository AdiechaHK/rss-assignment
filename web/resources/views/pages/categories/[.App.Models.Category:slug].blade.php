<x-layout>
<div class="container mx-auto">
    <h1 class="text-2xl my-5">{{ $category->name }}</h1>

    @if($category->description !== null && $category->description !== "")
    <p class="mb-10 text-gray-600">
        {{ $category->description }}
    </p>
    @endif

    @if($category->children()->exists())
        <x-cat-grid :list="$category->children">
        </x-cat-grid>
    @else
        <p class="mb-10 p-5 shadow-xl rounded-xl bg-white">No children found</p>
    @endif

    {{-- Back --}}
    @if ($category->parent()->exists())
        <a 
            class="border border-gray-600 hover:border-white hover:bg-white hover:shadow-xl transition rounded-xl text-blue-700 px-4 py-3"
            href="/categories/{{$category->parent->slug}}">
            Back
        </a>
    @else
        <a
            class="border border-gray-600 hover:border-white hover:bg-white hover:shadow-xl transition rounded-xl text-blue-700 px-4 py-3"
            href="/categories">
            Back
        </a>
    @endif
</div>
</x-layout>
