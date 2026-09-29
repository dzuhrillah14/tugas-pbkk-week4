@extends('layouts.app')

@section('title', 'Kalkulator IPK Otomatis')

@section('content')


<div class="row g-3">


    {{-- =====================================================
         FORM
    ====================================================== --}}

    <div class="col-12 col-lg-6">

        <div class="card card-custom p-4 h-100">

            <h5 class="fw-bold text-dark mb-1">

                <i
                    class="bi bi-calculator text-primary me-2"
                ></i>

                Form Hitung IPK

            </h5>


            <p class="text-muted small mb-3">

                Masukkan nilai IP semester 1 dan 2.
                Skala nilai 0.00 hingga 4.00.

            </p>


            <form
                id="formIpk"
                onsubmit="
                    event.preventDefault();
                    prosesKalkulasi();
                "
                class="row g-3"
            >


                {{-- Semester 1 --}}

                <div class="col-6">

                    <label
                        class="
                            form-label
                            small
                            fw-semibold
                            text-muted
                        "
                    >

                        IP Semester 1

                    </label>


                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="4"
                        id="inputIpk1"
                        class="
                            form-control
                            {{ !empty($error)
                                ? 'is-invalid'
                                : ''
                            }}
                        "
                        value="{{ $sem1 }}"
                        required
                    >

                </div>



                {{-- Semester 2 --}}

                <div class="col-6">

                    <label
                        class="
                            form-label
                            small
                            fw-semibold
                            text-muted
                        "
                    >

                        IP Semester 2

                    </label>


                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="4"
                        id="inputIpk2"
                        class="
                            form-control
                            {{ !empty($error)
                                ? 'is-invalid'
                                : ''
                            }}
                        "
                        value="{{ $sem2 }}"
                        required
                    >

                </div>



                {{-- Button --}}

                <div class="col-12">

                    <button
                        type="submit"
                        class="
                            btn
                            btn-primary
                            w-100
                            fw-semibold
                            py-2
                        "
                    >

                        <i class="bi bi-calculator me-1"></i>

                        Hitung IPK

                    </button>

                </div>

            </form>


            <div
                class="
                    mt-3
                    p-2
                    bg-light
                    rounded
                    text-center
                "
            >

                <small
                    class="text-muted"
                    style="font-size: 11px;"
                >

                    <i class="bi bi-info-circle me-1"></i>

                    Batas skala:
                    <strong>0.00 s/d 4.00</strong>

                </small>

            </div>

        </div>

    </div>



    {{-- =====================================================
         RESULT
    ====================================================== --}}

    <div class="col-12 col-lg-6">

        <div
            class="
                card
                card-custom
                p-4
                text-center
                h-100
            "
        >


            @if(!empty($error))


                <x-status-banner
                    type="warning"
                    icon="bi-exclamation-triangle-fill"
                    title="Input Tidak Valid!"
                >

                    {{ $error }}

                    <hr class="my-2">

                    <small
                        class="text-muted"
                        style="font-size: 11px;"
                    >

                        Silakan masukkan angka
                        0.00 hingga 4.00.

                    </small>

                </x-status-banner>


            @else


                <small
                    class="
                        text-muted
                        d-block
                        mb-2
                        fw-semibold
                    "
                >

                    Rincian Perhitungan IPK

                </small>


                <div class="row g-2 mb-3">


                    <div class="col-6">

                        <div class="p-3 bg-light rounded-3">

                            <small class="text-muted d-block">
                                IP Sem 1
                            </small>

                            <span
                                class="
                                    fw-bold
                                    text-dark
                                    fs-5
                                "
                            >

                                {{ number_format($sem1, 2) }}

                            </span>

                        </div>

                    </div>


                    <div class="col-6">

                        <div class="p-3 bg-light rounded-3">

                            <small class="text-muted d-block">
                                IP Sem 2
                            </small>

                            <span
                                class="
                                    fw-bold
                                    text-dark
                                    fs-5
                                "
                            >

                                {{ number_format($sem2, 2) }}

                            </span>

                        </div>

                    </div>

                </div>


                <div class="row g-2">


                    <div class="col-6">

                        <div
                            class="
                                p-3
                                bg-secondary
                                bg-opacity-10
                                text-dark
                                rounded-3
                                border
                            "
                        >

                            <small
                                class="
                                    d-block
                                    text-muted
                                    fw-semibold
                                    mb-1
                                "
                            >

                                Total Jumlah IP

                            </small>


                            <h3 class="fw-bold mb-0">

                                {{ $jumlah }}

                            </h3>

                        </div>

                    </div>


                    <div class="col-6">

                        <div
                            class="
                                p-3
                                bg-primary
                                text-white
                                rounded-3
                                shadow-sm
                            "
                        >

                            <small
                                class="
                                    d-block
                                    text-white-50
                                    fw-semibold
                                    mb-1
                                "
                            >

                                Rata-Rata IPK

                            </small>


                            <h3 class="fw-bold mb-0">

                                {{ $rataRata }}

                            </h3>

                        </div>

                    </div>

                </div>


            @endif


            <div class="mt-3">

                <small
                    class="text-muted"
                    style="font-size: 11px;"
                >

                    Route:

                    <code>
                        /hitung-ipk/{ipk1}/{ipk2}
                    </code>

                </small>

            </div>

        </div>

    </div>

</div>



<script>

function prosesKalkulasi() {

    const val1 =
        document.getElementById('inputIpk1').value;

    const val2 =
        document.getElementById('inputIpk2').value;


    window.location.href =
        `/hitung-ipk/${val1}/${val2}`;

}

</script>

@endsection