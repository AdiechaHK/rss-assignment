@props(['category', 'level'])
<div class="{{ $category->slug }}">
    <div onclick="goto('/categories/{{$category->slug}}')" data-target="children-{{$category->id}}" class="w-48 p-2 rounded flex justify-between hover:bg-gray-300 hover:text-gray-700 transisiton">
        <div>{{$category->name}}</div>
        @if($category->children()->count() > 0)
        <div onclick="show('children-{{$category->id}}')" class="transition hover:bg-gray-700 hover:text-white rounded-r p-2 -m-2">»</div>
        @endif
    </div>
    @if($category->children()->exists())
    <div
        id="children-{{$category->id}}"
        data-level="{{$level}}"
        class="hidden rounded absolute left-48 ml-2 -mt-10 bg-gray-200 border border-gray-400 p-1">
        @foreach($category->children as $item)
            <x-cat-menu-item
                :category="$item"
                :level="$level+1">
            </x-cat-menu-item>
        @endforeach
    </div>
    @endif
</div>
