@extends('layouts.app')

@section('title', 'Ide-Riset Agentic AI')

@section('content')


{{-- =========================================================
     HEADER
========================================================= --}}

<div class="card card-custom p-4 mb-3">

    <div class="d-flex align-items-center gap-3">

        <div
            class="
                p-3
                bg-primary
                bg-opacity-10
                text-primary
                rounded-3
            "
        >

            <i class="bi bi-robot fs-2"></i>

        </div>


        <div>

            <h4 class="fw-bold mb-1">

                {{ $activeData['judul'] }}

            </h4>


            <span
                class="
                    badge
                    bg-primary
                    bg-opacity-10
                    text-primary
                    px-3
                    py-1
                    rounded-pill
                "
            >

                {{ $activeData['badge'] }}

            </span>

        </div>

    </div>

</div>



{{-- =========================================================
     CONTENT
========================================================= --}}

<div class="row g-3">


    {{-- LEFT --}}

    <div class="col-12 col-lg-8">


        {{-- Description --}}

        <div class="card card-custom p-4 mb-3">

            <h6 class="fw-bold text-dark mb-2">

                <i class="bi bi-info-circle me-1"></i>

                Deskripsi Agent

            </h6>


            <p
                class="text-secondary mb-0"
                style="white-space: pre-line;"
            >

                {{ $activeData['desc'] }}

            </p>

        </div>



        {{-- Capabilities --}}

        <div class="card card-custom p-4">

            <small
                class="
                    text-warning
                    fw-bold
                    text-uppercase
                    mb-3
                    d-block
                "
                style="font-size: 11px;"
            >

                CORE CAPABILITIES

            </small>


            <div class="d-flex flex-column gap-3">


                @foreach($activeData['capabilities'] as $cap)

                    <div class="border-bottom pb-3">

                        <div
                            class="
                                d-flex
                                align-items-start
                                gap-3
                            "
                        >

                            <span
                                class="
                                    fw-bold
                                    text-warning
                                    fs-5
                                "
                            >

                                {{ $cap['no'] }}

                            </span>


                            <div>

                                <h6
                                    class="
                                        fw-bold
                                        text-dark
                                        mb-1
                                    "
                                >

                                    {{ $cap['title'] }}

                                </h6>


                                <p
                                    class="
                                        text-muted
                                        small
                                        mb-0
                                    "
                                >

                                    {{ $cap['desc'] }}

                                </p>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>



    {{-- RIGHT --}}

    <div class="col-12 col-lg-4">


        <div class="card card-custom p-4">

            <h6 class="fw-bold text-dark mb-3">

                <i class="bi bi-lightbulb-fill text-warning me-1"></i>

                Tema Riset

            </h6>


            <div
                class="
                    p-3
                    bg-light
                    rounded-3
                    mb-3
                "
            >

                <small class="text-muted d-block mb-1">

                    Tema Aktif

                </small>


                <strong class="text-dark">

                    {{ $selectedTema }}

                </strong>

            </div>


            <x-status-banner
                type="success"
                icon="bi-check-circle-fill"
                title="Mode Agent Aktif"
            >

                Sistem berhasil memuat rancangan
                platform Agentic AI kelompok.

            </x-status-banner>


            <div class="d-grid gap-2">


                <a
                    href="{{ route('agent.idea') }}"
                    class="btn btn-outline-primary"
                >

                    <i class="bi bi-arrow-counterclockwise me-1"></i>

                    Mode Default

                </a>


                <a
                    href="{{ route('agent.idea', [
                        'tema' => 'smart-lab-k3'
                    ]) }}"
                    class="btn btn-primary"
                >

                    <i class="bi bi-cpu me-1"></i>

                    Smart Lab K3

                </a>

            </div>

        </div>


    </div>

</div>

@endsection