@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
    <div class="card">
        <div class="card-header">
        <center><h1>Tentang Saya</h1></center>
        </div>
        <div class="card-body">
            <h5 class="text-center">Perjalanan Saya</h5>
            <p>Masa Kecil
            Dia lahir pada 15 Januari 1995 di sebuah kota kecil di Jawa Tengah. Tumbuh dalam keluarga sederhana, ayahnya seorang pengusaha kecil dan ibunya seorang guru. Dia diajarkan sejak kecil untuk menghargai pendidikan dan bekerja keras. </p>

            <p>Masa Remaja
            Di masa remaja, Dia menunjukkan minat besar pada sastra. Ia aktif menulis puisi dan cerita pendek, serta bergabung dalam kegiatan teater di sekolah. Meski terkadang ragu tentang masa depannya, Dia memutuskan untuk melanjutkan pendidikan di jurusan Sastra Indonesia di universitas. </p>

            <p>Karier dan Pencapaian
            Setelah lulus, Dia bekerja sebagai penulis dan editor di penerbitan buku. Karya pertamanya, Jejak Langkah di Tanah yang Hilang, mendapat sambutan positif. Meskipun menghadapi banyak rintangan, Dia tetap gigih menulis dan akhirnya dikenal sebagai penulis berbakat. </p>

            <p>Mimpi dan Harapan
            Kini, Dia terus berkarya dan berbicara di seminar-seminar sastra. Ia berharap dapat menginspirasi lebih banyak orang untuk mengejar impian mereka melalui tulisan. Dia percaya bahwa setiap tantangan adalah langkah menuju kesuksesan, dan hidup adalah kesempatan untuk mencapai hal-hal besar.</p>
        </div>
        <div class="mb-5">
            <h5 class="text-center">Hubungi Kami</h5>
            <p class="text-center">
                Jika anda memiliki pertanyaan atau masukan, silahkan hubungi kami melalui:
            </p>
            <div class="text-center">
                <a href="{{ route('contact')}} " class="btn btn-primary btn-lg">Hubungi Kami</a>
            </div>
        </div>
    </div>
@endsection