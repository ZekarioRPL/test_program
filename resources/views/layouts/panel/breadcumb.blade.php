<div class="mb-8">
    <nav class="flex my-5" aria-label="Breadcrumb">
        <ol class="breadcumb">
            <li>
                <li data-feather="home" width="18px"></li>
            </li>
            @foreach ($items as $key => $item)
                <li>
                    <div class="flex items-center gap-2">
                        <a href="{{ $item['link'] ?? '#' }}"
                            class="inline-flex items-center dark:text-gray-300 dark:hover:text-white">{{ $item['label'] }}</a>
                        @if ($key + 1 < count($items))
                            <i data-feather="chevron-right" class="text-gray-500 dark:text-white" width="18px"></i>
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>
    </nav>

    <h1 class="breadcumb-title">
        {{ $items[$key]['label'] }}
    </h1>
</div>
