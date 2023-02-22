{{-- @extends('layouts.main')

@section('container')
    <h1>Halaman Home</h1>
@endsection --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solusi Sistem UMKM atau Perusahaan</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon/favicon.ico">
    <!-- <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="css/costum.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="desktopx">
        <!-- navbar -->
        <nav class="py-3 fixed-top" style="backdrop-filter: blur(5px); background-color: rgba(28,123,138,0.6);">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <a href="" class=""><img src="assets/img/logo/logo-v3.png"
                                style="width: 50px; height: 50px;"></a>
                        <div class="ms-auto">
                            @foreach ($get_hdr_data as $key => $hdr)
                                <a href=""
                                    class="text-white text-decoration-none px-4 fw-semibold">{{ $hdr->hdr_name }}</a>
                                {{-- <a href="" class="text-white text-decoration-none px-4 fw-semibold">Source Code</a>
                            <a href="" class="text-white text-decoration-none px-4 fw-semibold">Hosting</a>
                            <a href="" class="text-white text-decoration-none px-4 fw-semibold">Product</a> --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main -->
        <div class="bg-primary py-5">
            <div class="container py-3">
                <div class="row pt-5 align-items-center">
                    <div class="col-5">
                        <div class="text-white fw-bold fs-7">hendebro.</div>
                        <div class="text-white fw-semibold fs-8 pb-1">Software Agency</div>
                        <div class="text-white py-3" style="text-align: justify;">Kami adalah perusahaan rintisan
                            digital
                            yang bergerak dibidang pengembang perangkat lunak seperti website dan mobile app, solusi
                            terbaik
                            untuk permasalahan sistem pribadi ataupun perusahaan anda.</div>
                        <div class="row gx-4 pt-4">
                            <div class="col">
                                <div class="d-grid"><a href="#sourcecode"
                                        class="btn btn-warning text-teal fw-semibold rounded-3"
                                        style="--bs-btn-padding-y: .8rem;">Get Started</a></div>
                            </div>
                            <div class="col">
                                <div class="d-grid">
                                    <a href="https://api.whatsapp.com/send/?phone=6281211403600&text=Saya%20ingin%20bertanya%20seputar%20layanan%20yang%20diberikan%20oleh%20hendebro"
                                        class="btn btn-outline-warning rounded-3" style="--bs-btn-padding-y: .8rem;">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- <img src="assets/img/icon/play-y.svg" style="fill: red;"> -->
                                            <span class="ps-2 fw-semibold">Learn More</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="col-7 text-end">
          <div style="position: relative;">
            <div>
              <img src="assets/img/main1.png" class="animatedimg rounded-4">
            </div>
            <div class="position-absolute" style="top: 55%; right: -5%;">
              <img src="assets/img/main-1.png" class="animatedimg-2">
            </div>
            <div class="position-absolute" style="top: 68%; right: -5%;">
              <img src="assets/img/main-2.png" class="animatedimg-3">
            </div>
            <div class="position-absolute" style="top: 81%; right: -5%;">
              <img src="assets/img/main-3.png" class="animatedimg-4">
            </div>
            <div class="position-absolute" style="top: 82%; right: -5%;">
              <img src="assets/img/main-4.png" class="animatedimg-5">
            </div>
            <!-- check animated -->

            <div class="position-absolute" style="top: 27%; right: 7%; z-index: 99;">
              <div class="container-anim">
                <div class="circle-border1"></div>
                <div class="circle1">
                  <div class="success"></div>
                </div>
              </div>

              <div class="container-anim">
                <div class="circle-border2"></div>
                <div class="circle2">
                  <div class="success"></div>
                </div>
              </div>

              <div class="container-anim">
                <div class="circle-border3"></div>
                <div class="circle3">
                  <div class="success"></div>
                </div>
              </div>

              <div class="container-anim">
                <div class="circle-border4"></div>
                <div class="circle4">
                  <div class="success"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
                    <!-- <div class="col text-end">
          <img src="assets/img/anim-1.png" class="anim-1">
          <img src="assets/img/anim-2.png" class="anim-2">
          <img src="assets/img/breadcumb.png">
        </div> -->
                </div>
            </div>
        </div>

        <!-- client -->
        <div class="pt-5 text-center">
            <div class="container">
                <div class="bg-light rounded-4 row">
                    <div class="col">
                        <img src="assets/img/client.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- informasi -->
        <div class="pt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <div class="text-primary fs-1 fw-semibold">Find the best solution to your business.</div>
                        <div class="text-grey">Gunakan beberapa pilihan yang telah kami berikan dibawah ini</div>
                    </div>
                </div>
                <div class="row gx-4 pt-5">
                    <div class="col">
                        <div class="bg-teal rounded-4 bg-opacity-50 p-4">
                            <div class="d-flex align-items-center">
                                <div class="dot"></div>
                                <div class="ps-1 fw-semibold text-grey">Blog</div>
                            </div>
                            <div class="ps-1 fw-bold fs-4 text-black text-opacity-75">Lifetime Access</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-teal rounded-4 bg-opacity-50 p-4">
                            <div class="d-flex align-items-center">
                                <div class="dot"></div>
                                <div class="ps-1 fw-semibold text-grey">Source Code</div>
                            </div>
                            <div class="ps-1 fw-bold fs-4 text-black text-opacity-75">Freemium</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-teal rounded-4 bg-opacity-50 p-4">
                            <div class="d-flex align-items-center">
                                <div class="dot"></div>
                                <div class="ps-1 fw-semibold text-grey">Hosting <small
                                        class="fw-normal fst-italic">mulai
                                        dari</small></div>
                            </div>
                            <div class="ps-1 fw-bold fs-4 text-black text-opacity-75">Rp 50.000</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-teal rounded-4 bg-opacity-50 p-4">
                            <div class="d-flex align-items-center">
                                <div class="dot"></div>
                                <div class="ps-1 fw-semibold text-grey">Product <small
                                        class="fw-normal fst-italic">mulai
                                        dari</small></div>
                            </div>
                            <div class="ps-1 fw-bold fs-4 text-black text-opacity-75">Rp 1.000.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- blog -->
        <div class="bg-teal mt-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-primary fw-semibold">Find Information About Programming</div>
                        <div class="text-black fs-1 fw-bold">Temukan Infromasi Seputar Pemrograman</div>
                    </div>
                </div>
                <div class="row gx-4 pt-4">
                    <div class="col">
                        <div class="bg-white rounded-4 p-4">
                            <a href="blog.html" class="text-decoration-none">
                                <img src="assets/img/tips1.png"
                                    class="img-fluid rounded-4">
                                <div class="pt-3">
                                    <div class="fw-bold text-black">UI / UX : Menggunakan Figma Sebagai Tools Utama
                                    </div>
                                    <div class="fw-light text-grey">Hello people spirit of learning! Dalam flutter
                                        terdapat
                                        widget elevated button yang...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white rounded-4 p-4">
                            <a href="blog.html" class="text-decoration-none">
                                <img src="assets/img/tips2.png"
                                    class="img-fluid rounded-4">
                                <div class="pt-3">
                                    <div class="fw-bold text-black">Laravel Tutorial : Cara membuat model pada blade
                                    </div>
                                    <div class="fw-light text-grey">Hello people spirit of learning! Dalam flutter
                                        terdapat
                                        widget elevated button yang</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white rounded-4 p-4">
                            <a href="blog.html" class="text-decoration-none">
                                <img src="assets/img/tips3.png"
                                    class="img-fluid rounded-4">
                                <div class="pt-3">
                                    <div class="fw-bold text-black">HTML Tutorial : Mahir Menggunakan Tag HTML</div>
                                    <div class="fw-light text-grey">Hello people spirit of learning! Dalam flutter
                                        terdapat
                                        widget elevated button yang</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- animasi card left and right -->
        <div class="pt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <!-- <div class="text-primary fw-semibold">Learn From Case Studies</div> -->
                        <!-- <div class="text-black fs-1 fw-bold">Temukan Kode Sesuai Kebutuhan Anda</div> -->
                        <div class="text-primary fw-semibold">Update Your Skills</div>
                        <div class="text-black fs-1 fw-bold">Ada Banyak Pilihan <br> Bahasa Pemrograman</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="position-relative d-none d-sm-block ltor-container">
                <div class="d-flex justify-content-between ltor">
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/laravel.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Laravel</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/node.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Node JS</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/html.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">HTML</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/js.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Javascript</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between ltor ltor2">
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/laravel.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Laravel</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/codeigniter.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Codeigniter</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/html.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">HTML</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/js.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Javascript</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5">
            <div class="position-relative d-none d-sm-block rtol-container">
                <div class="d-flex justify-content-between rtol">
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/laravel.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Laravel</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/codeigniter.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Codeigniter</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/html.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">HTML</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/js.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Javascript</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between rtol rtol2">
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/laravel.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Laravel</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/codeigniter.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Codeigniter</div>
                                <div class="fw-light text-grey">Back-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/html.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">HTML</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-teal rounded-4 p-4">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/js.png" class="img-fluid rounded-4">
                            <div class="ps-2">
                                <div class="fw-bold text-black">Javascript</div>
                                <div class="fw-light text-grey">Front-End Development</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- source code -->
        <div class="bg-teal py-5" id="sourcecode">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- <div class="text-primary fw-semibold">Learn From Case Studies</div> -->
                        <!-- <div class="text-black fs-1 fw-bold">Temukan Kode Sesuai Kebutuhan Anda</div> -->
                        <div class="text-primary fw-semibold">Learn From Case Studies</div>
                        <div class="text-black fs-1 fw-bold">Pilih Kategori Sesuai Kebutuhan Anda</div>
                    </div>
                </div>
                <div class="row gx-4 pt-4">
                    <div class="col">
                        <div class="bg-white rounded-4 p-4">
                            <a href="sourcecode.html" class="text-decoration-none">
                                <img src="assets/img/kelas1.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black pb-2">PHP & Bootstrap : Aplikasi Keuangan</div>
                                    <div class="text-primary pb-2">Gratis</div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                        </div>
                                        <div class="ms-2">(34)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white rounded-4 p-4">
                            <a href="sourcecode.html" class="text-decoration-none">
                                <img src="assets/img/kelas3.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black pb-2">PHP Laravel8 & Bootstrap : Aplikasi Pemesanan
                                        Tiket</div>
                                    <div class="text-black pb-2"><span
                                            class="text-danger text-decoration-line-through blink">Rp 500.000</span> Rp
                                        150.000</div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                        </div>
                                        <div class="ms-2">(1.764)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white rounded-4 p-4">
                            <a href="sourcecode.html" class="text-decoration-none">
                                <img src="assets/img/kelas2.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black pb-2">PHP Codeigniter & Bootstrap : Aplikasi Klinik</div>
                                    <div class="text-black pb-2">Rp 250.000</div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                        </div>
                                        <div class="ms-2">(209)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- animasi card left and right -->
        <div class="bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 py-6">
                        <div class="text-warning fw-semibold">Dipercaya 100+ Client</div>
                        <div class="text-white fs-1 fw-bold">Join Our Community For A Better Experience</div>
                        <div class="text-white text-opacity-75 pt-2 pb-4">Bergabung bersama kami untuk menemukan solusi
                            dari permasalahan sistem anda.</div>
                        <a href="https://api.whatsapp.com/send/?phone=6281211403600&text=Saya%20ingin%20bertanya%20seputar%20layanan%20yang%20diberikan%20oleh%20hendebro"
                            class="text-decoration-none btn btn-warning text-teal fw-semibold rounded-3"
                            style="--bs-btn-padding-x: 2rem; --bs-btn-padding-y: .5rem;">Send Message</a>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col">
                                <div class="scroll-parent">
                                    <div class="scroll-element utama">
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Lebih Cepat Dipelajari</div>
                                            <div class="fw-light text-grey pt-2">Source code yang diberikan sangat lengkap dari step awal hingga akhir.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/1.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Rinny
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Tips Sangat Membantu</div>
                                            <div class="fw-light text-grey pt-2">Tugas sekolah jadi terasa tidak terlalu sulit jika dilihat dari tips yang diberikan.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/2.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Andrew
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Recomended</div>
                                            <div class="fw-light text-grey pt-2">Jadi tidak takut untuk merekomendasikan kepada teman-teman yang membutuhkan.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/3.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Judi
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Banyak Pilihan</div>
                                            <div class="fw-light text-grey pt-2">Bergabung bersama kami untuk menemukan
                                                solusi dari permasalahan sistem anda.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/4.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Ronald
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="scroll-parent">
                                    <div class="scroll-element kedua">
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Pengganti Tatap Muka</div>
                                            <div class="fw-light text-grey pt-2">Bergabung bersama kami untuk menemukan
                                                solusi dari permasalahan sistem anda.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/3.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Alex
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Mudah Dipahami</div>
                                            <div class="fw-light text-grey pt-2">Sangat cocok untuk orang awam seperti saya mempelajari ini dari awal.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/5.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Skidrow
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Tidak Sulit Untuk Diikuti</div>
                                            <div class="fw-light text-grey pt-2">Pembelajaran cocok untuk pemula dengan materi yang sangat bagus.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/1.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Brew
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white rounded-4 p-4 my-3">
                                            <div class="fw-bold text-black fs-5">Materi Update</div>
                                            <div class="fw-light text-grey pt-2">Materi yang disediakan merupakan materi yang relate dengan pembelajaran saat ini.</div>
                                            <div class="d-flex align-items-center pt-3">
                                                <img src="assets/img/avatars/2.webp"
                                                    class="img-fluid rounded-circle">
                                                <div class="ps-2">
                                                    <div class="fw-bold text-black" style="font-size: 14px;">Hans
                                                    </div>
                                                    <div class="fw-light text-grey" style="font-size: 14px;">Mahasiswa
                                                        Tingkat Akhir</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- team -->
        <div class="py-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="text-black fs-1 fw-bold">OUR TEAM</div>
                        <div class="text-grey">Kami adalah tim yang akan menjadi solusi permasalahan sistem anda</div>
                    </div>
                </div>
                <div class="row gx-4 pt-4">
                    <div class="col">
                        <div class="p-4">
                            <img src="assets/img/avatars/tim1.png"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">T.A.P</div>
                                <div class="fw-light text-grey">Chief Operating Officer</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4">
                            <img src="https://via.placeholder.com/150x150.png?text=150x150"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">ED</div>
                                <div class="fw-light text-grey">Chief Technology Officer</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4">
                            <img src="https://via.placeholder.com/150x150.png?text=150x150"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">BOS</div>
                                <div class="fw-light text-grey">Chief Financial Officer</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4">
                            <img src="https://via.placeholder.com/150x150.png?text=150x150"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">IBEL</div>
                                <div class="fw-light text-grey">Chief Marketing Officer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer class="bg-primary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-sm-12 col-xs-12 col-md-12">
                        <a href="index.html" class=""><img src="assets/img/logo/logo-v3.png"
                                style="width: 50px; height: 50px;"></a>
                        <div class="text-white pt-4 pe-3">Website untuk membantu anda menemukan solusi dari
                            permasalahan
                            sistem pribadi maupun perusahaan anda.</div>
                        <div class="text-white pt-4 d-flex align-items-center"><img
                                src="assets/img/icon/copyright.png" class="pe-1">2020-2023 hendebro</div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-sm-6 col-xs-6 col-md-6">
                        <div class="fw-semibold text-white pb-3">Company</div>
                        <div><a href="about.html" class="text-decoration-none text-white fw-light pb-2">About</a>
                        </div>
                        <div><a href="contact.html" class="text-decoration-none text-white fw-light pb-2">Contact</a>
                        </div>
                        <div><a href="office.html" class="text-decoration-none text-white fw-light pb-2">Office</a>
                        </div>
                        <div><a href="https://www.instagram.com/hendebro/"
                                class="text-decoration-none text-white fw-light pb-2">Instagram</a></div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-sm-6 col-xs-6 col-md-6">
                        <div class="fw-semibold text-white pb-3">Source Code</div>
                        <div><a href="sourcecode.html" class="text-decoration-none text-white fw-light pb-2">Sistem
                                Informasi</a></div>
                        <div><a href="sourcecode.html" class="text-decoration-none text-white fw-light pb-2">Landing
                                Page</a></div>
                        <div><a href="sourcecode.html" class="text-decoration-none text-white fw-light pb-2">Point Of
                                Sales (POS)</a></div>
                        <div><a href="sourcecode.html" class="text-decoration-none text-white fw-light pb-2">Company
                                Profile</a></div>
                        <div><a href="sourcecode.html" class="text-decoration-none text-white fw-light pb-2">Sistem
                                Pakar</a></div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-sm-6 col-xs-6 col-md-6">
                        <div class="fw-semibold text-white pb-3">Hosting</div>
                        <div><a href="hosting.html" class="text-decoration-none text-white fw-light pb-2">Unlimited
                                Hosting</a></div>
                        <div><a href="hosting.html" class="text-decoration-none text-white fw-light pb-2">Domain</a>
                        </div>
                        <div><a href="hosting.html" class="text-decoration-none text-white fw-light pb-2">Cloud
                                Hosting</a></div>
                        <div><a href="hosting.html" class="text-decoration-none text-white fw-light pb-2">Company
                                Profile</a></div>
                        <div><a href="hosting.html" class="text-decoration-none text-white fw-light pb-2">Sistem
                                Pakar</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-sm-6 col-xs-6 col-md-6">
                        <div class="fw-semibold text-white pb-3">Product</div>
                        <div><a href="product.html?pos"
                                class="text-decoration-none text-white fw-light pb-2">POSBro</a>
                        </div>
                        <div><a href="product.html?gym"
                                class="text-decoration-none text-white fw-light pb-2">GYMBro</a>
                        </div>
                        <div><a href="product.html?klinik"
                                class="text-decoration-none text-white fw-light pb-2">CLIMBro</a></div>
                        <div><a href="product.html?qr" class="text-decoration-none text-white fw-light pb-2">QRBro</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="mobilex">
        <!-- nav -->
        <nav class="py-4 bg-white">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <a href="index.html" class=""><img src="assets/img/logo/logo-v2.png"
                                style="width: 50px; height: 50px;"></a>
                        <div class="ms-3 fw-bold fs-1 text-primary">hendebro.</div>
                        <div class="ms-auto">
                            <img src="assets/img/icon/hamburg.svg" class="rounded-circle bg-teal p-2">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main -->
        <div>
            <img src="assets/img/main.jpg" style="width: 100%; height: auto;">
        </div>

        <!-- client -->
        <div class="container py-4">
            <div class="row text-center">
                <div class="col">
                    <div class="text-primary fw-semibold">Official Partner</div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class="bg-light rounded-4">
                        <img src="assets/img/client.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- blog -->
        <div class="bg-teal py-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-primary">Find Information</div>
                        <div class="text-black fs-2 fw-bold">Temukan Infromasi Seputar Pemrograman</div>
                    </div>
                </div>
                <div class="row pt-3 xscroll">
                    <div class="col item2">
                        <div class="bg-white rounded-4 p-1">
                            <a href="blog.html" class="text-decoration-none">
                                <img src="assets/img/tips1.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black">UI / UX : Menggunakan Figma Sebagai Tools Utama
                                    </div>
                                    <div class="fw-light text-grey">Hello people spirit of learning! Dalam flutter
                                        terdapat widget elevated button yang...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col item2">
                        <div class="bg-white rounded-4 p-1">
                            <a href="blog.html" class="text-decoration-none">
                                <img src="assets/img/tips2.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black">Laravel Tutorial : Cara membuat model pada blade
                                    </div>
                                    <div class="fw-light text-grey">Hello people spirit of learning! Dalam flutter
                                        terdapat widget elevated button yang...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col item2">
                        <div class="bg-white rounded-4 p-1">
                            <a href="blog.html" class="text-decoration-none">
                                <img src="assets/img/tips3.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black">HTML Tutorial : Mahir Menggunakan Tag HTML</div>
                                    <div class="fw-light text-grey">Hello people spirit of learning! Dalam flutter
                                        terdapat widget elevated button yang...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- chat -->
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="assets/img/icon/chat.png" class="img-fluid">
                        <div class="ms-3">
                            <div class="text-black fw-bold fs-5">Need Answer?</div>
                            <div class="fw-light">Hubungi kami</div>
                        </div>
                        <div class="ms-auto">
                            <a href="https://api.whatsapp.com/send/?phone=6281211403600&text=Saya%20ingin%20bertanya%20seputar%20layanan%20yang%20diberikan%20oleh%20hendebro"
                                class="rounded-4 px-4 py-2 bg-teal text-decoration-none text-black">Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- source code -->
        <div class="bg-teal py-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-primary">Learn From Case Studies</div>
                        <div class="text-black fs-2 fw-bold">Pilih Kategori Sesuai Kebutuhan Anda</div>
                    </div>
                </div>
                <div class="row pt-3 xscroll">
                    <div class="col item2">
                        <div class="bg-white rounded-4 p-1">
                            <a href="sourcecode.html" class="text-decoration-none">
                                <img src="assets/img/kelas2.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black pb-2">PHP Codeigniter 5 & Bootstrap : E-Commerce
                                        Pasar Tradisional</div>
                                    <div class="text-black pb-3"><span
                                            class="text-danger text-decoration-line-through blink">Rp 500.000</span> Rp
                                        150.000</div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                        </div>
                                        <div class="ms-2">(87)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col item2">
                        <div class="bg-white rounded-4 p-1">
                            <a href="sourcecode.html" class="text-decoration-none">
                                <img src="assets/img/kelas3.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black pb-2">PHP Laravel8 & Bootstrap : Aplikasi Pemesanan
                                        Tiket</div>
                                    <div class="text-black pb-3">Rp 250.000</div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                        </div>
                                        <div class="ms-2">(34)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col item2">
                        <div class="bg-white rounded-4 p-1">
                            <a href="sourcecode.html" class="text-decoration-none">
                                <img src="assets/img/kelas1.png"
                                    class="img-fluid rounded-4">
                                <div class="p-2">
                                    <div class="fw-bold text-black pb-2">PHP Native & Bootstrap : Antrian Rumah Sakit
                                    </div>
                                    <div class="text-primary pb-3">Gratis</div>
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                            <img src="assets/img/icon/star.png">
                                        </div>
                                        <div class="ms-2">(1.289)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="text-black fs-1 fw-bold">OUR TEAM</div>
                        <div class="text-grey">Kami adalah tim yang akan menjadi solusi permasalahan sistem anda</div>
                    </div>
                </div>
                <div class="row gx-4 pt-4">
                    <div class="col">
                        <div class="p-4">
                            <img src="assets/img/avatars/tim1.png"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">T.A.P</div>
                                <div class="fw-light text-grey">Chief Operating Officer</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4">
                            <img src="https://via.placeholder.com/150x150.png?text=150x150"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">ED</div>
                                <div class="fw-light text-grey">Chief Technology Officer</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4">
                            <img src="https://via.placeholder.com/150x150.png?text=150x150"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">BOS</div>
                                <div class="fw-light text-grey">Chief Financial Officer</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-4">
                            <img src="https://via.placeholder.com/150x150.png?text=150x150"
                                class="img-fluid rounded-circle">
                            <div class="pt-3">
                                <div class="fw-bold fs-3 text-black">IBEL</div>
                                <div class="fw-light text-grey">Chief Marketing Officer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer class="bg-primary py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-sm-12 col-xs-12 col-md-12">
                        <div class="d-flex align-items-center">
                            <a href="index.html" class=""><img src="assets/img/logo/logo-v3.png"
                                    style="width: 50px; height: 50px;"></a>
                            <div class="ms-3">
                                <div class="text-white fw-bold fs-5">hendebro.</div>
                                <div class="text-white"><img src="assets/img/icon/copyright.png"
                                        class="pe-1">2020-2023
                                    hendebro</div>
                            </div>
                        </div>
                        <div class="text-white fw-light pt-2">Website untuk membantu anda menemukan solusi dari
                            permasalahan sistem pribadi maupun perusahaan anda.</div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <div class="fw-semibold text-white pb-2">Source Code</div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="sourcecode.html">Sistem Informasi</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="sourcecode.html">Landing Page</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="sourcecode.html">Point Of Sales (POS)</a>
                            </div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="sourcecode.html">Company Profile</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="sourcecode.html">Sistem Pakar</a></div>
                        </div>
                        <div class="col">
                            <div class="fw-semibold text-white pb-2">Product</div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="product.html?pos">POSBro</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="product.html?gym">GYMBro</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="product.html?klinik">CLIMBro</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="product.html?qr">QRBro</a></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <div class="fw-semibold text-white pb-2">Hosting</div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="hosting.html">Unlimited Hosting</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="hosting.html">Domain</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="hosting.html">Cloud Hosting</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="hosting.html">Company Profile</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="hosting.html">Sistem Pakar</a></div>
                        </div>
                        <div class="col">
                            <div class="fw-semibold text-white pb-2">Company</div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="about.html">About</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1" href="contact.html">Contact</a></div>
                            <div><a class="text-decoration-none text-white fw-light pb-1"
                                    href="https://www.instagram.com/hendebro/">Instagram</a></div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <div class="fw-semibold text-white pb-2">Office</div>
                            <div class="text-decoration-none text-white fw-light pb-1">CV. Hendebro</div>
                            <div class="text-decoration-none text-white fw-light pb-1">Jl. Premix (Komplek Rifaza 5) Blok D08</div>
                            <div class="text-decoration-none text-white fw-light pb-1">Jambi, Indonesia</div>
                            <div class="text-decoration-none text-white fw-light pb-1">+62 853 6899 9370</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/node_modules/bootstrap/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
