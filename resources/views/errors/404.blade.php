@extends('layouts.app')

@section('title', '404 Halaman Tidak Ditemukan')

@section('content')


<div class="row justify-content-center py-5">

    <div class="col-12 col-md-7 text-center">

        <div class="card card-custom p-5">


            <h1
                class="
                    display-1
                    fw-bold
                    text-danger
                    mb-0
                "
            >

                404

            </h1>


            <h3
                class="
                    fw-bold
                    text-dark
                    mb-3
                "
            >

                Halaman Tidak Ditemukan

            </h3>


            <p class="text-secondary mb-4">

                Rute URL yang Anda tuju tidak
                terdaftar di sistem aplikasi
                akademik ini.

            </p>


            <div>

                <a
                    href="{{ route('home') }}"
                    class="
                        btn
                        btn-primary
                        rounded-pill
                        px-4
                        py-2
                    "
                >

                    <i
                        class="
                            bi
                            bi-house-door
                            me-1
                        "
                    ></i>

                    Kembali ke Beranda

                </a>

            </div>

        </div>

    </div>

</div>

@endsection