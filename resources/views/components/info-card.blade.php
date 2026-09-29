@props([
    'title' => '',
    'icon' => 'bi-info-circle',
    'badge' => null,
    'variant' => 'primary',
])


<div
    {{ $attributes->merge([
        'class' =>
            'card card-custom p-3 h-100 shadow-sm border-0'
    ]) }}
>

    <div class="d-flex align-items-center gap-3">


        {{-- Icon --}}

        <div
            class="p-3
                   bg-{{ $variant }}
                   bg-opacity-10
                   text-{{ $variant }}
                   rounded-3
                   flex-shrink-0"
        >

            <i class="bi {{ $icon }} fs-4"></i>

        </div>


        {{-- Content --}}

        <div class="flex-grow-1">

            @if($title)

                <small
                    class="text-muted d-block mb-1"
                    style="font-size: 11px;"
                >
                    {{ $title }}
                </small>

            @endif


            <div
                class="d-flex
                       align-items-center
                       justify-content-between
                       gap-2"
            >

                <span class="fw-bold text-dark fs-6">

                    {{ $slot }}

                </span>


                @if($badge)

                    <span
                        class="
                            badge
                            bg-{{ $variant }}
                            bg-opacity-10
                            text-{{ $variant }}
                            rounded-pill
                        "
                        style="font-size: 10px;"
                    >

                        {{ $badge }}

                    </span>

                @endif

            </div>

        </div>

    </div>

</div>