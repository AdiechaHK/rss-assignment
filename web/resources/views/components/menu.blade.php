<div class="bg-blue-400">

    <div class="container mx-auto py-5">
        <button onclick="show('categories-list')" class="text-white">
            Category
        </button>
        <div id="categories-list" class="hidden absolute bg-gray-200 border border-gray-400 p-1 mt-5 rounded">
            @foreach(App\Models\Category::rootLevel()->get() as $item)
                <x-cat-menu-item
                    :category="$item"
                    :level="1">
                </x-cat-menu-item>
            @endforeach
        </div>
    </div>
</div>

<script>

    const hideEle = ele => {
        console.log('hiding', ele);
        ele.classList.add('hidden');
    }

    const hideAll = level => {
        nodeList = document.querySelectorAll(`[data-level="${level}"]`)
        if (nodeList.length !== 0) {
            nodeList.forEach(e => {
                console.log('here inside foreach');
                hideEle(e)
            })
            hideAll(level+1);
        }
    }

    const show = targetId => {
        event.stopPropagation();
        const target = document.getElementById(targetId);
        if (target !== null) {
            level = Number(target.getAttribute('data-level'));
            hideAll(level);
            target.classList.remove('hidden');
        }
    }

    const hide = targetId => {
        const target = document.getElementById(targetId);
        if (target !== null) {
            hideEle(target);
        }
    }

    const goto = slug => {
        window.location.href = slug
    }

    window.addEventListener('load', function () {
        const buttons = document.querySelectorAll('[data-target]');

        document.body.addEventListener('click', () => {
            buttons.forEach(ele => {
                targetId = ele.getAttribute('data-target');
                hide(targetId);
            })
            hide('categories-list')
        })
    }, false);
</script>
