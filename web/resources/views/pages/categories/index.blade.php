<x-layout>
<div class="container mx-auto">
    
    <h1 class="text-2xl my-5">List of categories</h1>
    
    @if(App\Models\Category::rootLevel()->exists())
        <x-cat-grid :list="App\Models\Category::rootLevel()->get()">
        </x-cat-grid>
    @else
        <p class="mb-10 py-10 text-center rounded-xl bg-white shadow-xl">
            -- No Categories present --
        </p>
    @endif
    
</div>
</x-layout>
