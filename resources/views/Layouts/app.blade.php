<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        myITS Portal - @yield('title')
    </title>

    @vite('resources/js/app.js')

</head>


<body class="{{ ($isDarkMode ?? false) ? 'dark-mode' : '' }}">

<div class="d-flex min-vh-100">


    {{-- =========================================================
         SIDEBAR
    ========================================================== --}}

    <aside class="sidebar d-none d-lg-block p-3">

        <a
            href="{{ route('home') }}"
            class="d-flex align-items-center gap-2 text-white text-decoration-none px-2 py-3 mb-3 border-bottom border-white border-opacity-10"
        >

            <i class="bi bi-mortarboard-fill text-warning fs-3"></i>

            <div>

                <h5 class="fw-bold mb-0">
                    myITS Portal
                </h5>

                <small
                    class="text-white-50"
                    style="font-size: 11px;"
                >
                    PBKK Pertemuan 4
                </small>

            </div>

        </a>


        <ul class="nav nav-pills flex-column">


            {{-- Dashboard --}}

            <li class="nav-item">

                <a
                    href="{{ route('home') }}"
                    class="nav-link {{ Route::is('home') ? 'active' : '' }}"
                >

                    <i class="bi bi-grid-1x2-fill me-2"></i>

                    Dashboard

                </a>

            </li>


            {{-- Profil --}}

            <li class="nav-item">

                <a
                    href="{{ route('mahasiswa.detail') }}"
                    class="nav-link {{ Route::is('mahasiswa.detail') ? 'active' : '' }}"
                >

                    <i class="bi bi-person-badge-fill me-2"></i>

                    Detail Profil

                </a>

            </li>


            {{-- Agentic AI --}}

            <li class="nav-item">

                <a
                    href="{{ route('agent.idea') }}"
                    class="nav-link {{ Route::is('agent.idea') ? 'active' : '' }}"
                >

                    <i class="bi bi-cpu-fill me-2"></i>

                    Ide-Riset Agentic AI

                </a>

            </li>


            {{-- Kalkulator --}}

            <li class="nav-item">

                <a
                    href="{{ route('ipk.hitung') }}"
                    class="nav-link {{ Route::is('ipk.hitung') ? 'active' : '' }}"
                >

                    <i class="bi bi-calculator-fill me-2"></i>

                    Kalkulator IPK

                </a>

            </li>

        </ul>

    </aside>



    {{-- =========================================================
         MAIN AREA
    ========================================================== --}}

    <div class="main-wrapper d-flex flex-column">


        {{-- TOP NAVBAR --}}

        <header
            class="top-navbar d-flex justify-content-between align-items-center"
        >

            <div>

                <h6 class="fw-bold mb-0">
                    @yield('title')
                </h6>

            </div>


            <div class="d-flex align-items-center gap-3">


                {{-- Dark Mode Toggle --}}

                <a
                    href="{{ request()->fullUrlWithQuery([
                        'mode' => ($isDarkMode ?? false)
                            ? 'light'
                            : 'dark'
                    ]) }}"
                    class="btn btn-sm btn-outline-secondary rounded-pill px-3"
                >

                    <i
                        class="bi
                        {{ ($isDarkMode ?? false)
                            ? 'bi-sun-fill text-warning'
                            : 'bi-moon-stars-fill'
                        }}
                        me-1"
                    ></i>

                    {{ ($isDarkMode ?? false)
                        ? 'Light Mode'
                        : 'Dark Mode'
                    }}

                </a>


                {{-- User --}}

                <div class="text-end d-none d-sm-block">

                    <span
                        class="fw-bold d-block"
                        style="font-size: 13px;"
                    >
                        Dzuhrillah Hendraines
                    </span>

                    <small
                        class="text-muted"
                        style="font-size: 11px;"
                    >
                        5025221107
                    </small>

                </div>

            </div>

        </header>



        {{-- CONTENT --}}

        <main class="p-3 p-md-4 flex-grow-1">

            @yield('content')

        </main>



        {{-- FOOTER --}}

        <footer
            class="py-3 border-top text-center"
            style="font-size: 12px;"
        >

            &copy; {{ date('Y') }}

            Departemen Teknik Informatika ITS

            &bull;

            PBKK Pertemuan 4

        </footer>


    </div>

</div>

</body>

</html>