@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')


<div class="row g-3">


    {{-- =====================================================
         PROFILE SUMMARY
    ====================================================== --}}

    <div class="col-12 col-lg-4">

        <div
            class="
                card
                card-custom
                p-4
                text-center
                h-100
            "
        >


            {{-- Avatar berbasis CSS/icon, tanpa CDN --}}

            <div
                class="
                    mx-auto
                    mb-3
                    rounded-circle
                    bg-primary
                    bg-opacity-10
                    text-primary
                    d-flex
                    align-items-center
                    justify-content-center
                "
                style="
                    width: 110px;
                    height: 110px;
                "
            >

                <i
                    class="
                        bi
                        bi-person-fill
                        display-4
                    "
                ></i>

            </div>


            <h5 class="fw-bold text-dark mb-1">

                {{ $mhs['nama'] }}

            </h5>


            <span
                class="
                    badge
                    bg-success
                    bg-opacity-10
                    text-success
                    px-3
                    py-1
                    rounded-pill
                    fw-semibold
                    mx-auto
                    mb-3
                "
                style="font-size: 11px;"
            >

                <i class="bi bi-check-circle-fill me-1"></i>

                NRP 10 Digit Valid

            </span>


            <hr class="my-2">


            <div class="text-start">


                <small class="text-muted d-block mb-1">
                    NRP ITS:
                </small>

                <p class="fw-bold text-dark mb-2">
                    {{ $mhs['nrp'] }}
                </p>


                <small class="text-muted d-block mb-1">
                    Email Resmi:
                </small>

                <p class="fw-bold text-dark mb-2">
                    {{ $mhs['email'] }}
                </p>


                <small class="text-muted d-block mb-1">
                    Status Akademik:
                </small>

                <p class="fw-bold text-dark mb-0">
                    {{ $mhs['status'] }}
                </p>

            </div>

        </div>

    </div>



    {{-- =====================================================
         PROFILE DETAILS
    ====================================================== --}}

    <div class="col-12 col-lg-8">

        <div class="card card-custom p-4 h-100">

            <h5 class="fw-bold text-primary mb-3">

                <i class="bi bi-card-heading me-2"></i>

                Informasi Data Pribadi

            </h5>


            <div class="row g-3">


                <div class="col-12 col-sm-6">

                    <x-info-card
                        title="Nama Lengkap"
                        icon="bi-person-fill"
                        variant="primary"
                    >

                        {{ $mhs['nama'] }}

                    </x-info-card>

                </div>


                <div class="col-12 col-sm-6">

                    <x-info-card
                        title="NRP"
                        icon="bi-patch-check-fill"
                        variant="success"
                        badge="Verified"
                    >

                        {{ $mhs['nrp'] }}

                    </x-info-card>

                </div>


                <div class="col-12 col-sm-6">

                    <x-info-card
                        title="Email Kampus"
                        icon="bi-envelope-fill"
                        variant="warning"
                    >

                        {{ $mhs['email'] }}

                    </x-info-card>

                </div>


                <div class="col-12 col-sm-6">

                    <x-info-card
                        title="Departemen"
                        icon="bi-building-fill"
                        variant="info"
                    >

                        {{ $mhs['dept'] }}

                    </x-info-card>

                </div>

            </div>


            <div class="mt-4">

                <x-status-banner
                    type="info"
                    icon="bi-shield-check"
                    title="Validasi Profil"
                >

                    NRP mahasiswa menggunakan validasi
                    ekspresi reguler dengan format tepat
                    10 digit angka.

                </x-status-banner>

            </div>

        </div>

    </div>

</div>

@endsection