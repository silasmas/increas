<section class="banner__bread ralt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="breadcrumnd__content text-center">
                    <h2 class="title capi mb-20 wow flipInX">
                        {{ $title ?? '' }}
                    </h2>

                    @php($items = $items ?? [])
                    <ul class="breaded flex-wrap d-flex justify-content-center align-items-center">
                        @foreach ($items as $item)
                            @php($isActive = $item['active'] ?? false)
                            @if (!empty($item['url']) && !$isActive)
                                <li>
                                    <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                                </li>
                                @if (!$loop->last)
                                    <li>
                                        <i class="material-symbols-outlined">chevron_right</i>
                                    </li>
                                @endif
                            @else
                                <li class="base">{{ $item['label'] ?? '' }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
