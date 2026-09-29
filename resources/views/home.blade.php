@extends('layouts.app')

@section('title', 'Dashboard Akademik')

@section('content')


{{-- =========================================================
     CHALLENGE 2 - DYNAMIC USER
========================================================= --}}

<x-status-banner
    type="primary"
    icon="bi-hand-thumbs-up-fill"
    title="Selamat Datang Kembali!"
>

    Halo,
    <strong>{{ $userName }}</strong>!

    Anda sedang mengakses
    <strong>ITS Academic Profile Sandbox</strong>
    (Pertemuan 4 PBKK).

</x-status-banner>



{{-- =========================================================
     HERO
========================================================= --}}

<div
    class="hero-banner mb-4 p-4 text-white rounded-3 shadow-sm"
    style="
        background:
            linear-gradient(
                135deg,
                #0d6efd 0%,
                #013880 100%
            );
    "
>

    <div
        class="d-flex
               justify-content-between
               align-items-center"
    >

        <div>

            <span
                class="
                    badge
                    bg-white
                    text-primary
                    px-3
                    py-1
                    rounded-pill
                    fw-semibold
                    mb-2
                "
                style="font-size: 11px;"
            >

                <i class="bi bi-patch-check-fill me-1"></i>

                CPMK-1 Verified Sandbox

            </span>


            <h3 class="fw-bold mb-1">

                Selamat Datang,
                {{ $userName }}!

            </h3>


            <p
                class="text-white-50 mb-0"
                style="font-size: 13px;"
            >

                Sistem Informasi Statik Profil Mahasiswa
                Departemen Teknik Informatika ITS.

            </p>

        </div>


        <i
            class="
                bi
                bi-mortarboard
                display-3
                opacity-25
                d-none
                d-md-block
            "
        ></i>

    </div>

</div>



{{-- =========================================================
     INFO CARDS
========================================================= --}}

<div class="row g-3 mb-4">


    <div class="col-12 col-sm-6 col-xl-3">

        <x-info-card
            title="Status Mahasiswa"
            icon="bi-person-badge-fill"
            badge="Verified"
            variant="primary"
        >

            Aktif (Regular)

        </x-info-card>

    </div>


    <div class="col-12 col-sm-6 col-xl-3">

        <x-info-card
            title="Estimasi IPK"
            icon="bi-calculator-fill"
            badge="Skala 4.00"
            variant="success"
        >

            3.78 / 4.00

        </x-info-card>

    </div>


    <div class="col-12 col-sm-6 col-xl-3">

        <x-info-card
            title="Sub-Tema AI"
            icon="bi-cpu-fill"
            badge="Otonom"
            variant="warning"
        >

            Smart Lab K3

        </x-info-card>

    </div>


    <div class="col-12 col-sm-6 col-xl-3">

        <x-info-card
            title="Mata Kuliah"
            icon="bi-book-fill"
            badge="3 SKS"
            variant="info"
        >

            PBKK Kelas D

        </x-info-card>

    </div>

</div>



{{-- =========================================================
     QUICK NAVIGATION
========================================================= --}}

<div class="card card-custom p-3">

    <h6 class="fw-bold text-dark mb-2">

        <i class="bi bi-link-45deg me-1"></i>

        Akses Pintar

    </h6>


    <div class="d-flex flex-wrap gap-2">


        <a
            href="{{ route('mahasiswa.detail') }}"
            class="
                btn
                btn-primary
                btn-sm
                px-3
                fw-semibold
            "
        >

            <i class="bi bi-person-badge me-1"></i>

            Profil Mahasiswa

        </a>


        <a
            href="{{ route('agent.idea') }}"
            class="
                btn
                btn-outline-primary
                btn-sm
                px-3
                fw-semibold
            "
        >

            <i class="bi bi-cpu me-1"></i>

            Ide-Riset Agentic AI

        </a>


        <a
            href="{{ route('ipk.hitung') }}"
            class="
                btn
                btn-outline-primary
                btn-sm
                px-3
                fw-semibold
            "
        >

            <i class="bi bi-calculator me-1"></i>

            Kalkulator IPK

        </a>

    </div>

</div>

@endsection