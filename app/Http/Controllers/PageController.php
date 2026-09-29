<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Helper Dark Mode
    |--------------------------------------------------------------------------
    */
    private function isDarkMode(Request $request): bool
    {
        return $request->query('mode') === 'dark';
    }


    /*
    |--------------------------------------------------------------------------
    | 1. BERANDA
    |--------------------------------------------------------------------------
    |
    | Challenge 2:
    | /?user=Andi
    |
    */
    public function index(Request $request)
    {
        $userName = $request->query(
            'user',
            'Dzuhrillah Hendraines'
        );

        $isDarkMode = $this->isDarkMode($request);

        return view('home', [
            'userName'   => $userName,
            'isDarkMode' => $isDarkMode,
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | 2. PROFIL MAHASISWA
    |--------------------------------------------------------------------------
    |
    | /profil-mahasiswa
    | /profil-mahasiswa/5025221107
    |
    */
    public function profil(
        Request $request,
        ?string $nrp = null
    ) {
        $nrp = $nrp ?? '5025221107';

        /*
        | Validasi NRP harus tepat 10 digit.
        */
        if (!preg_match('/^[0-9]{10}$/', $nrp)) {
            abort(404);
        }

        $isDarkMode = $this->isDarkMode($request);

        $mhs = [
            'nama'   => 'Dzuhrillah Hendraines',
            'nrp'    => $nrp,
            'email'  => 'dzuhrillahhen@gmail.com',
            'dept'   => 'Teknik Informatika',
            'kampus' => 'Institut Teknologi Sepuluh Nopember',
            'status' => 'Mahasiswa Aktif PBKK-D',
        ];

        return view('detail_mhs', [
            'mhs'        => $mhs,
            'isDarkMode' => $isDarkMode,
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | 3. IDE-RISET / AGENTIC AI
    |--------------------------------------------------------------------------
    |
    | /ide-agent
    | /ide-agent?mode=dark
    | /ide-agent/smart-lab-k3
    |
    */
    public function agent(
        Request $request,
        ?string $tema = null
    ) {
        $isDarkMode = $this->isDarkMode($request);

        $cleanTema = $tema
            ? strtolower(trim(urldecode($tema)))
            : '';

        $isSmartLab = false;

        if ($cleanTema !== '') {
            $keywords = [
                'smart',
                'lab',
                'k3',
            ];

            foreach ($keywords as $keyword) {
                if (str_contains($cleanTema, $keyword)) {
                    $isSmartLab = true;
                    break;
                }
            }
        }


        /*
        |--------------------------------------------------------------------------
        | Data Smart Lab K3
        |--------------------------------------------------------------------------
        */
        if ($isSmartLab) {

            $selectedTema = 'Smart Lab & K3 Agent';

            $activeData = [

                'isDefault' => false,

                'judul' =>
                    'Smart Lab Equipment & K3 Compliance Agent',

                'badge' =>
                    'Otonomi Peminjaman Lab & Proteksi K3',

                'desc' =>
                    "Proyek ini mendemonstrasikan transisi dari otomasi peminjaman alat lab yang kaku berbasis formulir konvensional menjadi arsitektur Agentic AI berorientasi konteks.\n\n"
                    . "LLM bertugas memahami niat pengguna dari bahasa natural, namun batas eksekusi seperti validasi aturan K3, hak akses SSO, dan verifikasi stok inventaris dikontrol secara penuh dan deterministik melalui Model Context Protocol (MCP) Server berbasis Laravel Backend.",

                'capabilities' => [

                    [
                        'no' => '01',
                        'title' =>
                            'Natural Intent Translation & Catalog Match',
                        'desc' =>
                            'Menerjemahkan bahasa alami menjadi panggilan pencarian katalog resmi seperti search_catalog("solder").',
                    ],

                    [
                        'no' => '02',
                        'title' =>
                            'Deterministic SOP & K3 Rule Verification',
                        'desc' =>
                            'Keputusan izin pinjam diambil oleh kode backend check_eligibility, bukan berdasarkan keluaran bebas dari LLM.',
                    ],

                    [
                        'no' => '03',
                        'title' =>
                            'Multi-Step Agentic Problem Solving',
                        'desc' =>
                            'Mengelola alur bertahap: cek stok, cek syarat K3, cari jadwal pendampingan aslab, kemudian eksekusi booking.',
                    ],

                    [
                        'no' => '04',
                        'title' =>
                            'Server-Enforced Step-Up Authentication',
                        'desc' =>
                            'Peminjaman alat berisiko tinggi memicu verifikasi tambahan sebelum transaksi dapat dilanjutkan.',
                    ],
                ],
            ];

        } else {

            /*
            |--------------------------------------------------------------------------
            | Default Agent
            |--------------------------------------------------------------------------
            */

            $selectedTema = 'General Academic Agent';

            $activeData = [

                'isDefault' => true,

                'judul' =>
                    'General Academic Agentic AI Platform',

                'badge' =>
                    'Default Academic Agent',

                'desc' =>
                    'Platform Agentic AI umum yang dirancang untuk mengorkestrasi berbagai kebutuhan ekosistem akademik ITS melalui integrasi Large Language Model (LLM) dan Model Context Protocol (MCP).',

                'capabilities' => [

                    [
                        'no' => '01',
                        'title' =>
                            'Universal Intent Recognition',
                        'desc' =>
                            'Memahami maksud pengguna dari percakapan natural dan mengarahkan ke modul backend yang sesuai.',
                    ],

                    [
                        'no' => '02',
                        'title' =>
                            'Multi-Tool Backend Orchestration',
                        'desc' =>
                            'Menggabungkan beberapa fungsi API dan database dalam satu instruksi pengguna secara terstruktur.',
                    ],

                    [
                        'no' => '03',
                        'title' =>
                            'Secure MCP Protocol Architecture',
                        'desc' =>
                            'Menjaga keamanan data dengan tidak memberikan akses langsung database kepada LLM.',
                    ],
                ],
            ];
        }


        return view('agent', [
            'selectedTema' => $selectedTema,
            'activeData'   => $activeData,
            'isDarkMode'   => $isDarkMode,
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | 4. KALKULATOR IPK
    |--------------------------------------------------------------------------
    */
    public function ipkCalculator(
        Request $request,
        $ipk1 = 3.75,
        $ipk2 = 3.80
    ) {
        $isDarkMode = $this->isDarkMode($request);

        /*
        | Pastikan input numerik.
        */
        if (!is_numeric($ipk1) || !is_numeric($ipk2)) {

            return view('kalkulator_ipk', [
                'sem1'       => $ipk1,
                'sem2'       => $ipk2,
                'jumlah'     => null,
                'rataRata'   => null,
                'error'      => 'Input nilai IPK harus berupa angka yang valid.',
                'isDarkMode' => $isDarkMode,
            ]);
        }


        $val1 = (float) $ipk1;
        $val2 = (float) $ipk2;


        /*
        | Nilai harus 0.00 - 4.00.
        */
        if (
            $val1 < 0 ||
            $val1 > 4 ||
            $val2 < 0 ||
            $val2 > 4
        ) {

            return view('kalkulator_ipk', [
                'sem1'       => $val1,
                'sem2'       => $val2,
                'jumlah'     => null,
                'rataRata'   => null,
                'error'      => 'Nilai IPK harus berada dalam rentang 0.00 hingga 4.00.',
                'isDarkMode' => $isDarkMode,
            ]);
        }


        $jumlah = $val1 + $val2;

        $rataRata = $jumlah / 2;


        return view('kalkulator_ipk', [
            'sem1'       => $val1,
            'sem2'       => $val2,
            'jumlah'     => number_format($jumlah, 2),
            'rataRata'   => number_format($rataRata, 2),
            'error'      => null,
            'isDarkMode' => $isDarkMode,
        ]);
    }
}