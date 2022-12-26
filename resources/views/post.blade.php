{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/posts?author={{ $post->author->username }}uthor/"
                        class="text-decoraton-none">{{ $post->author->name }}</a> In <a
                        href="/posts?category={{ $post->category->slug }}" class="text-decoraton-none">
                        {{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">Back</a>
            </div>
        </div>
    </div>
@endsection
{{-- 
Post::create([
    'title' => 'Judul Judul Ketiga',
    'category_id' =>3,
    'slug' => 'judul-ketiga',
    'exerpt' => 'ketiga Pada saat pasien datang berobat pasien akan mengambil nomor antrian sesuai loket yang dituju untuk mendaftar, dan tempat pendaftaran tersebut dibedakan menjadi',
    'body' => '<p>ketiga pasien baru diterima di Pendaftaran Pasien akan ditanya oleh petugas Pendaftaran Pasien guna mendapatkan data identitas yang akan diisi pada formulir pendaftaran pasien oleh pasien atau keluarga pasien.</p><p> pasien baru akan memperoleh nomor rekam medis yang akan digunakan sebagai kartu berobat yang harus dibawa pada setiap kunjungan berikutnya ke Rumah Sakit Setia Mitra baik sebagai pasien berobat jalan maupun rawat inap.</p><p> pasien baru akan memperoleh nomor rekam medis yang akan digunakan sebagai kartu berobat yang harus dibawa pada setiap kunjungan berikutnya ke Rumah Sakit Setia Mitra baik sebagai pasien berobat jalan maupun rawat inap</p>',
]);

Category::create([
    'name' => 'Persona;',
    'slug' => 'personal'
]); --}}
