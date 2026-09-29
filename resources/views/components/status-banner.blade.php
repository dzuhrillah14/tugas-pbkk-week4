@props([
    'type' => 'info',
    'icon' => 'bi-info-circle-fill',
    'title' => null,
    'dismissible' => false,
])


<div
    {{
        $attributes->merge([
            'class' =>
                "alert alert-{$type}
                 border-{$type}
                 border-opacity-25
                 p-3
                 mb-3
                 rounded-3
                 shadow-sm
                 " .
                ($dismissible
                    ? 'alert-dismissible fade show'
                    : '')
        ])
    }}

    role="alert"
>

    <div class="d-flex align-items-start gap-2">


        {{-- Icon --}}

        <i
            class="
                bi
                {{ $icon }}
                fs-5
                text-{{ $type }}
                flex-shrink-0
                mt-1
            "
        ></i>


        {{-- Content --}}

        <div class="flex-grow-1">

            @if($title)

                <h6
                    class="
                        fw-bold
                        mb-1
                        text-{{ $type }}-emphasis
                    "
                >
                    {{ $title }}
                </h6>

            @endif


            <div
                class="small"
                style="line-height: 1.5;"
            >

                {{ $slot }}

            </div>

        </div>


        {{-- Dismiss Button --}}

        @if($dismissible)

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>

        @endif

    </div>

</div>